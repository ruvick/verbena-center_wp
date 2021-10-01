<section class="test test_subservice">
	<div class="container">
		<div class="test-photo"></div>
		<div class="test-content">
			<h2 class="test-content__title"><?php echo carbon_get_the_post_meta('verb_subserice_test_title'); ?></h2>
			<div class="test-content__text"><?php echo carbon_get_the_post_meta('verb_subserice_test_subtitle'); ?></div>
		<?php if(carbon_get_the_post_meta('verb_subserice_test_imt_is_show')):?>
			<a href="#" class="button button-pudra test-link">Начать тестирование</a>
		<?php else:?>
			<a href="<?php echo carbon_get_the_post_meta('verb_subserice_test_test_link');?>" class="button button-pudra">Начать тестирование</a>
		<?php endif;?>
		</div>
	</div>
</section>