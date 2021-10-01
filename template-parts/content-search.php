<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package verbena
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-item'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary search-entry-summary">

		<?php 
		if(get_the_excerpt()):
			the_excerpt(); 
		else:
			echo carbon_get_the_post_meta('subserice_subtitle');
		endif;?>
	</div><!-- .entry-summary -->
	<a href="<?php echo get_permalink();?>" class="button">Подробнее</a>

</article><!-- #post-<?php the_ID(); ?> -->
