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

const swiper = new Swiper(".swiper.swiper-features", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  breakpoints: {
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    }
  }
})

const swiperSteps = new Swiper(".swiper.swiper-steps", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-steps-button-next',
    prevEl: '.swiper-steps-button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    }
  }
})