const navbar = document.querySelector('.navbar')
const logoLight = document.querySelector('.logo-light')
const logo = document.querySelector('.logo')
const mobileMenuToggle = document.querySelector('.mobile-menu-toggle')
const mobileMenu = document.querySelector('.mobile-menu')
const isFront = document.body.classList.contains("front-page")

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light")
}

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light")
}

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
  this.scrollY > 1 ? changeNavHeight("4.625rem") : changeNavHeight("5.875rem")
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff()
  }
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

const swiperBlog = new Swiper(".swiper.swiper-blog", {
  speed: 400,
  autoHeight: true,
  spaceBetween: 30,
  slidesPerView: 1,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 2
    }
  }
})

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
})

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
})

const modal_thanks = document.querySelector(".modal-thanks");
const modal_thanks_wrapper = document.querySelector(".modal-thanks-wrapper");
const modal_thanks_button = document.querySelector('.modal-thanks-button');

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal-thanks" ||
    event.target.parentNode.dataset.toggle == "modal-thanks" ||
    (!event.composedPath().includes(modal_thanks_wrapper) &&
      modal_thanks.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal_thanks.classList.toggle("is-open");
  }
})

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal_thanks.classList.contains("is-open")) {
    modal_thanks.classList.toggle("is-open");
  }
})

modal_thanks_button.addEventListener('click', () => {
  modal_thanks.classList.toggle("is-open");
  window.location.href = './';
});

const forms = document.querySelectorAll("form");
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: 'required',
        errorMessage: 'Укажите имя',
      },
      {
        rule: 'maxLength',
        value: 30,
        errorMessage: 'Максимально 30 символов',
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: 'required',
        errorMessage: 'Укажите телефон',
      }
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // наша форма
      const formData = new FormData(thisForm); // все данные из нашей формы
      const ajaxSend = (formDate) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            // alert("Форма отправлена!");
            modal_thanks.classList.toggle("is-open");
          } else {
            alert("Ошибка. Текст ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});

let elements = document.getElementsByClassName('input-phone');
for (let i = 0; i < elements.length; i++) {
  new IMask(elements[i], {
    mask: '+{0} (000) 000-00-00',
    eager: true
  });
}