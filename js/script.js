const catalogButton = document.querySelectorAll('.catalog__button_select');
const catalogItem = document.querySelectorAll('.catalog__select-item');
const catalogGrid = document.querySelector('.catalog__grid');
const catalogMore = document.querySelector('.catalog__more');
const sneakerShow = document.querySelector('.sneaker__show');
const sneakerGrid = document.querySelector('.sneaker__grid');
const sneakerTopWrapper = document.querySelector('.sneaker__top-wrapper');
const sneakerTop = document.querySelector('.sneaker__top');
const sneakerSize = document.querySelectorAll('.sneaker__size');

catalogButton.forEach(function (e) {
    e.addEventListener('click', function () {
        e.classList.toggle('catalog__button_active');
    })
})

catalogItem.forEach(function (e) {
    e.addEventListener('click', function () {
        catalogButton[0].classList.toggle('catalog__button_active');
        catalogButton[3].classList.toggle('catalog__button_active');
    })
})

try {
    catalogMore.addEventListener('click', function () {
        catalogGrid.classList.toggle('catalog__grid_active');
        catalogMore.style.display = 'none';
    })
} catch (error) { }

try {
    sneakerShow.addEventListener('click', function () {
        sneakerTopWrapper.classList.toggle('sneaker__top-wrapper_active');
        sneakerTop.classList.toggle('sneaker__top_active');
        sneakerShow.classList.toggle('sneaker__show_active');
    })
} catch (error) { }

sneakerSize.forEach(function (e) {
    e.addEventListener('click', function () {
        for (let i = 0; i < sneakerSize.length; i++) {
            sneakerSize[i].classList.remove('sneaker__size_active');
        }
        e.classList.add('sneaker__size_active');
    })
})

// Pop-up
const popupBg = document.querySelector('.popup-bg');
const popupRegister = document.querySelector('#popup-register');
const popupLogin = document.querySelector('#popup-login');
const openPopupButtons = document.querySelectorAll('.open-popup');
const closePopupButton = document.querySelectorAll('.close-popup');
const loginButton = document.querySelectorAll('.login-button');
const registerButton = document.querySelectorAll('.register-button');

openPopupButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        popupBg.classList.add('active');
        popupRegister.classList.add('active');
    })
});

closePopupButton.forEach((e) => {
    e.addEventListener('click', () => {
        popupBg.classList.remove('active');
        popupRegister.classList.remove('active');
        popupLogin.classList.remove('active');
    });
});

try {
    registerButton.forEach((e) => {
        e.addEventListener('click', () => {
            popupRegister.classList.add('active');
            popupLogin.classList.remove('active');
        });
    })
} catch { }

try {
    loginButton.forEach((e) => {
        e.addEventListener('click', () => {
            popupLogin.classList.add('active');
            popupRegister.classList.remove('active');
        });
    })
} catch { }

document.addEventListener('click', (e) => {
    if (e.target === popupBg) {
        popupBg.classList.remove('active');
        popupRegister.classList.remove('active');
        popupLogin.classList.remove('active');
    }
});

// Burger-menu
const burger = document.querySelector('.header__burger-menu');
const navigation = document.querySelector('.header__nav');
const closeMenu = document.querySelector('.header__close-burger');
const rightBurger = document.querySelector('.header__right-menu');
const navigationRight = document.querySelector('.header__right');
const closeRight = document.querySelector('.header__close-right');

burger.addEventListener('click', function () {
    navigation.classList.add('header__nav_active');
})

closeMenu.addEventListener('click', function () {
    navigation.classList.remove('header__nav_active');
})

rightBurger.addEventListener('click', function () {
    navigationRight.classList.add('header__right_active');
})

closeRight.addEventListener('click', function () {
    navigationRight.classList.remove('header__right_active');
})