// @version social-share-sidebar v1.0
//
// Floating social share sidebar (matches legacy homepage)
// Position: fixed left side, vertically centered

export function SocialShareSidebar() {
  return (
    <div className="fixed left-0 top-1/2 -translate-y-1/2 z-50 hidden md:block">
      <div className="flex flex-col items-center">
        {/* Shares label */}
        <div className="bg-[#666] text-white text-[10px] px-2 py-1 mb-1">
          Shares
        </div>

        {/* Facebook */}
        <a
          href="https://www.facebook.com/sharer/sharer.php?u=https://www.merrow.com"
          target="_blank"
          rel="noopener noreferrer"
          className="w-8 h-8 bg-[#3b5998] flex items-center justify-center hover:opacity-80 transition-opacity"
          aria-label="Share on Facebook"
        >
          <svg className="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
          </svg>
        </a>

        {/* X (Twitter) */}
        <a
          href="https://twitter.com/intent/tweet?url=https://www.merrow.com&text=Merrow%20Sewing%20Machine%20Company"
          target="_blank"
          rel="noopener noreferrer"
          className="w-8 h-8 bg-[#000] flex items-center justify-center hover:opacity-80 transition-opacity"
          aria-label="Share on X"
        >
          <svg className="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
          </svg>
        </a>

        {/* Pinterest */}
        <a
          href="https://pinterest.com/pin/create/button/?url=https://www.merrow.com&description=Merrow%20Sewing%20Machine%20Company"
          target="_blank"
          rel="noopener noreferrer"
          className="w-8 h-8 bg-[#cb2027] flex items-center justify-center hover:opacity-80 transition-opacity"
          aria-label="Share on Pinterest"
        >
          <svg className="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/>
          </svg>
        </a>

        {/* Email */}
        <a
          href="mailto:?subject=Merrow%20Sewing%20Machine%20Company&body=Check%20out%20Merrow%20Sewing%20Machine%20Company%3A%20https%3A%2F%2Fwww.merrow.com"
          className="w-8 h-8 bg-[#666] flex items-center justify-center hover:opacity-80 transition-opacity"
          aria-label="Share via Email"
        >
          <svg className="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
          </svg>
        </a>
      </div>
    </div>
  );
}
