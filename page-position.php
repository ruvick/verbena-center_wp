<?php 

/*
* Template Name: Специалисты
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
	<header>
		<div class="container container-position container-person">
			<div class="container-position__photo" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);"></div>
			<div class="container-position__content">
				<h1 class="container-position__title"><?php the_title();?></h1>
				<div class="container-position__person"><?php echo carbon_get_the_post_meta('verb_position_person');?></div>
			</div>
		</div>
	</header>
	<div class="container">
		<?php the_content();?>
	</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php 
get_template_part('template-parts/question-page');
get_footer();