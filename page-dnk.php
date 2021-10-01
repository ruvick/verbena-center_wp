<?php 

/*
* Template Name: ДНК
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}?>
		</div>
		<!--
		<header class="health-head" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('dnk_header_image'), 'full')[0];?>);">
			<div class="container container-health-header">
				<div class="container-health-header__photo"></div>
				<div class="container-health-header__content dnk-banner">
					<h1><?php the_title();?></h1>
					<div class="container-dnk-header__subtitle"><?php echo carbon_get_the_post_meta('dnk_subtitle');?></div>
					<div class="container-dnk-header__text"><?php echo carbon_get_the_post_meta('dnk_header_text');?></div>
					<a href="#" class="button-green popup-content" data-formid="Записаться на прием" data-mailmsg="Записаться на прием">Записаться на прием</a>
				</div>
			</div>
		</header>
		-->
		
		<header class="header-service">
			<?php $bg = get_template_directory_uri() . '/img/bn_1.jpg';
			  if(carbon_get_the_post_meta('dnk_header_image')) {
				$bg = wp_get_attachment_image_src(carbon_get_the_post_meta('dnk_header_image'), 'full')[0];
			  }
			?>
				<div class="main-slider__item main-slider__item_subservice" style="background-image: url(<?php echo $bg?>)">
				<div class="container">
				  <div class="main-slider__item-photo">
					<div class="main-slider__item-bg" style="background-image: url()"></div>
				  </div>
				  <div class="main-slider__item-content ">
					<h1 class="h1"><?php the_title();?></h1>
					<div class="main-slider__item-content-text">
					  <div class="container-dnk-header__subtitle"><?php echo carbon_get_the_post_meta('dnk_subtitle');?></div>
					  <div class="container-dnk-header__text"><?php echo carbon_get_the_post_meta('dnk_header_text');?></div>
					  <a href="#" class="button-green popup-content" data-formid="Запись на процедуру <?php the_title();?>" data-mailmsg="Запись на процедуру <?php the_title();?>">Записаться на процедуру</a>
					</div>
				  </div>
				</div>
			  </div>
		</header>
		
		<section class="subservice-descr section-green">
		    <div class="container">
		      <div class="subservice-descr__time">
		        <div class="subservice-descr__time-icon time-icon-dnk" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('verb_subserice_nutr_img_1'), 'full')[0];?>);"></div>
		                <div class="subservice-descr__time-text">
		            </div>
		           
		    </div>
		      <div class="subservice-descr__content">
		        <div class="subservice-descr__content-title header-descr-dn"><?php echo carbon_get_the_post_meta('verb_subserice_nutr_title_1');?></div>
		        <div class="subservice-descr__content-text subservice-descr-dnk"><?php echo carbon_get_the_post_meta('verb_subserice_nutr_text_1');?></div>
		      </div>
		  </div>
		</section>
		<section class="panel-dnk">
			<div class="container">
				<h2 class="section-title"><?php echo carbon_get_the_post_meta('dnk_gen_code');?></h2>
				<div class="panel-wrapper">
					<div class="panel-item">
						
						<?php echo carbon_get_the_post_meta('dnk_beauty');?>
					</div>
					<div class="panel-item">
						<?php echo carbon_get_the_post_meta('dnk_wellness');?>
					</div>
				</div>
			</div>
		</section>
		<section class="consult price-dnk">
		  	<div class="container">
		  		<h2 class="section-title"><?php echo carbon_get_the_post_meta('dnk_price_test');?></h2>
		  		<?php echo carbon_get_the_post_meta('dnk_price_table');?>		  	</div>
		  </section>
		  <div class="btn-wrap">
		  	<a href="#" class="button-green popup-content" data-formid="Записаться на прием" data-mailmsg="Записаться на прием">Записаться на прием</a>
		  </div>
		  <section class="dnk-programm" style="background-image: url(<?php echo get_template_directory_uri();?>/img/ban_pudr.jpg);">
		  	<div class="container">
		  		<div class="dnk-programm__photo"></div>
		  		<div class="dnk-programm__content">
		  			<div class="dnk-programm__title">Программа лояльности</div>
		  			<div class="dnk-programm__subtitle">для постоянных клиентов</div>
		  			<div class="dnk-programm__name">«Verbena Premium»</div>
		  			<a href="#" class="button popup-content">Подробнее</a>
		  		</div>
		  	</div>
		  </section>
		  <section class="consult-spec">
		  	<div class="container">
		  		<h2 class="section-title"><?php echo carbon_get_the_post_meta('dnk_for');?></h2>
		  		<div class="consult-spec__item">
		  			<div class="consult-spec__item-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dnk-1.svg"></div>
		  			<div class="consult-spec__item-text">
		  				<?php echo carbon_get_the_post_meta('dnk_test_text_1');?>
		  			</div>
		  		</div>
		  		<div class="consult-spec__item">
		  			<div class="consult-spec__item-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dnk-2.svg"></div>
		  			<div class="consult-spec__item-text">
		  				<?php echo carbon_get_the_post_meta('dnk_test_text_2');?>
		  			</div>
		  		</div>
		  		<div class="consult-spec__item">
		  			<div class="consult-spec__item-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/dnk-3.svg"></div>
		  			<div class="consult-spec__item-text">
		  				<?php echo carbon_get_the_post_meta('dnk_test_text_3');?>
		  			</div>
		  		</div>
		  		<div class="dnk-note">
		  				<?php echo carbon_get_the_post_meta('dnk_test_text_4');?>
		  					
		  				</div>
		  	</div>
		  </section>
		  
		  <!--
		  <section class="consult-spec">
		  	<div class="container">
		  		<h2 class="section-title">Преимущества ДНК-теста в нашем центре:</h2>
		  		<div class = "uni_text">
					<ul>
						<li>Проводится один раз в жизни</li>
						<li>Выдается персональный отчет с рекомендациями</li>
						<li>Вас ведет квалифицированный специалист</li>
						<li>Простая процедура прохождения теста</li>
						<li>Индивидуальная программа по питанию, тренировкам, сохранению красоты и молодости</li>
					</ul>
				</div>
		  	</div>
		  </section>
		  -->
		  
		  <?php 
		  if(carbon_get_the_post_meta('verb_subserice_test_imt_is_show')):
			  get_template_part('template-parts/health/test-weight');
			endif;?>
		  <?php get_template_part('template-parts/health/consult');?>
		  <?php get_template_part('template-parts/health/form-page');?>
		  <?php //get_template_part('template-parts/health/test');?>
		  <?php get_template_part('template-parts/reviews');?>
		  <?php get_template_part('template-parts/health/video');?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php 
get_template_part('template-parts/question-page');
get_footer();