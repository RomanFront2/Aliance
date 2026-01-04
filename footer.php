<section class="cta">
    <div class="bg-grey section-cta">
      <img src="img/cta.png" alt="call to action" class="cta-image">
      <div class="container cta-form-wrapper">
        <form action="handler.php" method="POST" class="cta-form">
          <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
            поможем даже в самых сложных случаях!
          </p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input class="input" id="user-name" type="text" name="username" autocomplete="name" placeholder=" " maxlength="20" required>
              <label class="input-group-label" for="user-name">Имя</label>
            </div>
            <div class="input-group">
              <input 
                class="input phone-mask" 
                id="user-phone" 
                type="tel" 
                name="userphone" 
                maxlength="20" 
                required placeholder="+_ (___) ___-__-__"
                >
              <label class="input-group-label-phone" for="user-phone">Номер телефона</label>
            </div>
          </div>
          <div class="cta-form-footer">
            <button class="button cta-form-button" type="submit">Отправить заявку</button>
            <div class="notify">
              <svg width="14" height="14" class="notify-icon">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
                информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <svg class="logo-svg footer-logo">
        <use href="img/sprite.svg#logo"></use>
      </svg>
      <a href="tel:+74996861014" class="footer-phone">+7 (999) 686-10-14</a>
      <div class="footer-info footer-addres">
        <svg class="footer-info-icon" width="20" height="20">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address class="footer-info-adress">г. Москва, Холодильный пер. 4к1с8</address>
      </div>
      <div class="footer-info footer-email">
        <svg class="footer-info-icon" width="20" height="20">
          <use href="img/sprite.svg#email"></use>
        </svg>
        <a class="footer-info-email" href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
      </div>
      <div class="footer-social">
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="20" height="20">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="20" height="20">
            <use href="img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <hr class="footer-separator" />
  <div class="container">
    <div class="footer-bottom">
      <div class="footer-menu-wrapper">
        <h2 class="footer-menu-title">Контрактное производство</h2>
        <ul class="footer-menu-list footer-menu-column-2">
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link">Автомобильная химия</a>
          </li>
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link">Бытовая химия</a>
          </li>
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
          </li>
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
          </li>
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link">Косметическая продукция</a>
          </li>
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
          </li>
        </ul>
      </div>

      <div class="footer-menu-wrapper">
        <h2 class="footer-menu-title">Собственные марки</h2>
        <ul class="footer-menu-list">
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
          </li>
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link">Автохимия AP</a>
          </li>
        </ul>
      </div>

      <div class="footer-menu-wrapper">
        <ul class="footer-menu-list">
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a>
          </li>
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
          </li>
          <li class="fotter-menu-item">
            <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <hr class="footer-separator" />
  <div class="container">
    <div class="footer-wrapper">
      <div class="footer-legal">
        <p class="copyright">&copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.</p>
        <a href="#" class="footer-policy">Политики конфиденциальности</a>
      </div>
      <div class="footer-autor">
        <span class="made-in">Сделано в</span>
        <span class="made-in-mobile">Дизайн и разработка:</span>
        <svg class="made-in-svg" width="52" height="11">
          <use href="img/sprite.svg#ruso"></use>
        </svg>
      </div>
    </div>
  </div>
</footer>
<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
      <svg class="close-icon" width="24" height="24">
        <use href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">
      Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем
      даже в самых сложных случаях!
    </p>
    <form action="handler.php" method="POST" class="modal-form">
      <div class="input-group-wrapper input-group-vertical">
        <div class="input-group modal-input-group">
          <input class="input modal-input" id="modal-user-name" type="text" name="username" autocomplete="name" placeholder=" ">
          <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
        </div>
        <div class="input-group modal-input-group">
          <input 
              class="input phone-mask" 
              id="user-phone" 
              type="tel" 
              name="userphone" 
              maxlength="20"  
              required placeholder="+_ (___) ___-__-__"
              >
            <label class="input-group-label-phone" for="user-phone">Номер телефона</label>
        </div>
      </div>
      <div class="modal-form-footer">
        <button class="button modal-form-button" type="submit">Отправить заявку</button>
        <div class="notify">
          <svg width="14" height="14" class="notify-icon">
            <use href="img/sprite.svg#shield"></use>
          </svg>
          <p class="notify-text">
            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
            информации!
          </p>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal" id="alert-modal">
  <div class="modal-dialog">
    <img src="img/thanks.png" alt="thanks" class="thanks-image">
    <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
      <svg class="close-icon" width="24" height="24">
        <use href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <h2 class="modal-title modal-thanks-title">Спасибо за заявку!</h2>
    <p class="modal-text modal-thanks-text">
      Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
    </p>
    <button class="button modal-thanks-button" type="button">Вернуться на главную</button>
  </div>
</div>