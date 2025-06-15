document.addEventListener("DOMContentLoaded", function () {
  // === Hamburger Menu ===
  const hamburger = document.getElementById("hamburger");
  const navMenu = document.getElementById("nav-menu");

  hamburger?.addEventListener("click", () => {
    navMenu?.classList.toggle("active");
  });

  // === Modal Login ===
  const openLoginBtn = document.getElementById("openModal");
  const loginModal = document.getElementById("loginModal");
  const closeLoginBtn = document.getElementById("closeModalLogin");

  openLoginBtn?.addEventListener("click", () => {
    loginModal.style.display = "flex";
  });

  closeLoginBtn?.addEventListener("click", () => {
    loginModal.style.display = "none";
  });

  // === Modal Absen ===
  const absenModal = document.getElementById("absenModal");
  const openAbsenBtn = document.getElementById("modalAbsen");
  const closeAbsenBtn = document.getElementById("closeModalAbsen");
  const cancelAbsenBtn = document.getElementById("cancelModalAbsen");

  openAbsenBtn?.addEventListener("click", () => {
    absenModal.style.display = "flex";
  });

  [closeAbsenBtn, cancelAbsenBtn].forEach((el) => {
    el?.addEventListener("click", () => {
      absenModal.style.display = "none";
    });
  });

  // === Modal Lapor ===
  const laporModal = document.getElementById("laporModal");
  const openLaporBtn = document.getElementById("modalLapor");
  const closeLaporBtn = document.getElementById("closeModalLapor");
  const cancelLaporBtn = document.getElementById("cancelModalLapor");

  openLaporBtn?.addEventListener("click", () => {
    laporModal.style.display = "flex";
  });

  [closeLaporBtn, cancelLaporBtn].forEach((el) => {
    el?.addEventListener("click", () => {
      laporModal.style.display = "none";
    });
  });

  // === Global: Klik di luar modal menutup ===
  window.addEventListener("click", (e) => {
    if (e.target === loginModal) {
      loginModal.style.display = "none";
    } else if (e.target === absenModal) {
      absenModal.style.display = "none";
    } else if (e.target === laporModal) {
      laporModal.style.display = "none";
    }
  });
});
