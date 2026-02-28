document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("searchInput");
  const filterBtns = document.querySelectorAll(".filter-btn");
  const blogCards = document.querySelectorAll(".blog-card");
  const totalText = document.getElementById("totalBlogsText");
  const noResultsMessage = document.getElementById("noResultsMessage");
  const emptyStateContainer = document.getElementById("emptyStateContainer");

  function filterBlogs() {
    const searchTerm = searchInput.value.toLowerCase();
    const activeFilter = document.querySelector(".filter-btn.active").getAttribute("data-filter");
    let visibleCount = 0;

    if (emptyStateContainer) return;

    blogCards.forEach((card) => {
      const title = card.querySelector(".blog-title").innerText.toLowerCase();
      const category = card.getAttribute("data-category");

      const matchesSearch = title.includes(searchTerm);
      const matchesCategory = activeFilter === "all" || category === activeFilter;

      if (matchesSearch && matchesCategory) {
        card.style.display = "flex";
        visibleCount++;
      } else {
        card.style.display = "none";
      }
    });

    totalText.innerText = `Menampilkan ${visibleCount} artikel`;

    if (visibleCount === 0) {
      noResultsMessage.classList.remove("hidden");
    } else {
      noResultsMessage.classList.add("hidden");
    }
  }

  if (searchInput) {
    searchInput.addEventListener("input", filterBlogs);
  }

  filterBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      filterBtns.forEach((b) => {
        b.classList.remove("bg-emerald-600", "text-white", "shadow-sm", "active");
        b.classList.add("bg-gray-50", "text-gray-600", "border-gray-100");
      });

      this.classList.remove("bg-gray-50", "text-gray-600", "border-gray-100");
      this.classList.add("bg-emerald-600", "text-white", "shadow-sm", "active");

      filterBlogs();
    });
  });
});
