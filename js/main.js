const navbar = document.querySelector('.navbar')
const logo = document.querySelector('.logo-svg use')
const mobileMenuToggle = document.querySelector('.mobile-menu-toggle')
const mobileMenu = document.querySelector('.mobile-menu')

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light")
  logo.href.baseVal = "img/sprite.svg#logo"
}

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light")
  logo.href.baseVal = "img/sprite.svg#logo_light"
}

const openMenu = (event) => {
  mobileMenu.classList.add("isOpen");
  mobileMenuToggle.classList.add("closeMenu");
  document.body.style.overflow = "hidden";
  lightModeOn()
}

const closeMenu = (event) => {
  mobileMenu.classList.remove("isOpen");
  mobileMenuToggle.classList.remove("closeMenu");
  document.body.style.overflow = "";
  lightModeOff()
}


window.addEventListener('scroll', () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff()
})

mobileMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  mobileMenu.classList.contains('isOpen') ? closeMenu() : openMenu();
})