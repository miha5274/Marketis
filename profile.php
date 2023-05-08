<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Air Jordan 1 Mid Purple</title>
    <link rel="shortcut icon" href="./img/lightning.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
  <?php
  session_start();

  if (!isset($_SESSION['username'])) { 
    header("Location: error.html");
    exit;
  }
  ?>
    <!-- Header -->
    <header class="header header_mod">
      <div class="container">
        <div class="header__wrapper header__wrapper_mod">
          <div class="header__left">
            <div class="header__logo header__logo_mod">
              <span class="header__marketis">Marketis</span>
            </div>
            <!-- Navigation -->
            <nav class="header__nav">
              <ul class="header__menu">
                <li class="header__item">
                  <a class="header__link header__link_main" href="index.php">Главная страница</a>
                </li>
                <li class="header__item">
                  <a class="header__link" href="catalog.php">Каталог</a>
                </li>
              </ul>
              <div class="header__right">
                <div class="header__search">
                  <input class="header__input" type="search" placeholder="Поиск..." />
                </div>
                <a class="header__link header__link_basket" href="basket.php">Корзина</a>
                <a class="header__profile open-popup" href="#!">
                  <span class="header__link header__link_active header__link_profile">Профиль</span>
                  <div class="header__avatar">
                    <img class="header__img" src="img/profile.png" alt="" />
                  </div>
                </a>
                <button class="header__close-right">
                  <span class="visually-hidden">Закрыть меню</span>
                  <img src="icons/close-neon.svg" width="27" height="27" alt="" />
                </button>
              </div>
              <button class="header__close-burger">
                <span class="visually-hidden">Закрыть меню</span>
                <img src="icons/close-neon.svg" width="27" height="27" alt="" />
              </button>
              <button class="header__right-menu" type="button">
                <span class="visually-hidden">Меню</span>
                <span class="header__line"></span>
                <span class="header__line"></span>
                <span class="header__line"></span>
              </button>
            </nav>
            <!-- Burger -->
            <button class="header__burger-menu" type="button">
              <span class="visually-hidden">Меню</span>
              <span class="header__line"></span>
              <span class="header__line"></span>
              <span class="header__line"></span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- Main -->
    <main class="main main_profile">
      <div class="profile-ellipse"></div>
      <!-- Profile -->
      <div class="profile">
        <div class="container">
          <div class="profile__wrapper">
            <div class="profile__left">
              <div class="profile__left-top profile__top">ОБЗОР ПРОФИЛЯ</div>
              <div class="profile__left-wrapper">
                <div class="profile__menu">
                  <button class="profile__item profile__item_active" type="button">Личные данные</button>
                  <button class="profile__item" type="button">Сохраненные адреса</button>
                  <button class="profile__item" type="button">Выйти</button>
                </div>
                <div class="profile__info">
                  <div class="profile__base">
                    <div class="profile__base-name profile__title">ОБЗОР ПРОФИЛЯ</div>
                    <div class="profile__please profile__text">Пожалуйста, проверь указанные данные</div>
                  </div>
                  <div class="profile__data">
                    <div class="profile__data-name profile__title">ДАННЫЕ</div>
                    <div class="profile__name profile__text">Artur Dippins</div>
                    <div class="profile__birth profile__text">2003-02-18</div>
                    <div class="profile__gender profile__text">Пол</div>
                    <div class="profile__tel profile__text">Мобильный телефон</div>
                    <button class="profile__data-change profile__change" type="button">РЕДАКТИРОВАТЬ</button>
                  </div>
                  <div class="profile__login">
                    <div class="profile__login-name profile__title">ДАННЫЕ ДЛЯ ВХОДА</div>
                    <div class="profile__email">
                      <div class="profile__email-name profile__text">Email</div>
                      <div class="profile__email-text profile__text">arturdippins231@gmail.com</div>
                      <button class="profile__email-change profile__change" type="button">РЕДАКТИРОВАТЬ</button>
                    </div>
                    <div class="profile__password">
                      <div class="profile__password-name profile__text">Password</div>
                      <div class="profile__password-text profile__text">*******************</div>
                      <button class="profile__password-change profile__change" type="button">РЕДАКТИРОВАТЬ</button>
                    </div>
                  </div>
                  <div class="profile__exit">
                    <div class="profile__exit-name profile__title">ВЫЙТИ ИЗ АККАУНТА</div>
                    <div class="profile__exit-desc profile__descr">
                      Ты выйдешь из аккаунта во всех веб-браузерах, через которые был выполнен вход на сайт marketis.
                    </div>
                    <form action="logout.php" method="post">
                      <button class="profile__exit-button profile__button" type="submit">
                        <span>ВЫЙТИ ИЗ АККАУНТА</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15.4679 5.45962C15.7218 5.20578 15.7218 4.79422 15.4679 4.54038L11.3313 0.403806C11.0775 0.149965 10.6659 0.149965 10.4121 0.403806C10.1583 0.657647 10.1583 1.0692 10.4121 1.32304L14.0891 5L10.4121 8.67696C10.1583 8.9308 10.1583 9.34235 10.4121 9.59619C10.6659 9.85003 11.0775 9.85003 11.3313 9.59619L15.4679 5.45962ZM15.0083 4.35H-3.05176e-05V5.65H15.0083V4.35Z" fill="white" />
                        </svg>
                      </button>
                    </form>
                  </div>
                  <div class="profile__exit">
                    <div class="profile__exit-name profile__title">УДАЛЕНИЕ ПРОФИЛЯ</div>
                    <div class="profile__exit-desc profile__descr">
                      После удаления аккаунта ты больше не будешь участником marketis. Восстановить данные аккаунта невозможно
                    </div>
                    <script>
                      function deleteAccount(userName) {
                        $.ajax({
                          url: "deleteAccount.php",
                          method: "POST",
                          data: { userName: userName },
                          success: function (data) {
                            alert(data);
                          },
                          error: function (error) {
                            console.log(error);
                          }
                        });
                      }
                    </script>
                    <button class="profile__exit-button profile__button" onclick="deleteAccount('<?=$_SESSION['username']?>')" type="button">
                      <span>УДАЛИТЬ АККАУНТ</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M15.4679 5.45962C15.7218 5.20578 15.7218 4.79422 15.4679 4.54038L11.3313 0.403806C11.0775 0.149965 10.6659 0.149965 10.4121 0.403806C10.1583 0.657647 10.1583 1.0692 10.4121 1.32304L14.0891 5L10.4121 8.67696C10.1583 8.9308 10.1583 9.34235 10.4121 9.59619C10.6659 9.85003 11.0775 9.85003 11.3313 9.59619L15.4679 5.45962ZM15.0083 4.35H-3.05176e-05V5.65H15.0083V4.35Z"
                          fill="white" />
                      </svg>
                    </button>
                  </div>
                  <div class="profile__exit">
                  <script>
                    function redirectToAdmin() {
                      window.location.href = "admin_panel/index.php"; // Replace with the desired URL
                    }
                  </script>
                    <?php
                      if($_SESSION['username']=='admin') : ?>
                      <div class="profile__exit-name profile__title">Админ-панель</div>
                      <button class="profile__exit-button profile__button" onclick="redirectToAdmin()" type="button">
                      <span>ПЕРЕЙТИ</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M15.4679 5.45962C15.7218 5.20578 15.7218 4.79422 15.4679 4.54038L11.3313 0.403806C11.0775 0.149965 10.6659 0.149965 10.4121 0.403806C10.1583 0.657647 10.1583 1.0692 10.4121 1.32304L14.0891 5L10.4121 8.67696C10.1583 8.9308 10.1583 9.34235 10.4121 9.59619C10.6659 9.85003 11.0775 9.85003 11.3313 9.59619L15.4679 5.45962ZM15.0083 4.35H-3.05176e-05V5.65H15.0083V4.35Z"
                          fill="white" />
                      </svg>
                      </button>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="profile__right">
              <div class="profile__hello profile__top">ПРИВЕТ<span class="profile__hello-name">, ARTUR</span></div>
              <div class="profile__box">
                <div class="profile__avatar-inner">
                  <img class="profile__avatar" src="img/avatar.png" width="205" height="205" alt="Avatar" />
                </div>
                <div class="profile__user-name">Artur Dippins</div>
                <div class="profile__privilege">Нет привилегий</div>
                <div class="profile__description">Вы можете добавить <span class="profile__yellow">описание</span> вашего профиля.</div>
                <div class="profile__user-email">arturdippins231@gmail.com</div>
                <div class="profile__socials">
                  <a class="profile__social" href="#!">
                    <span class="visually-hidden">Twitter</span>
                    <svg width="36" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M31.877 7.76562C31.9225 7.94792 31.9453 8.24414 31.9453 8.6543C31.9453 11.0697 31.4896 13.485 30.5781 15.9004C29.6667 18.2702 28.3678 20.4577 26.6816 22.4629C25.041 24.4225 22.8991 26.0176 20.2559 27.248C17.6126 28.4785 14.696 29.0938 11.5059 29.0938C7.49544 29.0938 3.82682 28.0228 0.5 25.8809C1.0013 25.9264 1.57096 25.9492 2.20898 25.9492C5.53581 25.9492 8.52083 24.9238 11.1641 22.873C9.56901 22.873 8.15625 22.4173 6.92578 21.5059C5.74089 20.5488 4.92057 19.3639 4.46484 17.9512C4.92057 17.9967 5.35352 18.0195 5.76367 18.0195C6.40169 18.0195 7.03971 17.9512 7.67773 17.8145C6.58398 17.5866 5.60417 17.1309 4.73828 16.4473C3.8724 15.7637 3.1888 14.9434 2.6875 13.9863C2.1862 12.9837 1.93555 11.9128 1.93555 10.7734V10.6367C2.93815 11.2292 4.00911 11.5482 5.14844 11.5938C3.00651 10.1354 1.93555 8.13021 1.93555 5.57812C1.93555 4.30208 2.27734 3.0944 2.96094 1.95508C4.73828 4.18815 6.90299 5.96549 9.45508 7.28711C12.0527 8.60872 14.8099 9.33789 17.7266 9.47461C17.6354 8.92773 17.5898 8.38086 17.5898 7.83398C17.5898 5.87435 18.2734 4.18815 19.6406 2.77539C21.0534 1.36263 22.7396 0.65625 24.6992 0.65625C26.7956 0.65625 28.5501 1.4082 29.9629 2.91211C31.6035 2.5931 33.1302 2.02344 34.543 1.20312C33.9961 2.88932 32.9479 4.21094 31.3984 5.16797C32.7656 4.98568 34.1328 4.59831 35.5 4.00586C34.4974 5.46419 33.2897 6.71745 31.877 7.76562Z"
                        fill="#A79AE0" />
                    </svg>
                  </a>
                  <a class="profile__social" href="#!">
                    <span class="visually-hidden">Instagram</span>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.4629 10.3379C12.0124 8.78841 13.8809 8.01367 16.0684 8.01367C18.2559 8.01367 20.1016 8.78841 21.6055 10.3379C23.1549 11.8418 23.9297 13.6875 23.9297 15.875C23.9297 18.0625 23.1549 19.931 21.6055 21.4805C20.1016 22.9844 18.2559 23.7363 16.0684 23.7363C13.8809 23.7363 12.0124 22.9844 10.4629 21.4805C8.95898 19.931 8.20703 18.0625 8.20703 15.875C8.20703 13.6875 8.95898 11.8418 10.4629 10.3379ZM12.4453 19.498C13.4479 20.5007 14.6556 21.002 16.0684 21.002C17.4811 21.002 18.6888 20.5007 19.6914 19.498C20.694 18.4954 21.1953 17.2878 21.1953 15.875C21.1953 14.4622 20.694 13.2546 19.6914 12.252C18.6888 11.2493 17.4811 10.748 16.0684 10.748C14.6556 10.748 13.4479 11.2493 12.4453 12.252C11.4427 13.2546 10.9414 14.4622 10.9414 15.875C10.9414 17.2878 11.4427 18.4954 12.4453 19.498ZM25.502 6.44141C25.8665 6.76042 26.0488 7.17057 26.0488 7.67188C26.0488 8.17318 25.8665 8.60612 25.502 8.9707C25.1829 9.33529 24.7728 9.51758 24.2715 9.51758C23.7702 9.51758 23.3372 9.33529 22.9727 8.9707C22.6081 8.60612 22.4258 8.17318 22.4258 7.67188C22.4258 7.17057 22.6081 6.76042 22.9727 6.44141C23.3372 6.07682 23.7702 5.89453 24.2715 5.89453C24.7728 5.89453 25.1829 6.07682 25.502 6.44141ZM31.3125 9.58594C31.3581 10.8164 31.3809 12.9128 31.3809 15.875C31.3809 18.8372 31.3581 20.9336 31.3125 22.1641C31.1758 24.944 30.3327 27.1087 28.7832 28.6582C27.2793 30.1621 25.1374 30.9596 22.3574 31.0508C21.127 31.1419 19.0306 31.1875 16.0684 31.1875C13.1061 31.1875 11.0098 31.1419 9.7793 31.0508C6.99935 30.9141 4.85742 30.0938 3.35352 28.5898C2.76107 28.043 2.28255 27.4049 1.91797 26.6758C1.55339 25.9466 1.27995 25.2402 1.09766 24.5566C0.960938 23.873 0.892578 23.0755 0.892578 22.1641C0.801432 20.9336 0.755859 18.8372 0.755859 15.875C0.755859 12.9128 0.801432 10.7936 0.892578 9.51758C1.0293 6.7832 1.84961 4.66406 3.35352 3.16016C4.85742 1.61068 6.99935 0.767578 9.7793 0.630859C11.0098 0.585286 13.1061 0.5625 16.0684 0.5625C19.0306 0.5625 21.127 0.585286 22.3574 0.630859C25.1374 0.767578 27.2793 1.61068 28.7832 3.16016C30.3327 4.66406 31.1758 6.80599 31.3125 9.58594ZM28.0312 24.8984C28.168 24.5339 28.2819 24.0781 28.373 23.5312C28.4642 22.9388 28.5326 22.2552 28.5781 21.4805C28.6237 20.6602 28.6465 19.9993 28.6465 19.498C28.6465 18.9967 28.6465 18.2904 28.6465 17.3789C28.6465 16.4674 28.6465 15.9661 28.6465 15.875C28.6465 15.7383 28.6465 15.237 28.6465 14.3711C28.6465 13.4596 28.6465 12.7533 28.6465 12.252C28.6465 11.7507 28.6237 11.1126 28.5781 10.3379C28.5326 9.51758 28.4642 8.83398 28.373 8.28711C28.2819 7.69466 28.168 7.21615 28.0312 6.85156C27.4844 5.4388 26.5046 4.45898 25.0918 3.91211C24.7272 3.77539 24.2487 3.66146 23.6562 3.57031C23.1094 3.47917 22.4258 3.41081 21.6055 3.36523C20.8307 3.31966 20.1927 3.29688 19.6914 3.29688C19.2357 3.29688 18.5293 3.29688 17.5723 3.29688C16.6608 3.29688 16.1595 3.29688 16.0684 3.29688C15.9772 3.29688 15.4759 3.29688 14.5645 3.29688C13.653 3.29688 12.9466 3.29688 12.4453 3.29688C11.944 3.29688 11.2832 3.31966 10.4629 3.36523C9.68815 3.41081 9.00456 3.47917 8.41211 3.57031C7.86523 3.66146 7.40951 3.77539 7.04492 3.91211C5.63216 4.45898 4.65234 5.4388 4.10547 6.85156C3.96875 7.21615 3.85482 7.69466 3.76367 8.28711C3.67253 8.83398 3.60417 9.51758 3.55859 10.3379C3.51302 11.1126 3.49023 11.7507 3.49023 12.252C3.49023 12.7077 3.49023 13.4141 3.49023 14.3711C3.49023 15.2826 3.49023 15.7839 3.49023 15.875C3.49023 16.0573 3.49023 16.4902 3.49023 17.1738C3.49023 17.8118 3.49023 18.3587 3.49023 18.8145C3.49023 19.2246 3.49023 19.7715 3.49023 20.4551C3.53581 21.1387 3.58138 21.7311 3.62695 22.2324C3.67253 22.6882 3.74089 23.1667 3.83203 23.668C3.92318 24.1693 4.01432 24.5794 4.10547 24.8984C4.69792 26.3112 5.67773 27.291 7.04492 27.8379C7.40951 27.9746 7.86523 28.0885 8.41211 28.1797C9.00456 28.2708 9.68815 28.3392 10.4629 28.3848C11.2832 28.4303 11.9212 28.4531 12.377 28.4531C12.8783 28.4531 13.5846 28.4531 14.4961 28.4531C15.4531 28.4531 15.9772 28.4531 16.0684 28.4531C16.2051 28.4531 16.7064 28.4531 17.5723 28.4531C18.4837 28.4531 19.1901 28.4531 19.6914 28.4531C20.1927 28.4531 20.8307 28.4303 21.6055 28.3848C22.4258 28.3392 23.1094 28.2708 23.6562 28.1797C24.2487 28.0885 24.7272 27.9746 25.0918 27.8379C26.5046 27.2454 27.4844 26.2656 28.0312 24.8984Z"
                        fill="#A79AE0" />
                    </svg>
                  </a>
                  <a class="profile__social" href="#!">
                    <span class="visually-hidden">Добавить</span>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="16" cy="16" r="16" fill="#A79AE0" />
                      <rect x="15" y="12" width="2" height="8" rx="1" fill="black" fill-opacity="0.9" />
                      <rect x="12" y="17" width="2" height="8" rx="1" transform="rotate(-90 12 17)" fill="black" fill-opacity="0.9" />
                    </svg>
                  </a>
                </div>
                <div class="profile__pink"></div>
                <div class="profile__blue"></div>
                <img class="profile__bottom" src="icons/yellow-bottom.svg" width="541" height="79" alt="Yellow rectangle" />
                <img class="profile__lightning" width="61" height="61" src="img/lightning.png" alt="Lightning" />
              </div>
            </div>
          </div>
        </div>
      </div>
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
              <form class="footer__form">
                <div class="footer__email">
                  <input class="footer__input" name="email" type="email" placeholder="Your Email" />
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

    <!-- JS -->
    <script src="js/script.js"></script>
  </body>
</html>
