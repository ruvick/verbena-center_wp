<section class="form-section">
      <div class="container">
        <div class="circle-white"></div>
        <div class="form-section__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/form-bg.png)"></div>
        <div class="form-section__form">
          <h2 class="section-title">Записаться на прием</h2>
          <form action="" >
            <input type="text" name="name" placeholder="Имя">
            <input type="tel" name="tel" placeholder="Телефон">
            <a href="#" class="button uniSendBtn" data-formid="Запись на прием с главной страницы сайта" data-mailmsg="Запись на прием с главной страницы сайта" onclick="ym(47540161, 'reachGoal', 'Zapis_na_gl2'); ga('send', 'event', 'Zayavki', 'Zapis_na_gl2_G'); return true;">Отправить</a>
            <?php get_template_part('template-parts/form-policy-element'); ?>
          </form>
        </div>
      </div>
    </section>

<!-- <section class="form-page">
	<div class="container">

			<div class="form-page__bg-circle"></div>
		<div class="form-page__bg">
		</div>
		<div class="form-page__content">
			<div class="form-page__content-title">Записаться на прием</div>
			<form action="">
				<input type="text" name="name" placeholder="Имя">
				<input type="tel" name="tel" placeholder="Телефон">
				<a href="#" class="uniSendBtn button">Отправить</a>
				<span class="note">Нажимая кнопку Отправить Вы принимаете условия Политики конфиденциальности в отношении обработки персональных данных</span>
			</form>
		</div>
	</div>
</section> -->