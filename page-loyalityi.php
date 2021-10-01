<?php 
/*
* Template Name: Программа лояльности
*/
get_header();
?>
<div class="container">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}?>
</div>

<!--
<header class="header-service">

		<div class="main-slider__item" style="background-color: #fcedea; background-image: url(<?php echo get_template_directory_uri(); ?>/img/bn_loy_1.jpg)">
        <div class="container">
          <div class="main-slider__item-photo">
            <div class="main-slider__item-bg" style="background-image: url()"></div>
          </div>
          <div class="main-slider__item-content">
            <h1 class="h1"><?php the_title();?></h1>
            <div class="main-slider__item-content-text">
              <div class="sub-title">В центре Лечебной Косметологии "ВЕРБЕНА"</div>
              <a href="#" class="button button-pudra popup-content" data-formid="Запись на процедуру <?php the_title();?>" data-mailmsg="Запись на процедуру <?php the_title();?>">Стать участником</a>
            </div>
          </div>
        </div>
      </div>
</header>
-->

	<header class="header-service">
		<div class="main-slider__item main-slider__item__loyal main-slider__item_subservice b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/bn_loy_1.jpg">
        <div class="container">
          <div class="main-slider__item-photo">
            <div class="main-slider__item-bg" style="background-image: url()"></div>
          </div>
          <div class="main-slider__item-content">
            <h1 class="h1"><?php the_title();?></h1>
            <div class="main-slider__item-content-text">
              <div class="sub-title">В центре Лечебной Косметологии "ВЕРБЕНА"</div>
              <a href="#" class="button button-pudra popup-content" data-formid="Запись на процедуру <?php the_title();?>" data-mailmsg="Запись на процедуру <?php the_title();?>">Стать участником</a>
            </div>
          </div>
        </div>
      </div>
	</header>


<section class = "loyal_section zelen_blk_all_page">
			<div class = "leaf-25"></div>
			<div class = "leaf-26"></div>
			<div class = "leaf-27"></div>
			<div class = "leaf-20"></div>
			<div class = "leaf-21"></div>


	<div class="container ">
			<div class="container uni_text text_full zag_center loyality_text">
					
					<?php
					while ( have_posts() ) :
						the_post();
							
						the_content();	
						
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
	</div>
</section>

<?php get_template_part('template-parts/preim-page');?>

<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>
<?php
get_template_part('template-parts/question-page');
get_footer();