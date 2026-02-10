(() => {
    const navbar = document.getElementById("navbar");
    if (!navbar) return;
  
    const btn = navbar.querySelector(".nav-toggle");
    const links = navbar.querySelector(".nav-links");
    if (!btn || !links) return;
  
    const setOpen = (open) => {
      navbar.classList.toggle("is-open", open);
      btn.setAttribute("aria-expanded", open ? "true" : "false");
    };
  
    btn.addEventListener("click", () => {
      setOpen(!navbar.classList.contains("is-open"));
    });
  
    document.addEventListener("click", (e) => {
      if (!navbar.classList.contains("is-open")) return;
      if (e.target.closest("#navbar")) return;
      setOpen(false);
    });
  
    window.addEventListener("resize", () => {
      if (window.innerWidth > 640) setOpen(false);
    });
  })();
  