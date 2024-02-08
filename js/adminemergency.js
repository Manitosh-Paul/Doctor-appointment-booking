const head = document.querySelector("header");
const open_close_btn = document.querySelector(".open_close_btn");

open_close_btn.addEventListener("click", () => {
    head.classList.toggle('active');
})