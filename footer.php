<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package verbena
 */

?>

</div><!-- #content -->

<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-name">© ООО Центр Лечебной Косметологии "Вербена"</div>
      <div class="footer-licence">Медицинская лицензия №ЛО-46-01-002067 <br/>от 03 декабря 2018 года  выдана Комитетом <br/>здравоохранения Курской области, 305000.</div>
      <div class="footer-string">г. Курск, Красная пл., 6, +7(471) 251-47-20</div>
    </div>
    <!-- <div class="footer-soc">
      <ul class="ul-clean">
        <li><a href="#" style="background-image: url(<?php echo get_template_directory_uri();?>/img/instagram.svg)"></a></li>
        <li><a href="#" style="background-image: url(<?php echo get_template_directory_uri();?>/img/vk.svg)"></a></li>
      </ul>
    </div> -->
    <div class="footer-contacts">
      <a href="tel:<?php echo str_replace(' ', '', carbon_get_theme_option('as_phone')); ?>"><?php echo carbon_get_theme_option('as_phone'); ?></a>
      <a href="tel:<?php echo carbon_get_theme_option('as_phone_2'); ?>"><?php echo carbon_get_theme_option('as_phone_2'); ?></a>
      <div class=""><?php echo carbon_get_theme_option('as_address'); ?></div>
	  
      <div class = "hovtoe">
		  <a target="_blank" href = "https://yandex.ru/maps/8/kursk/?ll=36.149375%2C51.740981&mode=search&oid=112042236281&ol=biz&z=18">Как добраться</a>
	    </div>

      <iframe src="https://yandex.ru/sprav/widget/rating-badge/112042236281" width="150" height="50" frameborder="0"></iframe>

    </div>
  </div>
  <div class="container footer-bottom">
    Информация, предоставленная на данном сайте не является публичной офертой или коммерческим предложением. Вся информация размещена с ознакомительной целью и не должна использоваться для самостоятельной диагностики либо лечения. Имеются противопоказания, необходима консультация специалиста.
  </div>

  
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(47540161, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47540161" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!--Виджеты-->
 <!--<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=6602254346485760"></script>-->

 <script src="//code.jivosite.com/widget.js" data-jv-id="8qT1qeMfkP" async></script>
<script type="text/javascript"> 
jQuery(document).ready(function ($) {
    
// Отслеживаем нажатие на кнопку с определённой ссылкой
  $("[href='https://www.instagram.com/verbenakursk/']").click(function() {
	  ym(47540161, 'reachGoal', 'insta'); return true;
  });
	
$("[href='https://vk.com/club55639818']").click(function() {
   ym(47540161, 'reachGoal', 'vk'); return true;
  });	
	
$("[href='tel:+7(4712)39-26-00']").click(function() {
   ym(47540161, 'reachGoal', 'phone'); return true;
  });

});
</script> 
</body>

</html>
