"use client";

import { useEffect, useMemo, useState } from "react";
import Image from "next/image";

interface StitchAlbumRef {
  id: string;
  title: string;
}

interface StitchPhoto {
  id: string;
  filename: string;
  imageUrl: string;
  title: string;
  description: string;
  tags: string[];
  albums: StitchAlbumRef[];
  machineModels: string[];
  stitchClassifications: string[];
  applications: string[];
  legacyCollectionId: string | null;
  takenAt: string | null;
  searchIndex: string;
}

interface StitchAlbumFacet {
  id: string;
  title: string;
  description: string;
  count: number;
  isAggregate: boolean;
}

interface OptionFacet {
  value: string;
  count: number;
}

interface LegacyCollectionFacet {
  id: string;
  label: string;
  count: number;
  albumIds: string[];
}

interface ApiPayload {
  total: number;
  photos: StitchPhoto[];
  facets: {
    albums: StitchAlbumFacet[];
    machines: OptionFacet[];
    classifications: OptionFacet[];
    legacyCollections: LegacyCollectionFacet[];
  };
}

type SortMode = "newest" | "oldest" | "title";

interface StitchBrowserClientProps {
  initialQuery: string;
  initialAlbumId: string;
  initialLegacyCollectionId: string;
  initialSort: SortMode;
}

function normalizeInput(value: string) {
  return value.trim().toLowerCase();
}

function sortPhotos(photos: StitchPhoto[], sort: SortMode) {
  return [...photos].sort((a, b) => {
    if (sort === "title") {
      return (a.title || a.id).localeCompare(b.title || b.id);
    }
    if (sort === "oldest") {
      if (a.takenAt && b.takenAt) {
        return a.takenAt.localeCompare(b.takenAt);
      }
      if (a.takenAt) {
        return -1;
      }
      if (b.takenAt) {
        return 1;
      }
      return a.id.localeCompare(b.id);
    }
    if (a.takenAt && b.takenAt) {
      return b.takenAt.localeCompare(a.takenAt);
    }
    if (a.takenAt) {
      return -1;
    }
    if (b.takenAt) {
      return 1;
    }
    return a.id.localeCompare(b.id);
  });
}

