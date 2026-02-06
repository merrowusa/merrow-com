// @version serial-lookup v1.0
// Route: /search1.php
// Legacy serial number lookup (no DB required)

"use client";

import { useMemo, useState } from "react";
import { useSearchParams } from "next/navigation";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";

const RANGE_MESSAGES: Array<{ min: number; max: number; message: string }> = [
  { min: 0, max: 5000, message: "Your Merrow Machine is old as dirt" },
  { min: 5000, max: 10000, message: "Your Machine was manufactured between 1906 and 1912" },
  { min: 10000, max: 15000, message: "Your Merrow Machine was manufactured between 1912 and 1916" },
  { min: 15000, max: 20000, message: "Your Merrow Machine was manufactured between 1916 and 1919" },
  { min: 20000, max: 25000, message: "Your Merrow Machine was manufactured between 1919 and 1921" },
  { min: 25000, max: 30000, message: "Your Merrow Machine was manufactured between 1921 and 1924" },
  { min: 30000, max: 35000, message: "Your Merrow Machine was manufactured between 1924 and 1925" },
  { min: 35000, max: 40000, message: "Your Merrow Machine was manufactured between 1925 and 1926" },
  { min: 40000, max: 45000, message: "Your Merrow Machine was manufactured between 1926 and 1927" },
  { min: 45000, max: 50000, message: "Your Merrow Machine was manufactured between 1927 and 1930" },
  { min: 50000, max: 55000, message: "Your Merrow Machine was manufactured between 1930 and 1934" },
  { min: 55000, max: 60000, message: "Your Merrow Machine was manufactured between 1934 and 1936" },
  { min: 60000, max: 65000, message: "Your Merrow Machine was manufactured between 1936 and 1939" },
  { min: 65000, max: 70000, message: "Your Merrow Machine was manufactured between 1939 and 1940" },
  { min: 70000, max: 75000, message: "Your Merrow Machine was manufactured between 1940 and 1945" },
  { min: 75000, max: 80000, message: "Your Merrow Machine was manufactured between 1945 and 1947" },
  { min: 80000, max: 85000, message: "Your Merrow Machine was manufactured between 1947 and 1948" },
  { min: 85000, max: 90000, message: "Your Merrow Machine was manufactured between 1948 and 1949" },
  { min: 90000, max: 95000, message: "Your Merrow Machine was manufactured between 1949 and 1950" },
  { min: 95000, max: 100000, message: "Your Merrow Machine was manufactured between 1950 and 1951" },
  { min: 100000, max: 105000, message: "Your Merrow Machine was manufactured between 1951 and 1952" },
  { min: 105000, max: 110000, message: "Your Merrow Machine was manufactured between 1952 and 1954" },
  { min: 110000, max: 112000, message: "Your Merrow Machine was manufactured between 1954 and 1955" },
  { min: 112000, max: 122000, message: "Your Merrow Machine was manufactured between 1955 and 1958" },
  { min: 122000, max: 130000, message: "Your Merrow Machine was manufactured between 1958 and 1960" },
  { min: 130000, max: 135000, message: "Your Merrow Machine was manufactured between 1960 and 1961" },
  { min: 135000, max: 140000, message: "Your Merrow Machine was manufactured between 1961 and 1962" },
  { min: 140000, max: 145000, message: "Your Merrow Machine was manufactured between 1962 and 1963" },
  { min: 145000, max: 150000, message: "Your Merrow Machine was manufactured between 1963 and 1964" },
  { min: 150000, max: 155000, message: "Your Merrow Machine was manufactured between 1964 and 1965" },
  { min: 155000, max: 160000, message: "Your Merrow Machine was manufactured between 1965 and 1966" },
  { min: 160000, max: 165000, message: "Your Merrow Machine was manufactured between 1966 and 1967" },
  { min: 165000, max: 170000, message: "Your Merrow Machine was manufactured between 1967 and 1968" },
  { min: 170000, max: 175000, message: "Your Merrow Machine was manufactured between 1968 and 1969" },
  { min: 175000, max: 180000, message: "Your Merrow Machine was manufactured between 1969 and 1970" },
  { min: 180000, max: 185000, message: "Your Merrow Machine was manufactured between 1970 and 1972" },
  { min: 185000, max: 194000, message: "Your Merrow Machine was manufactured between 1972 and 1973" },
  { min: 194000, max: 199000, message: "Your Merrow Machine was manufactured between 1973 and 1974" },
  { min: 199000, max: 204000, message: "Your Merrow Machine was manufactured between 1974 and 1975" },
  { min: 204000, max: 207000, message: "Your Merrow Machine was manufactured between 1975 and 1976" },
  { min: 207000, max: 211000, message: "Your Merrow Machine was manufactured between 1976 and 1979" },
  { min: 211000, max: 216000, message: "Your Merrow Machine was manufactured between 1979 and 1981" },
  { min: 216000, max: 222000, message: "Your Merrow Machine was manufactured between 1981 and 1983" },
  { min: 222000, max: 227000, message: "Your Merrow Machine was manufactured between 1983 and 1985" },
  { min: 227000, max: 233000, message: "Your Merrow Machine was manufactured between 1985 and 1987" },
  { min: 233000, max: 237000, message: "Your Merrow Machine was manufactured between 1987 and 1989" },
  { min: 237000, max: 242000, message: "Your Merrow Machine was manufactured between 1989 and 1991" },
  { min: 242000, max: 245000, message: "Your Merrow Machine was manufactured between 1991 and 1992" },
  { min: 245000, max: 246500, message: "Your Merrow Machine was manufactured between 1992 and 1993" },
  { min: 246500, max: 248000, message: "Your Merrow Machine was manufactured between 1993 and 1994" },
  { min: 248000, max: 250000, message: "Your Merrow Machine was manufactured between 1994 and 1995" },
  { min: 250000, max: 252500, message: "Your Merrow Machine was manufactured between 1995 and 1996" },
  { min: 252500, max: 300000, message: "Your Merrow Machine was manufactured between 1996 and 1999" },
  { min: 300000, max: 301000, message: "Your Merrow Machine was manufactured between 1999 and 2004" },
  { min: 301000, max: 302000, message: "Your Merrow Machine was manufactured between 2004 and 2007" },
  { min: 302000, max: 303000, message: "Your Merrow Machine was manufactured between 2007 and 2009" },
  { min: 303000, max: 304000, message: "Your Merrow Machine was manufactured between 2009 and 2010" },
  {
    min: 304000,
    max: 999999,
    message:
      "Hello Doc Brown! Your Merrow Machine is manufactured between 2010 and some time in our brave future.",
  },
];

