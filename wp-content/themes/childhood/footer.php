<div class="question">
  <div class="question__text">
    Есть вопросы? Напишите нам!
  </div>
  <div id="reply" class="minibutton">Написать</div>
  <div class="question__close">&times</div>
</div>

<div class="reply">
  <div class="reply__body">
    <div class="reply__title">
      Оставьте ваш вопрос здесь
    </div>
    <?php echo do_shortcode('[contact-form-7 id="160" title="Форма вопроса"]'); ?>
  </div>
</div>
<footer>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3">
        <div class="footer__logo">
          <?php the_custom_logo(); ?>
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
      </div>
      <div class="col-md-8 offset-md-0 col-lg-6 col-xl-5 offset-xl-1">
        <div class="footer__contacts">
          <div class="footer__contacts-item">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/phone.svg" alt="телефон" class="footer__contacts-logo">
            <div class="footer__contacts-tel">
              <a href="tel:<?php the_field('our_phone_main', 2); ?>"><?php the_field('our_phone_main', 2); ?></a>
              <a href="tel:<?php the_field('our_phone_other', 2); ?>"><?php the_field('our_phone_other', 2); ?></a>
            </div>
          </div>
          <div class="footer__contacts-item">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="footer__contacts-logo">
            <address><?php the_field('our_adress', 2); ?></address>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="#" class="footer__policy">Политика конфиденциальности</a>
      </div>
    </div>
  </div>
</footer>
<?php
wp_footer();
?>
</body>

</html>