<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package verbena
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="cmsmagazine" content="f7245597f5b3579a3db3d69ddef2a8bf" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon/verbena-fav.png" type="image/png">
<!--  <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline'; connect-src * 'self' 'unsafe-inline'; img-src * 'self' 'unsafe-inline'; ">-->
<link rel='stylesheet' id='fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500&#038;display=swap&#038;subset=cyrillic&#038;ver=5.7.3' type='text/css' media="print" onload="this.media='all'" />
  <?php wp_head(); ?>
  
<!-- Global site tag (gtag.js) - Google Analytics clkverbena@gmail.com -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144095936-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144095936-1');
</script>

	
	
	<!-- Marquiz script start -->
	<scrip async src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
	<script>
	document.addEventListener("DOMContentLoaded", function() {
	  Marquiz.init({ 
		id: '5d42d4735b404e00446191f7', 
		autoOpen: false, 
		autoOpenFreq: 'once', 
		openOnExit: false 
	  });
	});
	</script>
	


	<meta name="yandex-verification" content="c432f0e101280af9" />	
	
	<!-- <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?162",t.onload=function(){VK.Retargeting.Init("VK-RTRG-403677-9zCmN"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-403677-9zCmN" style="position:fixed; left:-999px;" alt=""/></noscript> -->
	
	
	
	
	
</head>

<body <?php body_class(); ?>>
  
  <div class = "zakrBtn">
	<a target = "_blank" href = "https://wa.me/+79207195503">
		<div class = "zbtn wsBtn"></div>
	</a>
	
	<a class = "popup-zvonok" data-formid = "Форма в нижнем углу экрана" data-mailmsg = "Заказ обратного звонка" href = "#">
		<div class = "zbtn phoneBtn "></div>
	</a>
  </div>
  
  <div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close-button.svg"></div>
        <div class = "modalline" id = "lineIcon">
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="order-modal">
        <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close-button.svg"></div>
        <div class = "modalline" id = "lineIcon">
          <div class="box-modal-bg"></div>
          <form action="" >
            <input type="text" name="name" placeholder="Имя">
            <input type="tel" name="tel" placeholder="Телефон">
			<span class="note noteInWin">Нажимая на кнопку «Отправить» Вы принимаете условия политики конфиденциальности в отношении обработки персональных данных</span>
            <a href="#" class="uniSendBtn button-green" onclick="ym(47540161, 'reachGoal', 'Zayavka'); ga('send', 'event', 'Zayavki', 'Zayavka_G'); return true;">Отправить</a>
          </form>
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal" id="zvonok-modal">
        <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close-button.svg"></div>
        <div class = "modalline" id = "lineIcon">
          <div class="box-modal-bg"></div>
          <form action="">
            <input type="text" name="name" placeholder="Имя">
            <input type="tel" name="tel" placeholder="Телефон">
			<span class="note noteInWin">Нажимая на кнопку «Отправить» Вы принимаете условия политики конфиденциальности в отношении обработки персональных данных</span>
            <a href="#" class="uniSendBtn button-green" onclick="ym(47540161, 'reachGoal', 'Zakaz_zvonka'); ga('send', 'event', 'Zayavki', 'Zakaz_zvonka_G'); return true;">Заказать звонок</a>
          </form>
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
<div style="display: none;">
  <div class="box-modal" id="test-modal">
      <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close-button.svg"></div>
      <div class="modalline" id="lineIcon">
        <form action="">
          <div class="test-modal__photo"></div>
          <div class="test-modal__test">
            <div class="test-modal__test-title">УЗНАЙ СВОЙ ИНДЕКС МАССЫ ТЕЛА (ИМТ)</div>
            <div class="test-modal__test-descr">
              <strong>ИМТ – индекс массы тела</strong> – отражает состояние здоровья человека. Показатель этот зависит от жировых ресурсов организма и может соответствовать норме, быть избыточным либо дефицитным. У многих людей индекс массы тела далек от оптимального. Недаром ИМТ появился в медицинских картах как ключевой фактор риска заболеваемости и стал учитываться при диагностике.
            </div>
            <div class="radio-wrapper__title">Укажите свой пол:</div>
            <div class="radio-wrapper">

              <div class="radio-wrapper__item">
                <input type="radio" id="male" name="sex" value="Мужской">
                <label for="male">Мужской</label>
              </div>
              <div class="radio-wrapper__item">
                <input type="radio" id="female" name="sex" checked="" value="Женский">
                <label for="female">Женский</label>
              </div>
            </div>
            <span class="error-test error-test-input-width">Введите рост</span>
            <input type="number" class="test-input" name="width" placeholder="Введите рост (см)">
            <span class="error-test error-test-input-weight">Введите вес</span>
            <input type="number" class="test-input" name="weight" placeholder="Введите вес (кг)">
            <span class="error-test error-test-input-age">Введите возраст</span>
            <input type="number" class="test-input" name="age" placeholder="Введите возраст (полных лет)">
            <a href="#" class="button-green test-form__submit" onclick="ym(47540161, 'reachGoal', 'Index'); ga('send', 'event', 'Zayavki', 'Index_G'); return true;">Рассчитать</a>
          </div>
        </form>
        <div class="test-modal__result">
          <div class="test-modal__result-number">
            Ваш ИМТ:
          </div>
          <div class="test-modal__result-descr"></div>
        </div>
        <div class="btn-wrap">
          <a href="#" class="button popup-content" data-formid="Заявка Запись на консультацию c теста ИМТ" data-mailmsg="Заявка Запись на консультацию c теста ИМТ">Записаться на консультацию к нутрицитологу</a>
          <a href="<?php echo get_permalink(147);?>" class="button-green" data-formid="Задать вопрос нутрицитологу" data-mailmsg="Задать вопрос нутрицитологу">Подробнее о нутрициологии</a>
        </div>
  </div>
  
  <div class="modalline" id="lineMsg">
  </div>
  </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="review-modal">
        <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close-button.svg"></div>
        <div class = "modalline" id = "lineIcon">
          <div class="box-modal-bg"></div>
          <form action="">
            <h2>Оставить отзыв</h2>
            <input type="text" name="name" placeholder="Имя">
            <input type="tel" name="tel" placeholder="Телефон">
            <textarea name="review" id="" placeholder = "Отзыв"></textarea>
			
			<span class="note noteInWin">Нажимая на кнопку «Отправить» Вы принимаете условия политики конфиденциальности в отношении обработки персональных данных</span>
			
            <a href="#" class="uniSendBtn-review button-green" onclick="ym(47540161, 'reachGoal', 'Otziv'); ga('send', 'event', 'Zayavki', 'Otziv_G'); return true;">Отправить</a>
          </form>
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
<div class="" style="display: none;" id="search-modal">
  <div class="close-modal"></div>
  <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Что будем искать?" />
    <input type="submit" id="searchsubmit" value="" />
  </form>
