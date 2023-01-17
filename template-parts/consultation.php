<section class="form-section">
      <div class="container">
        <div class="circle-white"></div>
        <div class="form-section__photo b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/form-bg-home.png"></div>
        <div class="form-section__form">
          <h2 class="section-title">Записаться на прием</h2>
          <form class="form_in_page" action="" >
            <input type="text" name="name" placeholder="Имя">
            <input type="tel" name="tel" placeholder="Телефон">
            <a href="#" class="button uniSendBtn" data-formid="Запись на прием с главной страницы сайта" data-mailmsg="Запись на прием с главной страницы сайта" onclick="ym(47540161, 'reachGoal', 'Zapis_na_gl'); ga('send', 'event', 'Zayavki', 'Zapis_na_gl_G'); return true;">Отправить</a>
            <?php get_template_part('template-parts/form-policy-element'); ?>
			
            <!-- <span class="note">Нажимая на кнопку «Отправить» Вы принимаете условия политики конфиденциальности в отношении обработки персональных данных</span> -->
          </form>
        </div>
      </div>
    </section>