<?php

/*
* Template Name: Услуга главная
*/

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}?>
		</div>
		<section class="green-prtg">
			<div class="container ">
				<h1 class="page-title"><?php the_title();?></h1>
			</div>
		</section>
		<div class="container">
	        <?php get_template_part('template-parts/services-list');?>
		</div>
		<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>
		<?php get_template_part('template-parts/reviews');?>
		<?php get_template_part('template-parts/videotur');?>
	</main>
</div>
<?php
get_template_part('template-parts/question-page');
get_footer();