const SPECIAL_CASES: Record<string, string> = {
  "Rob Merrow":
    "Happy 63rd Birthday <br /> xoxo Ow,Ml,Cg<br /><br />Things that happened on 2/1 in history... <a href=\"http://en.wikipedia.org/wiki/February_1st\"> Wiki Links</> <br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">",
  "Robert Merrow":
    "Happy 63rd Birthday <br /> xoxo Ow,Ml,Cg<br /><br />Things that happened on 2/1 in history... <a href=\"http://en.wikipedia.org/wiki/February_1st\"> Wiki Links</> <br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">",
  Rob:
    "Happy 63rd Birthday <br /> xoxo Ow,Ml,Cg<br /><br />Things that happened on 2/1 in history... <a href=\"http://en.wikipedia.org/wiki/February_1st\"> Wiki Links</> <br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">",
  "Mary Merrow":
    "Happy 61st Birthday Mary <br /> xoxo Ow,Ml,Cg<br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">",
  Mary:
    "Happy 61st Birthday Mary <br /> xoxo Ow,Ml,Cg<br /><br />Things that happened on 2/1 in history... <a href=\"http://en.wikipedia.org/wiki/February_1st\"> Wiki Links</> <br /><img src=\"https://s3.amazonaws.com/print_images/Munich%20Train%20Station.jpg\">",
};

function getSerialMessage(input: string) {
  const trimmed = input.trim();
  if (!trimmed) {
    return {
      message:
        "your serial number is located on a Merrow tag on the front of the machine",
      isHtml: false,
      showSerial: false,
    };
  }

  if (SPECIAL_CASES[trimmed]) {
    return {
      message: SPECIAL_CASES[trimmed],
      isHtml: true,
      showSerial: true,
    };
  }

  const asNumber = Number(trimmed);
  if (!Number.isNaN(asNumber)) {
    for (const range of RANGE_MESSAGES) {
      if (asNumber > range.min && asNumber < range.max) {
        return {
          message: range.message,
          isHtml: false,
          showSerial: true,
        };
      }
    }
  }

  return {
    message:
      "It's likely that " +
      trimmed +
      " is not a valid serial number. If you're making one up to test us, kuddos. If you're just typing something in to see what happens.... better luck next time. </div> <br /> If you've really tried to type in a serial number double check that " +
      trimmed +
      " is written on the tag on the machine or call us at 800.431.6677",
    isHtml: true,
    showSerial: true,
  };
}

export default function SerialLookupPage() {
  const searchParams = useSearchParams();
  const initialQuery = searchParams.get("q") ?? "";
  const [query, setQuery] = useState(initialQuery);
  const [submitted, setSubmitted] = useState(Boolean(initialQuery));

  const result = useMemo(
    () => (submitted ? getSerialMessage(query) : null),
    [query, submitted]
  );

  return (
    <main className="text-merrow-textMain">
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <PageHeader
            eyebrow="Merrow Age"
            title="Enter your Merrow ID or Serial Number"
            subtitle="Determine the approximate manufacturing year of your Merrow machine."
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10 space-y-6">
          <form
            className="flex flex-col gap-3 sm:flex-row sm:items-end"
            onSubmit={(event) => {
              event.preventDefault();
              setSubmitted(true);
            }}
          >
            <label className="flex-1 text-[13px] text-merrow-textSub">
              Serial Number
              <input
                className="mt-2 w-full rounded border border-merrow-border px-3 py-2 text-[14px]"
                type="text"
                name="q"
                value={query}
                onChange={(event) => setQuery(event.target.value)}
                placeholder="e.g. 150000"
              />
            </label>
            <MerrowButton type="submit">Search</MerrowButton>
          </form>

          {result ? (
            <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-6 shadow-[0_6px_16px_rgba(0,0,0,0.04)]">
              {result.showSerial ? (
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
                  your serial #: {query.trim()}
                </div>
              ) : null}
              <div className="mt-3 text-[13px] text-merrow-textSub">
                {result.isHtml ? (
                  // Legacy HTML content (trusted)
                  <div dangerouslySetInnerHTML={{ __html: result.message }} />
                ) : (
                  <p>{result.message}</p>
                )}
              </div>
            </div>
          ) : null}
        </div>
      </FullBleed>
    </main>
  );
}
