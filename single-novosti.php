<?php
/*
Template Name: Страница новости
Template Post Type: post
*/

get_header();
?>

	<div id="primary" class="content-area ">
	<section>			
		<div class="container ">
		<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}?>
				</div>
	</section>			
				
				<section class = "green-prtg">
					<div class="container ">
						<h1 class="page-title"><?php the_title();?></h1>
					</div>
				</section>
				
		<main id="main" class="site-main zelen_blk_all_page">
		<div class = "leaf-25"></div>
			<div class = "leaf-26"></div>
			<div class = "leaf-27"></div>
			<div class = "leaf-20"></div>
			<div class = "leaf-21"></div>
			<div class = "rose"></div>
			<div class="container ">
				
				

				
				<!--<div class="team-photo" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>-->
				<p style = "text-align:center;">
					<img class = "newsImg_in_page" src = "<?php the_post_thumbnail_url();?>" />
				</p>
				<div class = "uni_text text_full zag_center">
					<?php the_content();?>
					
				</div>
				
				<?php if (carbon_get_the_post_meta('verb_news_feild_razdel_url')):?>
					<div class="btn-wrap btn-wrap-service btn-wrap-reviews">
						<a href="<?php echo carbon_get_the_post_meta('verb_news_feild_razdel_url');?>" class="button-green">Перейтив раздел</a>
					</div>
				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>

<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>

<?php
get_template_part('template-parts/question-page');
get_footer();
