const navbar = document.querySelector(".navbar");
const open_close_btn = document.querySelector(".open_close_btn");

open_close_btn.addEventListener("click", () => {
    navbar.classList.toggle('active');
})