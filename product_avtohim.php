<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/swiper-bundle.min.js" defer></script>
  <script src="js/just-validate.production.min.js" defer></script>
  <script src="js/imask.js" defer></script>
  <script src="js/main.js" defer></script>
  <title>Автомобильная химия - Aliance Production</title>
</head>

<body>
  <?php include_once('mobile_menu.php');?>

  <nav class="navbar navbar-light">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo_light"></use>
      </svg>
      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="contract_product.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-icon">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a class="header-phone-link" href="tel:+74996861014">+7 (499) 686-10-14</a>
    </div>
    <button class="navbar-button button" data-toggle="modal">
      <svg class="button-icon">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>
  <header class="header header-second">
    <div class="bg-grey">
      <div class="container">
        <div class="header-second-container-wrapper">
          <div class="header-second-wrapper">
            <div class="separator"></div>
            <h2 class="section-title header-second-title">Автомобильная химия</h2>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="./" class="breadcrumb-link">Главная</a>
              </li>
              <li class="breadcrumb-item">
                <a href="contract_product.php" class="breadcrumb-link">Контрактное производство</a>
              </li>
              <li class="breadcrumb-item">
                <a href="product_avtohim.php" class="breadcrumb-link">Автомобильная химия</a>
              </li>
            </ul>
          </div>
          <img src="img/header_avto-him.png" alt="avto him" class="header-second-image">
        </div>
      </div>
    </div>
  </header>

  <?php include_once('footer.php');?>
</body>

</html>