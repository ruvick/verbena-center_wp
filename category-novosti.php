<?php

get_header();
?>

			
<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}?>
		</div>
		
<section id="primary" class="site-content">
	<div id="content" role="main">
		<?php 
			// Check if there are any posts to display
			if ( have_posts() ) : ?>
			
<!--			
			<header class="archive-header">
			<h1 class="archive-title section-title"><?php single_cat_title( '' ); ?></h1>
			 
			 
			<?php
			// Display optional category description
			 if ( category_description() ) : ?>
			<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header>
			-->
			
			<section class = "green-prtg">
				<div class="container ">
					<h1 class="page-title"><?php single_cat_title( '' ); ?></h1>
				</div>
			</section>
			
			 <div class="container">
			 	<div class="actions-wrapper">
			<?php
			 
			// The Loop
			while ( have_posts() ) : the_post(); ?>
			<div class="actions-item">
				<a href="<?php the_permalink();?>">
					<div class="actions-item__title actions-item__title_news">
						<?php the_title();?>
					</div>
					<div class="actions-item__img b-lazy" data-src="<?php the_post_thumbnail_url();?>"></div>
				</a>
				<div class="actions-item__content">
					<?php the_excerpt();?>
					<div class="actions-item__btn actions-item_news_btn">
						<a href="<?php the_permalink();?>" class="button-green">Подробнее</a>
					</div>
				</div>
		</div>
			<?php endwhile; 
			 ?>
			</div>
			 </div>
			<?php
			else: ?>
			<p>Пока нет новостей</p>
			 
			 
			<?php endif; ?>
	</div>
	
	<?php wp_pagenavi(); ?>
	
	<div class="btn-wrap btn-wrap-news">
      <a href="<?php echo get_category_link(3);?>" class="more-news">Смотреть все новости</a>
    </div>
</section>

<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>

<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>

<?php
get_template_part('template-parts/question-page');
get_footer();