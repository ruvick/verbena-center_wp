<?php  
    require_once __DIR__ . '/../Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $is_mobile = 3;
    if ( $detect->isMobile() ) {
      $is_mobile = 3;
    }
?>

<section class="news section-pink">
  <div class="container">
    <h2 class="section-title">Новости</h2>
    <?php 
      $args = array(
        'posts_per_page' => $is_mobile,
        'cat' => 3
      );
      $query = new WP_Query($args);
      if($query->have_posts()):
    ?>
    <div class="news-wrapper">
      <?php while($query->have_posts()):
          $query->the_post();
        ?>
      <div class="news-item">
        <div class="news-item__photo b-lazy" data-src="<?php echo get_the_post_thumbnail_url();?>"></div>
        <div class="news-item__title"><?php the_title();?></div>
        <a href="<?php echo get_permalink();?>" class="button-green">Подробнее</a>
      </div>
    <?php endwhile;?>
    </div>
  <?php endif; wp_reset_postdata();?>
    <div class="btn-wrap btn-wrap-news">
      <a href="<?php echo get_category_link(3);?>" class="more-news">Смотреть все новости</a>
    </div>
  </div>
</section>