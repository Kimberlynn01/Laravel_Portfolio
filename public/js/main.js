const Navbar = document.querySelector('nav ul');
const Menu = document.querySelector('.menu');

Menu.addEventListener("click", () => {
    Navbar.classList.toggle("top");
})

