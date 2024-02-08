const containerScroll = document.querySelector(".container");
const navlink = document.querySelector(".navlinks");
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll <= 0) {
        containerScroll.classList.remove("fixed");
    }

    if (currentScroll > lastScroll && !containerScroll.classList.contains("scroll-down")) {
        containerScroll.classList.remove("fixed");
        containerScroll.classList.add("scroll-down");
    }

    if (currentScroll < lastScroll && containerScroll.classList.contains("scroll-down")) {
        containerScroll.classList.remove("scroll-down");
        containerScroll.classList.add("fixed");
    }

    lastScroll = currentScroll;
})
