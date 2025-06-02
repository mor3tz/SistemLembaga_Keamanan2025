const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-menu");

hamburger.addEventListener("click", () => {
  navMenu.classList.toggle("active");
});

const openModalBtn = document.getElementById("openModal");
const closeModalBtn = document.getElementById("closeModal");
const loginModal = document.getElementById("loginModal");

openModalBtn.addEventListener("click", () => {
  loginModal.style.display = "flex"; // Flex agar center sesuai CSS
});

closeModalBtn.addEventListener("click", () => {
  loginModal.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target === loginModal) {
    loginModal.style.display = "none";
  }
});
