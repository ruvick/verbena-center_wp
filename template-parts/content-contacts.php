<div class="container">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}?>
</div>



<section class = "green-prtg">
	<div class="container ">
		<h1 class="page-title">Контакты</h1>
	</div>
</section>


<div class="container" itemscope itemtype="http://schema.org/Organization">
	<div style = "display:none" itemprop="name">Центр лечебной косметологии "Вербена"</div>
	<div class = "container-contacts">
		<div class = "contacts-info">
			
			<div class="contacts-item">
				<h3>Телефоны:</h3>
				<a itemprop="telephone" href = "tel:<?php echo carbon_get_theme_option('as_phone'); ?>"><?php echo carbon_get_theme_option('as_phone'); ?></a><br/>
				<a itemprop="faxNumber" href = "tel:<?php echo carbon_get_theme_option('as_phone_2');?>"><?php echo carbon_get_theme_option('as_phone_2');?></a><br/>
				<a class = "wsPhone" href = "tel:<?php echo carbon_get_theme_option('as_phone_ws');?>"><?php echo carbon_get_theme_option('as_phone_ws');?></a><br/>
			</div>
			<div class="contacts-item">
				<strong>Email:</strong> <a itemprop="email" href = "mailto:<?php echo carbon_get_theme_option('as_email'); ?>"><?php echo carbon_get_theme_option('as_email'); ?></a>
			</div>

			<div class="question-soc">
	          <ul class="ul-clean">
	            <li><a href="<?php echo carbon_get_theme_option('as_vk');?>" style="background-image: url(<?php echo get_template_directory_uri()?>/img/telegram.svg);"></a></li>
	            <li><a href="<?php echo carbon_get_theme_option('as_insta');?>" style="background-image: url(<?php echo get_template_directory_uri()?>/img/vk-green.svg);"></a></li>
	          </ul>
			</div>
			
			<!--
			<div class="contacts-item">
				<strong>ИНН:</strong> <?php echo carbon_get_theme_option('as_inn'); ?>
			</div>
			
			<div class="contacts-item">
				<strong>ОГРН:</strong> <?php echo carbon_get_theme_option('as_orgn'); ?>
			</div>
			
			<div class="contacts-item">
				<strong>КПП:</strong> <?php echo carbon_get_theme_option('as_cpp'); ?>
			</div>
			-->
			
			
			<div class="contacts-item">
			<h3>График работы:</h3>
				<strong>Пн-Пт:</strong> <?php echo carbon_get_theme_option('as_grafik_bud'); ?><br/>
				<strong>Сб-Вс:</strong> <?php echo carbon_get_theme_option('as_grafik_uik'); ?>
			</div>

			
			<div class="contacts-item">
				<div style = "display:none" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<span itemprop="streetAddress">ул. Запольная, д. 60А</span>
					<span itemprop="postalCode">305040</span>
					<span itemprop="addressLocality">Курск</span>
				</div>
				<h2><strong>Адрес:</strong> <?php echo carbon_get_theme_option('as_address'); ?></h2>
			</div>
		</div>
		
		<div class = "photo">
			<img class="b-lazy" 
         src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
         data-src="<?php bloginfo("template_url")?>/img/center-photo.jpg" />
		</div>
	</div>
	<!-- Блок для ывода к опторому надо крутить стили-->
<div id = "mapLine" class = "mapLine"></div>
<!-- 
Основной скрипт карты вставояется
под блоком для вывода 
-->
	 <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script>
		  ymaps.ready(init);
		  function init () {
			
			  var myMap = new ymaps.Map("mapLine", {
					  center: [51.74098657224585,36.14928499999996],
					  zoom: 16,
					  controls: ['zoomControl']
				  }),
				myPlacemarkAdr = new ymaps.Placemark([51.74098657224585,36.14928499999996], {
					  iconContent: '',
					  balloonContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('as_address'); ?></b><br/>Телефон: <b><?php echo carbon_get_theme_option('as_phone'); ?></b>',
					  hintContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('as_address'); ?></b><br/>Телефон: <b><?php echo carbon_get_theme_option('as_phone'); ?></b>',
				  }, {
					iconLayout: 'default#image',
					iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/map.svg',
					iconImageSize: [40, 54],
					iconImageOffset: [-20, -54]
				  });
				  
				  myMap.geoObjects.add(myPlacemarkAdr);
				  
				
				
				
			myMap.behaviors.disable('scrollZoom');
		  }
	</script>
</div>
<?php get_template_part('template-parts/videotur');?>
<?php get_template_part('template-parts/question-page');?>