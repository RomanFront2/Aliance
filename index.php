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
  <script src="js/main.js" defer></script>
  <title>Aliance Production</title>
</head>

<body class="front-page">
  <?php include_once('mobile_menu.php');?>

  <nav class="navbar">
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
    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>
  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="separator"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является
          четким доказательством простого факта: высококачественный прототип
          будущего проекта напрямую зависит от анализа существующих паттернов
          поведения.
        </p>
        <div class="button header-button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</div>
      </div>

      <div class="swiper swiper-features">
        <ul class="swiper-wrapper header-features">
          <li class="swiper-slide header-features-item">
            <svg class="header-features-svg">
              <use href="img/sprite.svg#time"></use>
            </svg>
            <p class="header-feature-text">Непрерывная работа c 2017 года</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="header-features-svg">
              <use href="img/sprite.svg#certificates"></use>
            </svg>
            <p class="header-feature-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="header-features-svg">
              <use href="img/sprite.svg#control"></use>
            </svg>
            <p class="header-feature-text">Контроль качества на всех этапах</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="header-features-svg">
              <use href="img/sprite.svg#delivery"></use>
            </svg>
            <p class="header-feature-text">Возможны поставки по всей России</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="header-features-svg">
              <use href="img/sprite.svg#speed"></use>
            </svg>
            <p class="header-feature-text">Оперативное производство</p>
          </li>
        </ul>
        <div class="slider-buttons">
          <div class="slider-button-prev">
            <svg class="arrow-slider-svg">
              <use href="img/sprite.svg#arrow_prev"></use>
            </svg>
          </div>
          <div class="slider-button-next">
            <svg class="arrow-slider-svg">
              <use href="img/sprite.svg#arrow_next"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="section section-light-scheme">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title">схема работы</h2>
      <div class="swiper swiper-steps">
        <ol class="swiper-wrapper steps">
          <li class="swiper-slide steps-item">
            <span class="steps-num">01</span>
            <h3 class="steps-title">Знакомство</h3>
            <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
            <a href="#" class="button-link">Оставить заявку</a>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">02</span>
            <h3 class="steps-title">Заключение<br>договора</h3>
            <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">03</span>
            <h3 class="steps-title">Производство</h3>
            <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые<br>элементы.</p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">04</span>
            <h3 class="steps-title">Доставка</h3>
            <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о возможностях
              приоритизации<br>разума над эмоциями.</p>
          </li>
        </ol>
        <div class="swiper-steps-buttons primary-buttons-wrapper">
          <div class="swiper-steps-button-prev primary-button-prev">
            <svg class="arrow-slider-svg">
              <use href="img/sprite.svg#arrow_prev"></use>
            </svg>
          </div>
          <div class="swiper-steps-button-next  primary-button-next">
            <svg class="arrow-slider-svg">
              <use href="img/sprite.svg#arrow_next"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section production">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title production-title">Контрактное производство</h2>
      <div class="cards">
        <a href="product_avtohim.php" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <img src="img/avto-him.png" alt="Автомобильная химия" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.</p>
          </div>
          <img src="img/bit-him.png" alt="Бытовая химия" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <img src="img/dezinfect.png" alt="Дезинфицирующие средства" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <img src="img/dezinfect.png" alt="Пищевые аэрозоли" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <img src="img/avto-him.png" alt="Косметическая продукция" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.</p>
          </div>
          <img src="img/bit-him.png" alt="Краски аэрозольные" class="card-image">
        </a>
      </div>
    </div>
  </section>
  <section class="section trademark">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title trademark-title">собственные торговые марки</h2>
      <h2 class="section-title trademark-title-mobile">собственные марки</h2>
      <div class="trademark-cards">
        <div class="trademark-card">
          <svg class="trademark-card-logo">
            <use href="img/sprite.svg#AGTECH"></use>
          </svg>
          <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
          <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное
            мышление создаёт предпосылки для поставленных
            обществом задач.</p>
        </div>
        <div class="trademark-card">
          <svg class="trademark-card-logo">
            <use href="img/sprite.svg#AP"></use>
          </svg>
          <h3 class="trademark-card-title">Автохимия AP</h3>
          <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное
            мышление создаёт предпосылки для поставленных
            обществом задач.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section founder">
    <img src="img/founder.png" alt="founder" class="founder-photo">
    <div class="container">
      <div class="founder-content-wrapper">
        <div class="founder-content">
          <div class="separator"></div>
          <h2 class="section-title founder-title">Отношение к делу<br>и к клиентам</h2>
          <p class="founder-text">
            Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
            показывает, что укрепление и
            развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно,
            независимые
            государства, которые представляют собой яркий пример континентально-европейского типа политической культуры,
            будут
            подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки,
            синтетическое
            тестирование выявляет срочную потребность системы массового участия.</p>
          <p class="founder-text">
            А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
            степени
            предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной
            степени
            обусловливает важность дальнейших направлений развития.</p>
          <a href="#" class="button-link founder-link">Подробнее о компании</a>
          <a href="#" class="button-link founder-link-mobile">О нашей миссии</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section clients">
    <div class="container">
      <div class="separator"></div>
      <div class="clients-wrapper">
        <div class="clients-content">
          <h2 class="section-title clients-title">Производим аэрозольную продукцию для разных сфер</h2>
          <ul class="clients-list">
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#him"></use>
              </svg>
              Химические производства
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Автомойки
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#eat"></use>
              </svg>
              Пищевая продукция
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#brush"></use>
              </svg>
              Лаки и краски
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>
              Косметические средства
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#car-cosm"></use>
              </svg>
              Автомобильная косметика
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#shirt"></use>
              </svg>
              Косметика по уходу за одеждой
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#boots"></use>
              </svg>
              Косметика по уходу за обувью
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#bricks"></use>
              </svg>
              Строительные материалы
            </li>
            <li class="clients-list-item">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#more"></use>
              </svg>
              И многих других
            </li>
          </ul>
        </div>
        <div class="clients-logo-list">
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="img/client.png" alt="clients-logo" class="clients-logo">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="section blog">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title blog-title">Блог экспертов в области производства</h2>
      <div class="swiper swiper-blog">
        <div class="swiper-wrapper blog-swiper-wrapper">
          <a href="blog_more.php" class="swiper-slide blog-card">
            <img src="img/blog/blog_photo_1.png" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени
              предоставлены...</p>
          </a>
          <a href="blog_more.php" class="swiper-slide blog-card">
            <img src="img/blog/blog_photo_2.png" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно,
              высокотехнологичная...</p>
          </a>
          <a href="blog_more.php" class="swiper-slide blog-card">
            <img src="img/blog/blog_photo_1.png" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени
              предоставлены...</p>
          </a>
          <a href="blog_more.php" class="swiper-slide blog-card">
            <img src="img/blog/blog_photo_2.png" alt="" class="blog-card-image">
            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно,
              высокотехнологичная...</p>
          </a>
        </div>

        <div class="blog-slider-footer">
          <a href="#" class="button-link blog-link">Весь блог</a>
          <div class="blog-buttons primary-buttons-wrapper">
            <div class="blog-button-prev primary-button-prev">
              <svg class="arrow-slider-svg">
                <use href="img/sprite.svg#arrow_prev"></use>
              </svg>
            </div>
            <div class="blog-button-next  primary-button-next">
              <svg class="arrow-slider-svg">
                <use href="img/sprite.svg#arrow_next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php include_once('footer.php');?>

</body>

</html>