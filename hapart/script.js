function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
  }

  document.addEventListener("DOMContentLoaded", () => {
    const loginBtn = document.getElementById("login-btn");
    const registerBtn = document.getElementById("register-btn");
    const loginModal = document.getElementById("login-modal");
    const registerModal = document.getElementById("register-modal");
    const closeBtns = document.querySelectorAll(".close-btn");

    // Open the login modal
    loginBtn.addEventListener("click", (e) => {
        e.preventDefault();
        loginModal.style.display = "flex";
    });

    // Open the register modal
    registerBtn.addEventListener("click", (e) => {
        e.preventDefault();
        registerModal.style.display = "flex";
    });

    // Close modals
    closeBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            loginModal.style.display = "none";
            registerModal.style.display = "none";
        });
    });

    // Close modals when clicking outside the modal content
    window.addEventListener("click", (e) => {
        if (e.target === loginModal) {
            loginModal.style.display = "none";
        }
        if (e.target === registerModal) {
            registerModal.style.display = "none";
        }
    });
});