export function StitchBrowserClient({
  initialQuery,
  initialAlbumId,
  initialLegacyCollectionId,
  initialSort,
}: StitchBrowserClientProps) {
  const [payload, setPayload] = useState<ApiPayload | null>(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState("");

  const [query, setQuery] = useState(initialQuery);
  const [albumId, setAlbumId] = useState(initialAlbumId);
  const [legacyCollectionId, setLegacyCollectionId] = useState(
    initialLegacyCollectionId
  );
  const [machineModel, setMachineModel] = useState("");
  const [classification, setClassification] = useState("");
  const [sort, setSort] = useState<SortMode>(initialSort);
  const [activePhoto, setActivePhoto] = useState<StitchPhoto | null>(null);

  useEffect(() => {
    let cancelled = false;
    setLoading(true);

    fetch("/api/stitch-samples")
      .then(async (response) => {
        if (!response.ok) {
          throw new Error("Failed to load stitch catalog");
        }
        const data = (await response.json()) as ApiPayload;
        if (!cancelled) {
          setPayload(data);
          setError("");
        }
      })
      .catch(() => {
        if (!cancelled) {
          setError("Unable to load stitch samples right now.");
        }
      })
      .finally(() => {
        if (!cancelled) {
          setLoading(false);
        }
      });

    return () => {
      cancelled = true;
    };
  }, []);

  const photos = payload?.photos ?? [];
  const albums = payload?.facets.albums ?? [];
  const legacyCollections = payload?.facets.legacyCollections ?? [];
  const machines = payload?.facets.machines ?? [];
  const classifications = payload?.facets.classifications ?? [];

  const visibleAlbums = useMemo(
    () => albums.filter((album) => !album.isAggregate),
    [albums]
  );

  const activeLegacyCollection = useMemo(() => {
    if (!legacyCollectionId) {
      return null;
    }
    return (
      legacyCollections.find((collection) => collection.id === legacyCollectionId) ??
      null
    );
  }, [legacyCollectionId, legacyCollections]);

  const filteredPhotos = useMemo(() => {
    const normalizedQuery = normalizeInput(query);
    const normalizedClassification = normalizeInput(classification);
    const normalizedMachine = machineModel.trim().toUpperCase();

    return photos.filter((photo) => {
      if (albumId && !photo.albums.some((album) => album.id === albumId)) {
        return false;
      }

      if (
        activeLegacyCollection &&
        !photo.albums.some((album) =>
          activeLegacyCollection.albumIds.includes(album.id)
        )
      ) {
        return false;
      }

      if (
        normalizedMachine &&
        !photo.machineModels.some((model) => model === normalizedMachine)
      ) {
        return false;
      }

      if (
        normalizedClassification &&
        !photo.stitchClassifications.some((item) =>
          item.toLowerCase().includes(normalizedClassification)
        )
      ) {
        return false;
      }

      if (
        normalizedQuery &&
        !photo.searchIndex.toLowerCase().includes(normalizedQuery)
      ) {
        return false;
      }

      return true;
    });
  }, [
    photos,
    query,
    albumId,
    activeLegacyCollection,
    machineModel,
    classification,
  ]);

  const sortedPhotos = useMemo(
    () => sortPhotos(filteredPhotos, sort),
    [filteredPhotos, sort]
  );

  const groupedResults = useMemo(() => {
    const byAlbum = new Map<string, StitchPhoto[]>();
    for (const photo of sortedPhotos) {
      for (const album of photo.albums) {
        if (albumId && album.id !== albumId) {
          continue;
        }
        if (
          activeLegacyCollection &&
          !activeLegacyCollection.albumIds.includes(album.id)
        ) {
          continue;
        }
        if (!byAlbum.has(album.id)) {
          byAlbum.set(album.id, []);
        }
        byAlbum.get(album.id)!.push(photo);
      }
    }

    const orderedAlbumIds = (albumId
      ? [albumId]
      : visibleAlbums.map((album) => album.id)
    ).filter((id) => byAlbum.has(id));

    return orderedAlbumIds.map((id) => {
      const album = albums.find((item) => item.id === id);
      return {
        id,
        title: album?.title ?? `Set ${id}`,
        description: album?.description ?? "",
        photos: byAlbum.get(id) ?? [],
      };
    });
  }, [sortedPhotos, albumId, activeLegacyCollection, albums, visibleAlbums]);

  return (
    <section className="mx-auto max-w-merrow px-4 py-8">
      <div className="rounded-md border border-[#d8d8d8] bg-[#f3f3f3] p-4">
        <div className="grid gap-3 md:grid-cols-5">
          <label className="md:col-span-2">
            <span className="mb-1 block text-[11px] font-bold uppercase tracking-[0.08em] text-[#555555]">
              Search
            </span>
            <input
              value={query}
              onChange={(event) => setQuery(event.target.value)}
              placeholder="Search stitch name, model, tags, or collection"
              className="w-full rounded border border-[#bcbcbc] bg-white px-3 py-2 text-[13px] text-[#333333] outline-none focus:border-[#7d7d7d]"
            />
          </label>

          <label>
            <span className="mb-1 block text-[11px] font-bold uppercase tracking-[0.08em] text-[#555555]">
              Legacy Collection
            </span>
            <select
              value={legacyCollectionId}
              onChange={(event) => {
                setLegacyCollectionId(event.target.value);
                setAlbumId("");
              }}
              className="w-full rounded border border-[#bcbcbc] bg-white px-2 py-2 text-[13px] text-[#333333] outline-none focus:border-[#7d7d7d]"
            >
              <option value="">All Collections</option>
              {legacyCollections.map((collection) => (
                <option key={collection.id} value={collection.id}>
                  {collection.label} ({collection.count})
                </option>
              ))}
            </select>
          </label>

          <label>
            <span className="mb-1 block text-[11px] font-bold uppercase tracking-[0.08em] text-[#555555]">
              Photoset
            </span>
            <select
              value={albumId}
              onChange={(event) => {
                setAlbumId(event.target.value);
                if (event.target.value) {
                  setLegacyCollectionId("");
                }
              }}
              className="w-full rounded border border-[#bcbcbc] bg-white px-2 py-2 text-[13px] text-[#333333] outline-none focus:border-[#7d7d7d]"
            >
              <option value="">All Photosets</option>
              {visibleAlbums.map((album) => (
                <option key={album.id} value={album.id}>
                  {album.title} ({album.count})
                </option>
              ))}
            </select>
          </label>

          <label>
            <span className="mb-1 block text-[11px] font-bold uppercase tracking-[0.08em] text-[#555555]">
              Sort
            </span>
            <select
              value={sort}
              onChange={(event) => setSort(event.target.value as SortMode)}
              className="w-full rounded border border-[#bcbcbc] bg-white px-2 py-2 text-[13px] text-[#333333] outline-none focus:border-[#7d7d7d]"
            >
              <option value="newest">Newest</option>
              <option value="oldest">Oldest</option>
              <option value="title">Title A-Z</option>
            </select>
          </label>

          <label>
            <span className="mb-1 block text-[11px] font-bold uppercase tracking-[0.08em] text-[#555555]">
              Machine
            </span>
            <select
              value={machineModel}
              onChange={(event) => setMachineModel(event.target.value)}
              className="w-full rounded border border-[#bcbcbc] bg-white px-2 py-2 text-[13px] text-[#333333] outline-none focus:border-[#7d7d7d]"
            >
              <option value="">All Models</option>
              {machines.map((machine) => (
                <option key={machine.value} value={machine.value}>
                  {machine.value} ({machine.count})
                </option>
              ))}
            </select>
          </label>

          <label>
            <span className="mb-1 block text-[11px] font-bold uppercase tracking-[0.08em] text-[#555555]">
              Stitch Class
            </span>
            <select
              value={classification}
              onChange={(event) => setClassification(event.target.value)}
              className="w-full rounded border border-[#bcbcbc] bg-white px-2 py-2 text-[13px] text-[#333333] outline-none focus:border-[#7d7d7d]"
            >
              <option value="">All Classifications</option>
              {classifications.map((item) => (
                <option key={item.value} value={item.value}>
                  {item.value} ({item.count})
                </option>
              ))}
            </select>
          </label>
        </div>
      </div>

      <div className="mt-3 text-[12px] text-[#565656]">
        {loading
          ? "Loading stitch samples..."
          : `${sortedPhotos.length} matching images across ${groupedResults.length} photosets`}
      </div>

      {error ? (
        <div className="mt-4 rounded border border-[#d6b5b5] bg-[#fff5f5] px-3 py-2 text-[13px] text-[#7a2c2c]">
          {error}
        </div>
      ) : null}

      {!loading && !error && groupedResults.length === 0 ? (
        <div className="mt-6 rounded border border-[#d8d8d8] bg-white px-4 py-5 text-[13px] text-[#666666]">
          No stitch samples matched your filters.
        </div>
      ) : null}

      {!loading &&
        !error &&
        groupedResults.map((group) => (
          <section
            key={group.id}
            className="mt-6 rounded border border-[#d8d8d8] bg-white p-4"
          >
            <div className="border-b border-[#e5e5e5] pb-2">
              <h2 className="text-[18px] leading-[22px] text-[#3a3a3a]">
                {group.title}
              </h2>
              <div className="text-[12px] text-[#666666]">
                {group.photos.length} matching images
              </div>
            </div>

            <div className="mt-4 grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
              {group.photos.slice(0, 24).map((photo) => (
                <button
                  key={`${group.id}-${photo.id}`}
                  onClick={() => setActivePhoto(photo)}
                  className="group text-left"
                >
                  <div className="relative aspect-square overflow-hidden rounded border border-[#d7d7d7] bg-[#f7f7f7]">
                    <Image
                      src={photo.imageUrl}
                      alt={photo.title || "Merrow stitch sample"}
                      fill
                      sizes="220px"
                      className="object-cover transition-transform group-hover:scale-[1.02]"
                    />
                  </div>
                  <div className="mt-1 line-clamp-2 text-[11px] leading-[14px] text-[#4d4d4d]">
                    {photo.title || photo.id}
                  </div>
                </button>
              ))}
            </div>

            {group.photos.length > 24 ? (
              <p className="mt-2 text-[11px] text-[#666666]">
                Showing 24 of {group.photos.length} images in this photoset.
              </p>
            ) : null}
          </section>
        ))}

      {activePhoto ? (
        <div
          className="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4"
          onClick={() => setActivePhoto(null)}
        >
          <div
            className="w-full max-w-5xl overflow-hidden rounded bg-white shadow-2xl"
            onClick={(event) => event.stopPropagation()}
          >
            <div className="flex items-center justify-between border-b border-[#dddddd] px-4 py-3">
              <h3 className="pr-4 text-[15px] font-semibold text-[#2f2f2f]">
                {activePhoto.title || activePhoto.id}
              </h3>
              <button
                onClick={() => setActivePhoto(null)}
                className="rounded border border-[#cfcfcf] px-2 py-1 text-[12px] text-[#444444] hover:bg-[#f3f3f3]"
              >
                Close
              </button>
            </div>

            <div className="grid gap-4 p-4 md:grid-cols-[minmax(0,1fr)_260px]">
              <div className="relative h-[60vh] min-h-[320px] overflow-hidden rounded border border-[#d7d7d7] bg-[#f8f8f8]">
                <Image
                  src={activePhoto.imageUrl}
                  alt={activePhoto.title || "Merrow stitch sample"}
                  fill
                  sizes="(max-width: 768px) 100vw, 70vw"
                  className="object-contain"
                />
              </div>

              <aside className="text-[12px] leading-[17px] text-[#474747]">
                {activePhoto.machineModels.length > 0 ? (
                  <div>
                    <h4 className="font-semibold text-[#333333]">Machine Models</h4>
                    <p>{activePhoto.machineModels.join(", ")}</p>
                  </div>
                ) : null}

                {activePhoto.stitchClassifications.length > 0 ? (
                  <div className="mt-3">
                    <h4 className="font-semibold text-[#333333]">
                      Stitch Classification
                    </h4>
                    <p>{activePhoto.stitchClassifications.join(", ")}</p>
                  </div>
                ) : null}

                {activePhoto.applications.length > 0 ? (
                  <div className="mt-3">
                    <h4 className="font-semibold text-[#333333]">Applications</h4>
                    <p>{activePhoto.applications.join(", ")}</p>
                  </div>
                ) : null}

                <div className="mt-3">
                  <h4 className="font-semibold text-[#333333]">Photosets</h4>
                  <ul className="mt-1 space-y-1">
                    {activePhoto.albums.map((album) => (
                      <li key={album.id}>
                        {album.title} ({album.id})
                      </li>
                    ))}
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      ) : null}
    </section>
  );
}
