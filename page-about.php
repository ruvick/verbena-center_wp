<?php 

/*
* Template Name: О нас
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main ">
		
		<div class = "leaf-25"></div>
		


			
		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}?>
		</div>
		<section class = "green-prtg">
			<div class="container ">
				<h1 class="page-title"><?php the_title();?></h1>
			</div>
		</section>
		
		    <section class="section-pink about">
			  <div class="rose"></div>
			  <div class="leaf-1"></div>
			  <div class="leaf-2"></div>
			  <div class="container">
				<div class="about-wrapper">
				  
				  <div class="about-wrapper__text about-wrapper__text_in_page text_full">
				<!--<h2 class="section-title">О центре Verbena</h2>
					<div class="about-wrapper__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/about-mini.jpg)"></div>-->
					<img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== data-src="<?php echo get_template_directory_uri();?>/img/about-mini.jpg">
					<?php the_content();?>
				  </div>
				</div>
			  </div>
			</section>
		
		<!--
		<div class="container container-about container-about-mini">
			<div class="team-photo team-photo-mini " style="background-image: url(<?php echo get_template_directory_uri();?>/img/about-mini.jpg);"></div>
		</div>
		
		
		<div class="container section-white ">
			
			<div class="about-content text_full zag_center">
				<?php the_content();?>
			</div>
		</div>
		-->
		
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_template_part('template-parts/preim-page');?>


<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>
<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>
<?php get_template_part('template-parts/question-page');?>
<?php 
get_footer();