const sections = document.querySelectorAll('section');
const navli = document.querySelectorAll('nav .navlinks ul li a');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= sectionTop) {
            current = section.getAttribute('id');
        }
    })

    navli.forEach(li => {
        li.classList.remove('activelinks');
        if (li.classList.contains(current)) {
            li.classList.add('activelinks');
        }
    })

})