</div>
  <div id="page" class="site">
    <header class="header">
      <div class="container">
        <a href="<?php echo home_url('/');?>" class="logo " style="background-image: url(<?php echo get_template_directory_uri();?>/img/logo.svg)"></a>
        <div class="hamburger">
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </div>
        <?php main_menu();?>
	      <div class="header-search">
	        <span>Поиск</span>
	        <img src="<?php echo get_template_directory_uri();?>/img/search.svg" alt="">
	      </div>
	    <div class = "header-contacts-trub">
			<a href="tel:<?php echo carbon_get_theme_option('as_phone'); ?>" class = "header-phone-new"><?php echo carbon_get_theme_option('as_phone'); ?></a>
		</div>
	
		
		<div class="header-contacts">
          <a href="tel:<?php echo str_replace(' ', '', carbon_get_theme_option('as_phone')); ?>" class="header-phone-icon"><img src = "<?php bloginfo("template_url")?>/img/phone-call.svg" /></a>
		  <a href="tel:<?php echo str_replace(' ', '', carbon_get_theme_option('as_phone')); ?>" class = "header-phone"><?php echo carbon_get_theme_option('as_phone'); ?></a>
          <a href="#" class="button popup-content header-phone-button animbtnNew" data-formid="Заявка с шапки сайта" data-mailmsg="Заявка с шапки сайта">Записаться онлайн</a>
        </div>
      </div>
    </header>

    <div id="content" class="site-content">
