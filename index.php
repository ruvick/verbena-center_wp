<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package verbena
 */

get_header();
?>



<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php $arr_slider = carbon_get_theme_option('main_slider');
    if ($arr_slider) :
    ?>
      <section class="main-slider">
        <?php foreach ($arr_slider as $slide) : ?>
          <div class="main-slider__item b-lazy" data-src="<?php echo wp_get_attachment_image_src($slide['main_slider_img'], 'full')[0]; ?>" style="background-image: url(<?php echo wp_get_attachment_image_src($slide['main_slider_img'], 'full')[0]; ?>)">
            <div class="container">
              <div class="main-slider__item-content">
                <div class="h1"><?php echo $slide['main_slider_title'] ?></div>
                <div class="main-slider__item-content-text">
                  <div class="main-slider__item-content-text-text">
                    <?php echo $slide['main_slider_text'] ?>

                  </div>
                  <a href="<?php echo $slide['main_slider_link']; ?>" class="button-green popup-button">Подробнее</a>
                </div>
              </div>
              <div class="main-slider__item-photo">
                <div class="main-slider__item-bg"></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </section>
    <?php endif; ?>
    <!-- <section class="main-slider">
      <div class="main-slider__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/vb01.jpg)">
        <div class="container">
          <div class="main-slider__item-content">
            <div class="h1">Безболезненная эпиляция</div>
            <div class="main-slider__item-content-text">
              <div class="main-slider__item-content-text-text">
                на лазерном аппарате Alma Lasers в Центре Лечебной Косметологии
                
              </div>
              <a href="<?php echo get_permalink(117); ?>" class="button-green popup-button">Подробнее</a>
            </div>
          </div>
          <div class="main-slider__item-photo">
            <div class="main-slider__item-bg"></div>
          </div>
        </div>
      </div>
      <div class="main-slider__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/vb2.jpg)">
        <div class="container">
          <div class="main-slider__item-content">
            
			<div class="h1">Восстановление и сияние кожи</div>
				<div class="main-slider__item-content-text">
				  <div class="main-slider__item-content-text-text">
					
					СКИДКА 15% <br/>на биоревитализацию 
				  </div>
				  <a href="<?php echo get_permalink(14); ?>" class="button-green popup-button">Подробнее</a>
				</div>
			
          </div>
          <div class="main-slider__item-photo">
            <div class="main-slider__item-bg"></div>
          </div>
        </div>
      </div>
      <div class="main-slider__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/vb3.jpg)">
        <div class="container">
          <div class="main-slider__item-content">
		  
            <div class="h1">Специально для Вас</div>
            <div class="main-slider__item-content-text">
              <div class="main-slider__item-content-text-text">
                СКИДКА 20% на Биоревитализацию BlumGel
              </div>
              <a href="<?php echo get_permalink(14); ?>" class="button-green popup-button">Подробнее</a>
            </div>
            
          </div>
          <div class="main-slider__item-photo">
            <div class="main-slider__item-bg"></div>
          </div>
        </div>
      </div>
      <div class="main-slider__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/vb4.jpg)">
        <div class="container">
          <div class="main-slider__item-content">
		  
            <div class="h1">Долой пигментные пятна</div>
            <div class="main-slider__item-content-text">
              <div class="main-slider__item-content-text-text">
                
                СКИДКА 20% на <br/>Фотоакустическое 4D-омоложение  
             
              </div>
              <a href="<?php echo get_permalink(14); ?>" class="button-green popup-button">Подробнее</a>
            </div>
        
          </div>
          <div class="main-slider__item-photo">
            <div class="main-slider__item-bg"></div>
          </div>
        </div>
      </div>
      
    </section> -->
    <!--
    <div class="main-slider__item">
        <div class="container">
          <div class="main-slider__item-content">
            <h1 class="h1">Безболезненная эпиляция</h1>
            <div class="main-slider__item-content-text">
              <div class="main-slider__item-content-text-text">
                на лазерном аппарате <br>
                <span class="ttu-bold">Alma Lasers</span>
                в Центре Лечебной <br>Косметологии
                <span class="ttu-bold">Стала еще доступнее!</span>
              </div>
              <a href="<?php echo get_permalink(14); ?>" class="button-green popup-button">Подробнее</a>
            </div>
          </div>
          <div class="main-slider__item-photo">
            <div class="bg-circle"></div>
            <div class="main-slider__item-bg"></div>
          </div>
        </div>
      </div>
    -->
    <section class="section-pink about">
      <div class="rose b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/rose.png"></div>
      <div class="leaf-1 b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/leaf-1.png"></div>
      <div class="leaf-2 b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/leaf-2.png"></div>
      <div class="container">
        <div class="about-wrapper">
          <div class="about-wrapper__photo b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/main-min.jpg"></div>
          <div class="about-wrapper__text text_full">
            <h1 class="section-title "><?php echo carbon_get_theme_option('as_about_main'); ?></h1>
            <?php echo wpautop(carbon_get_theme_option('as_about_text')); ?>
          </div>
        </div>
      </div>
    </section>
    <section class="services section-white">
      <div class="container">
        <h2 class="section-title">Наши услуги</h2>
        <?php get_template_part('template-parts/services-list'); ?>
      </div>
    </section>

    <?php get_template_part('template-parts/consultation'); ?>

    <?php get_template_part('template-parts/preim'); ?>

    <?php
    // require_once __DIR__ . '/Mobile_Detect.php';
    // $detect = new Mobile_Detect;

    // if ($detect->isMobile()) {
    //   get_template_part('template-parts/videotur');
    // }
    ?>


    <?php 
      get_template_part('template-parts/videotur');
    ?>
    <?php get_template_part('template-parts/reviews'); ?>
    <?php get_template_part('template-parts/news'); ?>
    <?php get_template_part('template-parts/question-page'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
