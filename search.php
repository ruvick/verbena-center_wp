<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package verbena
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}?>
		</div>
		<section class = "green-prtg">
			<div class="container ">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( ' Вы искали: %s', 'verb' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</div>
		</section>
		<div class="container">
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
