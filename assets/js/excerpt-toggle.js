document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".product-card");
  
    cards.forEach((card) => {
      const excerpt = card.querySelector(".product-excerpt");
      const toggle = card.querySelector(".excerpt-toggle");
  
      if (!excerpt || !toggle) return;
  
      const needsToggle = excerpt.scrollHeight > excerpt.clientHeight + 1;
  
      if (!needsToggle) {
        toggle.style.display = "none";
        return;
      }
  
      toggle.addEventListener("click", (e) => {
        e.preventDefault();
  
        const isExpanded = card.classList.toggle("is-expanded");
  
        toggle.textContent = isExpanded ? "MANJ" : "VEČ";
        toggle.setAttribute("aria-expanded", isExpanded ? "true" : "false");
      });
    });
  });
  