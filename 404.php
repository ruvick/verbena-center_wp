<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package verbena
 */

get_header();
?>

	<div id="primary" class="content-area">
		
		<div class="container">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}?>
</div>

			<section class = "green-prtg">
				<div class="container ">
					<h1 class="page-title">К сожалению данная страница не найдена! 404!</h1>
				</div>
			</section>
		
		<main id="main" class="site-main">
			<div class="container uni_text">
				
				<?php
				while ( have_posts() ) :
					the_post();
						
						
					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->

</div><!-- #primary -->

        <section class="services section-white">
      <div class="container">
        <h2 class="section-title">Наши услуги</h2>
        <div class="services-wrapper">
          <a href="<?php echo get_the_permalink(5);?>" class="service-item">
            <div class="service-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/service-1.jpg)"></div>
            <div class="service-item__title">Лазерная косметология</div>
          </a>
          <a href="<?php echo get_the_permalink(20);?>" class="service-item">
            <div class="service-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/service-3.jpg)"></div>
            <div class="service-item__title">Инъекционная косметология</div>
          </a>
          <a href="<?php echo get_the_permalink(18);?>" class="service-item">
            <div class="service-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/service-2.jpg)"></div>
            <div class="service-item__title">Эстетическая косметология</div>
          </a>
          <a href="<?php echo get_the_permalink(22);?>" class="service-item">
            <div class="service-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/service-4.jpg)"></div>
            <div class="service-item__title">Трихология и лечение волос</div>
          </a>
          <a href="<?php echo get_the_permalink(26);?>" class="service-item">
            <div class="service-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/about-1.jpg)"></div>
            <div class="service-item__title">Здоровье нутрициология</div>
          </a>
          <a href="<?php echo get_the_permalink(223);?>" class="service-item">
            <div class="service-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/korrektsia-figuri.jpg)"></div>
            <div class="service-item__title">Коррекция фигуры</div>
          </a>
		  
		  <a href="<?php echo get_the_permalink(24);?>" class="service-item">
            <div class="service-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/service-6.jpg)"></div>
            <div class="service-item__title">Массаж тела, лица</div>
          </a>
          
        </div>
      </div>
    </section>

<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>

<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>

<?php get_template_part('template-parts/question-page');?>	
	
<?php
get_footer();
