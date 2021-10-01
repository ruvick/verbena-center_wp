	<div class="container">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
		  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}?>
	</div>
	<header>
		<div class="container">
			<h1 class="page-title"><?php the_title();?></h1>
		</div>
	</header>
	<div class="entry-content-page service-blk-pp" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, "large");?>);" >
      <div class="leaf-1"></div>
      <div class="leaf-2"></div>
      <div class="rose"></div>
		<div class="container">
			<div class="entry-content__photo" ></div>
			<div class="entry-content__text">
				<?php the_content();?>
			</div>
		</div>
	</div>
	<section class="services section-white">
      <div class="container">
        <h2 class="section-title">Виды процедур</h2>
        <?php
        $post_ID = get_the_ID();
          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'page',
            'post_parent' => $post_ID,
			
			'orderby' => 'menu_order',
			'order' => 'ASC',
          );
          $query = new WP_Query($args);
          if($query->have_posts()):
        ?>
        <div class="services-wrapper">
          <?php while($query->have_posts()):
            $query->the_post();?>
          <a href="<?php the_permalink();?>" class="service-item">
            <div class="service-item__photo" style="background-image: url(<?php the_post_thumbnail_url($post->ID, "large");?>)"></div>
            <div class="service-item__title"><?php the_title();?></div>
          </a>
        <?php endwhile;?>
        </div>
      <?php endif; wp_reset_postdata();?>
      </div>
    </section>
<?php get_template_part('template-parts/news');?>
<?php get_template_part('template-parts/question-page');?>