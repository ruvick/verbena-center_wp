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
					<h1 class="page-title"><?php the_title(); ?></h1>
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

<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>

<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>

<?php get_template_part('template-parts/question-page');?>	
	
<?php
get_footer();
