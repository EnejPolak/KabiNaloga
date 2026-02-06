document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".product-card");
  
    cards.forEach((card) => {
      const excerpt = card.querySelector(".js-excerpt");
      const btn = card.querySelector(".js-excerpt-toggle");
      if (!excerpt || !btn) return;
  
      const needsToggle = () => excerpt.scrollHeight > excerpt.clientHeight + 1;
  
      const refresh = () => {
        card.classList.remove("is-expanded");
        btn.textContent = "Prikaži več";
        btn.hidden = !needsToggle();
      };
  
      refresh();
  
      btn.addEventListener("click", () => {
        const expanded = card.classList.toggle("is-expanded");
        btn.textContent = expanded ? "Skrij" : "Prikaži več";
      });
  
      window.addEventListener("resize", () => {
        const expanded = card.classList.contains("is-expanded");
        if (expanded) return;
        btn.hidden = !needsToggle();
      });
    });
  });
  