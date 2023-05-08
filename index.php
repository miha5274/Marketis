<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Покупайте быстро и безопасно в самом необычном интернет магазине Marketis" />
    <title>Marketis</title>
    <link rel="shortcut icon" href="./img/lightning.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php                  
    session_start(); 
    ?>
    <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <div class="header__logo">
            <span class="header__marketis">Marketis</span>
          </div>
          <!-- Navigation -->
          <nav class="header__nav">
            <ul class="header__menu">
              <li class="header__item">
                <a class="header__link header__link_main header__link_active" href="index.php">Главная страница</a>
              </li>
              <li class="header__item">
                <a class="header__link" href="catalog.php">Каталог</a>
              </li>
              <li class="header__item">
                <!-- Если пользователь не авторизован не показывается кнопка профиль -->
              <?php
                  if (isset($_SESSION['username'])) : ?>
                  <a class="header__link" href="profile.php">Профиль</a>
              <?php else : ?>
                  <a class="header__link open-popup" >Логин</span>
              <?php endif; 
              ?>
              </li>
            </ul>
            <button class="header__close-burger">
              <span class="visually-hidden">Закрыть меню</span>
              <img src="icons/close-neon.svg" width="27" height="27" alt="" />
            </button>
          </nav>
          <!-- Burger -->
          <button class="header__burger-menu" type="button">
            <span class="visually-hidden">Меню</span>
            <span class="header__line"></span>
            <span class="header__line"></span>
            <span class="header__line"></span>
          </button>
          <div class="header__collections">
            <div class="header__collections-inner">
              <div class="header__collections-text">Collections</div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main -->
    <main class="main">
      <!-- Ellipse -->
      <img class="ellipse ellipse_header" width="1235" height="700" src="img/ellipse-header.png" alt="Gradient ellipse" />
      <img class="ellipse ellipse_main" width="551" height="2807" src="img/ellipse-main.png" alt="Gradient ellipse" />

      <!-- Promo -->
      <section class="promo">
        <div class="container">
          <div class="promo__wrapper">
            <div class="promo__market">
              <div class="promo__marketis">Marketis</div>
              <div class="promo__top">
                <div class="promo__marketplace">Marketplace</div>
                <div class="promo__line"></div>
              </div>
            </div>
            <div class="promo__buy">
              <div class="promo__desc">Нажми на кнопку, чтобы перейти ко всем товарам торговой площадки «Marketis»</div>
              <a class="promo__button" href="catalog.php">
                <div class="promo__button-blur"></div>
                <div class="promo__button-bg"></div>
                <div class="promo__button-text">Приступить к покупкам</div>
              </a>
            </div>
            <div class="promo__item">
              <h1 class="promo__title">Mark<br />etis</h1>
              <span class="promo__brand">Nike</span>
              <div class="promo__shoe">
                <img class="promo__shoe-img" src="img/sneaker-aj1.png" width="703" height="556" alt="Nike Air Jordan 1" />
              </div>
            </div>
            <div class="promo__numerations">
              <button class="promo__numeration promo__numeration_active" type="button">
                <span class="promo__numeration-bg">
                  <span class="promo__number">1</span>
                </span>
              </button>
              <button class="promo__numeration" type="button">
                <span class="promo__numeration-bg">
                  <span class="promo__number">2</span>
                </span>
              </button>
              <button class="promo__numeration" type="button">
                <span class="promo__numeration-bg">
                  <span class="promo__number">3</span>
                </span>
              </button>
              <button class="promo__numeration promo__numeration_add" type="button">
                <span class="promo__numeration-bg">
                  <span class="visually-hidden">Добавить</span>
                  <span class="promo__numeration-line"></span>
                  <span class="promo__numeration-line"></span>
                </span>
              </button>
            </div>
            <button class="promo__next" type="button">Следующий</button>
          </div>
        </div>
      </section>

      <!-- Buy -->
      <section class="buy">
        <div class="container">
          <div class="buy__wrapper">
            <div class="buy__left">
              <div class="buy__pink"></div>
              <div class="buy__blue"></div>
              <div class="buy__item">
                <div class="buy__item-wrapper">
                  <div class="buy__shoe">
                    <div class="buy__shoe-name">OFF<br />WHITE</div>
                    <div class="buy__shoe-img-inner">
                      <img class="buy__shoe-img" width="459" height="258" src="img/sneaker-nike.png" alt="Nike" />
                    </div>
                    <div class="buy__brand">
                      <div class="buy__brand-name">NIKE X OFFWHITE</div>
                    </div>
                  </div>
                  <div class="buy__review">
                    <div class="buy__review-left">
                      <div class="buy__reviewer">
                        <img class="buy__reviewer-img" width="60" height="60" src="img/reviewer.jpg" alt="Девушка на неоновом фоне" />
                        <img class="buy__reviewer-blur" width="60" height="60" src="img/reviewer.jpg" alt="Девушка на неоновом фоне" />
                      </div>
                      <div class="buy__review-inner">
                        <div class="buy__name">Laura</div>
                        <div class="buy__rating">
                          <img class="buy__star" width="17" height="16" src="icons/star.svg" alt="Желтая звездочка" />
                          <img class="buy__star" width="17" height="16" src="icons/star.svg" alt="Желтая звездочка" />
                          <img class="buy__star" width="17" height="16" src="icons/star.svg" alt="Желтая звездочка" />
                          <img class="buy__star" width="17" height="16" src="icons/star.svg" alt="Желтая звездочка" />
                          <img class="buy__star" width="17" height="16" src="icons/star.svg" alt="Желтая звездочка" />
                          <span class="buy__digits">5.0</span>
                        </div>
                      </div>
                    </div>
                    <div class="buy__review-right">
                      Лучший магазин, которым я когда-либо пользовалась! Купила себе обновочку, все доставили в срок!
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="buy__right">
              <h2 class="buy__title">
                Покупайте <span class="buy__purple-word">быстро</span> и <span class="buy__blue-word">безопасно</span> в самом необычном интернет
                магазине
                <span class="buy__gradient">Marketis</span>
              </h2>
              <div class="buy__desc">Просто нажми на эту кнопку и стань частью самого крупного интернет-магазина в России!</div>
              <button class="buy__button open-popup" type="button">Присоединиться</button>
            </div>
          </div>
        </div>
      </section>

      <!-- Shoes -->
      <section class="shoes">
        <div class="container">
          <div class="shoes__wrapper">
            <div class="shoes__top">
              <h2 class="shoes__title">Кроссовки в наличии</h2>
              <a class="shoes__all" href="catalog.php">Смотреть все</a>
            </div>
            <div class="shoes__grid">
            <script>
                fetch('get_index.php')
                .then(response => response.text())
                .then(data => {
                  const catalog = document.querySelector('.shoes__grid');
                  catalog.insertAdjacentHTML('beforeend', data);
                })
                .catch(error => {
                  // обработка ошибок
                  console.error(error);
                });
              </script>
            </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <img class="ellipse ellipse_footer" width="1061" height="1133" src="img/ellipse-footer.png" alt="Gradient ellipse" />
      <div class="container">
        <div class="footer__bg">
          <div class="footer__wrapper">
            <div class="footer__left">
              <div class="footer__support">Связь с тех. поддержкой</div>
              <div class="footer__help">Мы всегда вам поможем в любое время!</div>
              <form class="footer__form" method="post" action="email_subscribe.php">
                <div class="footer__email">
                  <input class="footer__input" name="email" type="email" placeholder="Your Email" required />
                </div>
                <button class="footer__submit" type="submit">
                  <span class="footer__submit-bg">Submit</span>
                </button>
              </form>
            </div>
            <div class="footer__center">
              <div class="footer__top">
                <div class="footer__name">
                  <div class="footer__marketis">Marketis</div>
                  <div class="footer__sneakermarket">SNEAKERMARKET</div>
                </div>
              </div>
              <div class="footer__bottom">
                <div class="footer__socials">
                  <a class="footer__social" href="#!">
                    <span class="visually-hidden">Twitter</span>
                    <svg width="31" height="26" viewBox="0 0 31 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M31 2.98181C29.8472 3.4875 28.6188 3.82269 27.3381 3.98544C28.6556 3.19881 29.6612 1.96269 30.1339 0.47275C28.9056 1.20512 27.5493 1.72244 26.1039 2.01113C24.9376 0.769188 23.2752 0 21.4617 0C17.9432 0 15.1106 2.85588 15.1106 6.35694C15.1106 6.86069 15.1532 7.34506 15.2578 7.80619C9.97425 7.5485 5.29906 5.01619 2.15838 1.15863C1.61006 2.10994 1.28844 3.19881 1.28844 4.371C1.28844 6.572 2.42188 8.52306 4.11137 9.65263C3.09031 9.63325 2.08862 9.33681 1.24 8.86987C1.24 8.88925 1.24 8.91444 1.24 8.93962C1.24 12.028 3.44294 14.5932 6.33175 15.1842C5.81444 15.3256 5.25063 15.3934 4.6655 15.3934C4.25863 15.3934 3.84787 15.3702 3.46231 15.2849C4.28575 17.8018 6.62238 19.6521 9.40075 19.7121C7.2385 21.4036 4.49306 22.4227 1.52094 22.4227C0.99975 22.4227 0.499875 22.3994 0 22.3355C2.81519 24.1509 6.15156 25.1875 9.7495 25.1875C21.4443 25.1875 27.838 15.5 27.838 7.10287C27.838 6.82194 27.8283 6.55069 27.8148 6.28138C29.0761 5.38625 30.1359 4.26831 31 2.98181Z"
                        fill="#5E40D5" />
                    </svg>
                  </a>
                  <a class="footer__social" href="#!">
                    <span class="visually-hidden">Telegram</span>
                    <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M14.5185 20.4311L13.9064 29.0862C14.7821 29.0862 15.1614 28.708 15.6162 28.2539L19.7217 24.3092L28.2289 30.5727C29.7891 31.4469 30.8883 30.9865 31.3092 29.1296L36.8932 2.82316L36.8948 2.82161C37.3897 0.502826 36.0607 -0.403919 34.5406 0.164928L1.71773 12.7989C-0.522363 13.6731 -0.488446 14.9286 1.33693 15.4974L9.72842 18.1216L29.2202 5.8596C30.1375 5.2489 30.9716 5.5868 30.2855 6.1975L14.5185 20.4311Z"
                        fill="#5E40D5" />
                    </svg>
                  </a>
                </div>
                <div class="footer__links">
                  <a class="footer__link" href="#!">Terms</a> · <a class="footer__link" href="#!">Privacy</a> ·
                  <a class="footer__link" href="#!">Guidelines </a>
                </div>
                <div class="footer__copyright">© 2019-2020 marketismarketplace.xyz</div>
              </div>
            </div>
            <div class="footer__right">
              <div class="footer__faq">FAQ</div>
              <div class="footer__desc">
                Can I cancel my subscription at anytime?<br />Sure. Your paid subscription can be cancelled anytime by shifting to Lite plan. Will you
                renew my subscription automatically?<br />Yes, your subscription will be automatically renewed according to your pay period.
              </div>
              <a class="footer__more" href="#!">Read more..</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Pop-up -->
    <div class="popup-bg">
      <!-- Register -->
      <div class="popup" id="popup-register">
        <div class="popup-ellipse-1"></div>
        <div class="popup-ellipse-2"></div>
        <div class="popup-ellipse-3"></div>
        <div class="popup-ellipse-4"></div>
        <div class="popup__info">
          <div class="popup__hello">С возвращением!</div>
          <div class="popup__desc">Чтобы оставаться на связи с нами, пожалуйста, войдите под своей личной информацией</div>
          <button class="popup__login login-button" type="button">ЛОГИН</button>
        </div>
        <div class="popup__wrapper">
          <div class="popup__name">Создайте свой аккаунт</div>
          <div class="popup__socials">
            <a class="popup__social" href="#!">
              <span class="visually-hidden">Twitter</span>
              <div class="popup__social-bg">
                <img src="icons/twitter-neon.svg" width="23" height="19" alt="Twitter" />
              </div>
            </a>
            <a class="popup__social" href="#!">
              <span class="visually-hidden">Facebook</span>
              <div class="popup__social-bg">
                <img src="icons/facebook-neon.svg" width="12" height="20" alt="Facebook" />
              </div>
            </a>
            <a class="popup__social" href="#!">
              <span class="visually-hidden">Linkedin</span>
              <div class="popup__social-bg">
                <img src="icons/linkedin-neon.svg" width="18" height="17" alt="Linkedin" />
              </div>
            </a>
          </div>
          <div class="popup__help">или используйте электронную почту для регистрации</div>
          <form class="popup__form" method="post" action="register.php">
            <div class="popup__placeholder popup__placeholder_name">
              <input class="popup__input" name="username" type="text" placeholder="Имя" />
            </div>
            <div class="popup__placeholder popup__placeholder_email">
              <input class="popup__input" name="email" type="email" placeholder="Почта" />
            </div>
            <div class="popup__placeholder popup__placeholder_password">
              <input class="popup__input" name="password" type="password" placeholder="Пароль" />
            </div>
            <button class="popup__submit" type="submit">
              <span class="popup__submit-bg">Зарегистроваться</span>
            </button>
          </form>

          <button class="popup__question login-button" type="button">Есть аккаунт?</button>
        </div>

        <img class="close-popup" src="icons/close-neon.svg" alt="" />
      </div>

      <!-- Login -->
      <div class="popup" id="popup-login">
        <div class="popup-ellipse-1"></div>
        <div class="popup-ellipse-3"></div>
        <div class="popup-ellipse-4"></div>
        <div class="popup-ellipse-5"></div>
        <div class="popup-ellipse-6"></div>
        <div class="popup__info">
          <div class="popup__hello">Привет, Друг!</div>
          <div class="popup__desc">Просто введите свои личные данные и начните делать покупки с нами!</div>
          <button class="popup__login register-button" type="button">Зарегистрироваться</button>
        </div>
        <div class="popup__wrapper">
          <div class="popup__name">Войдите в ваш аккаунт</div>
          <div class="popup__socials">
            <a class="popup__social" href="#!">
              <span class="visually-hidden">Twitter</span>
              <div class="popup__social-bg">
                <img src="icons/twitter-neon.svg" width="23" height="19" alt="Twitter" />
              </div>
            </a>
            <a class="popup__social" href="#!">
              <span class="visually-hidden">Facebook</span>
              <div class="popup__social-bg">
                <img src="icons/facebook-neon.svg" width="12" height="20" alt="Facebook" />
              </div>
            </a>
            <a class="popup__social" href="#!">
              <span class="visually-hidden">Linkedin</span>
              <div class="popup__social-bg">
                <img src="icons/linkedin-neon.svg" width="18" height="17" alt="Linkedin" />
              </div>
            </a>
          </div>
          <div class="popup__help">или используйте электронную почту для входа</div>
          <form class="popup__form" action="login.php" method="POST">
            <div class="popup__placeholder popup__placeholder_email">
              <input class="popup__input" name="email" type="email" placeholder="Почта" required />
            </div>
            <div class="popup__placeholder popup__placeholder_password">
              <input class="popup__input" name="password" type="password" placeholder="Пароль" required />
            </div>
            <button class="popup__submit" type="submit">
              <span class="popup__submit-bg">Войти</span>
            </button>
          </form>
          <button class="popup__question register-button" type="button">Нет аккаунта?</button>
        </div>
        <img class="close-popup" src="icons/close-neon.svg" alt="" />
      </div>
    </div>

    <!-- JS -->
    <script src="js/script.js"></script>
  </body>
</html>
