<?php 
/*
* Template Name: Отзывы
*/
get_header();
?>

<div class="container">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}?>
</div>

<?php //get_template_part('template-parts/header', 'actions');?>
	<section class = "green-prtg">
		<div class="container ">
			<h1 class="page-title"><?php  the_title();?></h1>
		</div>
	</section>
<div class="container">
	    <?php 
			$arr_review = carbon_get_theme_option('complex_review');
			if($arr_review):
        ?>
			<?php foreach($arr_review as $review):?>
				<div class="reviews-slider__item rew_in_page">
					<div class="reviews-slider__item-photo b-lazy" data-src="<?php echo wp_get_attachment_image_src($review['complex_review_image'], 'full')[0]?>"></div>
					<div class="reviews-slider__item-content">
					  <div class="reviews-slider__item-name"><?php echo $review['complex_review_name']?></div>
					  <div class="reviews-slider__item-date"><?php echo $review['complex_review_date']?></div>
					  <div class="reviews-slider__item-text">
						<?php echo $review['complex_review_text'];?>
					  </div>
					</div>
				  </div>
			<?php endforeach;?>
		<?php endif;?>
		
		
</div>

<div class="btn-wrap btn-wrap-service btn-wrap-reviews">
		<a href="#" class="button-green popup-review" data-person="О клинике" data-formid="Оставить отзыв О клинике" data-mailmsg="Оставить отзыв О клинике">Оставить отзыв</a>
</div>

<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>

<?php get_template_part('template-parts/news');?>
<?php get_template_part('template-parts/videotur');?>
<?php
get_template_part('template-parts/question-page');
get_footer();