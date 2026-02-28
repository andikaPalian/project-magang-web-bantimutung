document.documentElement.style.scrollBehavior = "smooth";

const modal = document.getElementById("infoModal");
const modalContent = modal.querySelector("div.relative");

function openModal(cardElement) {
  const title = cardElement.querySelector(".modal-title").innerText;
  const imgSrc = cardElement.querySelector(".modal-img").src;
  const fullText = cardElement.querySelector(".modal-full-text").innerHTML;

  document.getElementById("modalTitle").innerText = title;
  document.getElementById("modalImage").src = imgSrc;
  document.getElementById("modalText").innerHTML = fullText;

  modal.classList.remove("hidden");
  modal.classList.add("flex");

  setTimeout(() => {
    modal.classList.remove("opacity-0");
    modalContent.classList.remove("scale-95");
    modalContent.classList.add("scale-100");
  }, 10);

  document.body.style.overflow = "hidden";
}

function closeModal() {
  modal.classList.add("opacity-0");
  modalContent.classList.remove("scale-100");
  modalContent.classList.add("scale-95");

  setTimeout(() => {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
    document.body.style.overflow = "auto";
  }, 300);
}

document.addEventListener("keydown", function (event) {
  if (event.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
  }
});
