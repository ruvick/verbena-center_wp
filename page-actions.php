<?php 
/*
* Template Name: Акции
*/
get_header();
?>
<div class="container">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}?>
</div>
<?php //$noshovh2 = false;  include('template-parts/header-actions.php'); ?>
<section class = "green-prtg">
	<div class="container ">
		<h1 class="page-title">Текущие акции</h1>
	</div>
</section>
	
<div class="container">
	<?php $arr_actions = carbon_get_the_post_meta('complex_actions');
	if($arr_actions):
	?>
	<div class="actions-wrapper">
		<?php foreach($arr_actions as $act):?>
		<div class="actions-item actions-item-full-border">
			<div class="actions-item__title">
				<?php echo $act['actions_title']?>
			</div>
			<div class="actions-item__img b-lazy" data-src="<?php echo wp_get_attachment_image_src($act['actions_image'], 'full')[0]?>"></div>
			
			<div class="actions-item__content">
				<div class="actions-item__price-block">
					<?php echo $act['actions_text']?>
				</div>
				
				<div class="actions-item__btn">
					<a href="<?php echo $act['actions_link'];?>" class="button-green">Подробнее</a>
					<a href="#" class="button-green popup-content" data-formid="<?php echo $act['actions_title']?>" data-mailmsg="<?php echo $act['actions_title']?>">Участвовать</a>
				</div>
			</div>
			
		</div>
	<?php endforeach;?>
	</div>
<?php endif;?>
</div>

<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>

<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>

<?php
get_template_part('template-parts/question-page');
get_footer();