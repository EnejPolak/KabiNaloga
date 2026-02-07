(() => {
    const DURATION = 220;
  
    document.addEventListener("click", (e) => {
      const a = e.target.closest("a");
      if (!a) return;
  
      const href = a.getAttribute("href");
      if (!href) return;
  
      // Ignore: novi tab, download, anchor na isti strani, mailto/tel, external
      if (a.target === "_blank") return;
      if (href.startsWith("#")) return;
      if (href.startsWith("mailto:") || href.startsWith("tel:")) return;
      if (a.hasAttribute("download")) return;
  
      const url = new URL(href, window.location.href);
      if (url.origin !== window.location.origin) return;
  
      // Prevent default + fade out + navigate
      e.preventDefault();
      document.body.classList.add("is-leaving");
  
      window.setTimeout(() => {
        window.location.href = url.href;
      }, DURATION);
    });
  
    window.addEventListener("pageshow", () => {
      // ko greš nazaj z back gumbom (bfcache), odstrani leaving
      document.body.classList.remove("is-leaving");
    });
  })();
  