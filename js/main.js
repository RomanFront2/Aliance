const navbar = document.querySelector('.navbar')
const logo = document.querySelector('.logo-svg use')
const mobileMenuToggle = document.querySelector('.mobile-menu-toggle')
const mobileMenu = document.querySelector('.mobile-menu')

window.addEventListener('scroll', () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light")
    logo.href.baseVal = "img/sprite.svg#logo"
  } else {
    navbar.classList.remove("navbar-light")
    logo.href.baseVal = "img/sprite.svg#logo_light"
  }
})

mobileMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  mobileMenu.classList.toggle("isOpen");
})