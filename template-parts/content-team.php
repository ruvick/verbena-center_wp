<div class="container">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}?>
</div>
<header>
	<div class="container">
		<h1 class="section-title">Наша команда</h1>
	</div>
</header>
<div class="container">
	<div class="team-photo b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/special.jpg)"></div>
</div>
<div class="container team-container">
	<div class="team-container__row-1">
		<div class="team-container__item">
			<a href = "<?php echo get_the_permalink(84);?>">
			<div class="team-container__item-header">
				<div class="team-container__item-photo b-lazy" data-src="<?php echo get_the_post_thumbnail_url(84);?>"></div>
				<div class="team-container__item-name animbtnNew"><?php echo get_the_title(84)?></div>
			</div>
			</a>
			<div class="team-container__item-descr">
				<?php echo carbon_get_post_meta(84, 'verb_position_excerpt')?>
			</div>
			<div class="team-container__item-btn">
				<a href="#" class="button-green popup-content" data-person="<?php echo get_the_title(84)?>" data-formid="Запись на прием <?php echo get_the_title(84)?>" data-mailmsg="Запись на прием <?php echo get_the_title(84)?>">Записаться на прием</a>
				<a href="#" class="button-green popup-review" data-person="<?php echo get_the_title(84)?>" data-formid="Оставить отзыв <?php echo get_the_title(84)?>" data-mailmsg="Оставить отзыв <?php echo get_the_title(84)?>">Оставить отзыв</a>
			</div>
		</div>
	</div>
	<div class="team-container__row-2">

		<div class="team-container__item">
			<a href = "<?php echo get_the_permalink(88);?>">
			<div class="team-container__item-header">
				<div class="team-container__item-photo b-lazy" data-src="<?php echo get_the_post_thumbnail_url(88);?>"></div>
				<div class="team-container__item-name animbtnNew"><?php echo get_the_title(88)?></div>
			</div>
			</a>
			<div class="team-container__item-descr">
				<?php echo carbon_get_post_meta(88, 'verb_position_excerpt')?>
			</div>
			<div class="team-container__item-btn">
				<a href="#" class="button-green popup-content" data-person="<?php echo get_the_title(88)?>" data-formid="Запись на прием <?php echo get_the_title(88)?>" data-mailmsg="Запись на прием <?php echo get_the_title(88)?>">Записаться на прием</a>
				<a href="#" class="button-green popup-review" data-person="<?php echo get_the_title(88)?>" data-formid="Оставить отзыв <?php echo get_the_title(88)?>" data-mailmsg="Оставить отзыв <?php echo get_the_title(88)?>">Оставить отзыв</a>
			</div>
		</div>
		
		<div class="team-container__item">
			<a href = "<?php echo get_the_permalink(90);?>">
			<div class="team-container__item-header">
				<div class="team-container__item-photo b-lazy" data-src="<?php echo get_the_post_thumbnail_url(90);?>"></div>
				<div class="team-container__item-name  animbtnNew"><?php echo get_the_title(90)?></div>
			</div>
			</a>
			<div class="team-container__item-descr">
				<?php echo carbon_get_post_meta(90, 'verb_position_excerpt')?>
			</div>
			<div class="team-container__item-btn">
				<a href="#" class="button-green popup-content" data-person="<?php echo get_the_title(90)?>" data-formid="Запись на прием <?php echo get_the_title(90)?>" data-mailmsg="Запись на прием <?php echo get_the_title(90)?>">Записаться на прием</a>
				<a href="#" class="button-green popup-review" data-person="<?php echo get_the_title(90)?>" data-formid="Оставить отзыв <?php echo get_the_title(90)?>" data-mailmsg="Оставить отзыв <?php echo get_the_title(90)?>">Оставить отзыв</a>
			</div>
		</div>
		
	</div>
	<div class="team-container__row-2">
		<div class="team-container__item">
			<a href = "<?php echo get_the_permalink(86);?>">
			<div class="team-container__item-header">
				<div class="team-container__item-photo b-lazy" data-src="<?php echo get_the_post_thumbnail_url(86);?>"></div>
				<div class="team-container__item-name  animbtnNew"><?php echo get_the_title(86)?></div>
			</div>
			</a>
			<div class="team-container__item-descr">
				<?php echo carbon_get_post_meta(86, 'verb_position_excerpt')?>
			</div>
			<div class="team-container__item-btn">
				<a href="#" class="button-green popup-content" data-person="<?php echo get_the_title(86)?>" data-formid="Запись на прием <?php echo get_the_title(86)?>" data-mailmsg="Запись на прием <?php echo get_the_title(86)?>">Записаться на прием</a>
				<a href="#" class="button-green popup-review" data-person="<?php echo get_the_title(86)?>" data-formid="Оставить отзыв <?php echo get_the_title(86)?>" data-mailmsg="Оставить отзыв <?php echo get_the_title(86)?>">Оставить отзыв</a>
			</div>
		</div>
		<div class="team-container__item">
			<a href = "<?php echo get_the_permalink(1664);?>">
			<div class="team-container__item-header">
				<div class="team-container__item-photo b-lazy" data-src="<?php echo get_the_post_thumbnail_url(1664);?>"></div>
				<div class="team-container__item-name  animbtnNew"><?php echo get_the_title(1664)?></div>
			</div>
			</a>
			<div class="team-container__item-descr">
				<?php echo carbon_get_post_meta(1664, 'verb_position_excerpt')?>
			</div>
			<div class="team-container__item-btn">
				<a href="#" class="button-green popup-content" data-person="<?php echo get_the_title(1664)?>" data-formid="Запись на прием <?php echo get_the_title(1664)?>" data-mailmsg="Запись на прием <?php echo get_the_title(1664)?>">Записаться на прием</a>
				<a href="#" class="button-green popup-review" data-person="<?php echo get_the_title(1664)?>" data-formid="Оставить отзыв <?php echo get_the_title(1664)?>" data-mailmsg="Оставить отзыв <?php echo get_the_title(1664)?>">Оставить отзыв</a>
			</div>
		</div>
	</div>
	 <!-- <div class="team-container__row-2"> -->
		<!-- <div class="team-container__item">
			<a href = "<?php echo get_the_permalink(92);?>">
			<div class="team-container__item-header">
				<div class="team-container__item-photo" style="background-image: url(<?php echo get_the_post_thumbnail_url(92);?>);"></div>
				<div class="team-container__item-name  animbtnNew"><?php echo get_the_title(92)?></div>
			</div>
			</a>
			<div class="team-container__item-descr">
				<?php echo carbon_get_post_meta(92, 'verb_position_excerpt')?>
			</div>
			<div class="team-container__item-btn">
				<a href="#" class="button-green popup-content" data-person="<?php echo get_the_title(92)?>" data-formid="Заказать звонок <?php echo get_the_title(92)?>" data-mailmsg="Заказать звонок <?php echo get_the_title(92)?>">Заказать звонок</a>
				<a href="#" class="button-green popup-review" data-person="<?php echo get_the_title(92)?>" data-formid="Оставить отзыв <?php echo get_the_title(92)?>" data-mailmsg="Оставить отзыв <?php echo get_the_title(92)?>">Оставить отзыв</a>
			</div>
		</div>
		
		<div class="team-container__item">
			<a href = "<?php echo get_the_permalink(94);?>">
			<div class="team-container__item-header">
				<div class="team-container__item-photo" style="background-image: url(<?php echo get_the_post_thumbnail_url(94);?>);"></div>
				<div class="team-container__item-name  animbtnNew"><?php echo get_the_title(94)?></div>
			</div>
			</a>
			<div class="team-container__item-descr">
				<?php echo carbon_get_post_meta(94, 'verb_position_excerpt')?>
			</div>
			<div class="team-container__item-btn">
				<a href="#" class="button-green popup-content" data-person="<?php echo get_the_title(94)?>" data-formid="Заказать звонок <?php echo get_the_title(94)?>" data-mailmsg="Заказать звонок <?php echo get_the_title(94)?>">Заказать звонок</a>
				<a href="#" class="button-green popup-review" data-person="<?php echo get_the_title(94)?>" data-formid="Оставить отзыв <?php echo get_the_title(94)?>" data-mailmsg="Оставить отзыв <?php echo get_the_title(94)?>">Оставить отзыв</a>
			</div>
		</div> -->
	<!-- </div> -->
</div>
<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>
<?php get_template_part('template-parts/question-page');?>