<?php 

/*
* Template Name: Нутритцевтики
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
		<header class="health-head" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('verb_health_img'), 'full')[0];?>)">
			<div class="container container-health-header">
				<div class="container-health-header__photo"></div>
				<div class="container-health-header__content">
					<h1><?php the_title();?></h1>
					<div class="container-health-header__subtitle"><?php echo carbon_get_the_post_meta('verb_health_subtitle');?></div>
					<a href="#" class="button-green popup-content" data-formid="Записаться на прием" data-mailmsg="Записаться на прием">Записаться на прием</a>
				</div>
			</div>
		</header>
		-->
		
		<header class="header-service">
			<?php $bg = get_template_directory_uri() . '/img/bn_1.jpg';
			  if(carbon_get_the_post_meta('verb_health_img')) {
				$bg = wp_get_attachment_image_src(carbon_get_the_post_meta('verb_health_img'), 'full')[0];
			  }
			?>
				<div class="main-slider__item main-slider__item_subservice"" style="background-image: url(<?php echo $bg?>)">
				<div class="container">
				  <div class="main-slider__item-photo">
					<div class="main-slider__item-bg" style="background-image: url()"></div>
				  </div>
				  <div class="main-slider__item-content" >
					<h1 class="h1"><?php the_title();?></h1>
					<div class="main-slider__item-content-text">
					  <div class="sub-title"><?php echo carbon_get_the_post_meta('verb_health_subtitle');?></div>
					  <a href="#" class="button-green popup-content" data-formid="Запись на процедуру <?php the_title();?>" data-mailmsg="Запись на процедуру <?php the_title();?>">Записаться на процедуру</a>
					</div>
				  </div>
				</div>
			  </div>
			</header>
		
		<section class="subservice-descr">
		    <div class="container">
		      <div class="subservice-descr__time">
		        <div class="subservice-descr__time-icon healt_icon" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('verb_subserice_health_img'), 'full')[0];?>);"></div>
		                <div class="subservice-descr__time-text">
		            </div>
		           
		    </div>
		      <div class="subservice-descr__content">
		        <div class="subservice-descr__content-title"><?php echo carbon_get_the_post_meta('verb_subserice_health_title');?></div>
		        <div class="subservice-descr__content-text"><?php echo carbon_get_the_post_meta('verb_subserice_health_text');?></div>
		      </div>
		  </section>
		  <section class="nutricevt-about">
		  	<div class="container">
		  		<h2 class="nutricevt-about__title"><?php echo carbon_get_the_post_meta('verb_subserice_nutricevt_about_title');?></h2>
		  		<div class="nutricevt-about__text uni_text text_full zag_center">
		  			<?php echo carbon_get_the_post_meta('verb_subserice_nutricevt_about_text');?>
		  		</div>
		  	</div>
		  </section>
		  <?php get_template_part('template-parts/health/consult');?>
		  <?php get_template_part('template-parts/health/form-page');?>
		  <?php get_template_part('template-parts/health/spec');?>
		  <?php get_template_part('template-parts/health/test-dbioz');?>
		    <?php get_template_part('template-parts/reviews');?>
		    <?php get_template_part('template-parts/health/video');?>
		<div class="container">
			<?php the_content();?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php 
get_template_part('template-parts/question-page');
get_footer();