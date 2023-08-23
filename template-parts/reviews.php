    <section class="reviews section-white">
      <div class="container">
        <h2 class="section-title">Отзывы</h2>
        <?php 
          $arr_review = carbon_get_theme_option('complex_review');
          if($arr_review):

          $indexes  = array_rand( $arr_review, 13);
  
        ?>
        <div class="reviews-slider">
          <?php 
            // foreach($arr_review as $review):
            
              foreach($indexes as $review_index):
              $review = $arr_review[$review_index]; 
          ?>
          <div class="reviews-slider__item">
            <div class="reviews-slider__item-photo b-lazy" data-src="<?php if (!empty($review['complex_review_image'])) echo wp_get_attachment_image_src($review['complex_review_image'], 'full')[0]?>"></div>
            <div class="reviews-slider__item-content">
              <div class="reviews-slider__item-name"><?php echo $review['complex_review_name']?></div>
              <div class="reviews-slider__item-date"><?php echo $review['complex_review_date']?></div>
              <div class="reviews-slider__item-text">
                <?php echo mb_substr($review['complex_review_text'], 0, 150)."...";?>
				<br/>
				<br/>
				<a href = "<?php echo get_the_permalink(378);?>">Читать полностью</a>
              </div>
            </div>
          </div>
        <?php endforeach;?>
        </div>
      <?php endif;?>
      </div>
	  
	  <div class="btn-wrap btn-wrap-service btn-wrap-reviews">
		<a href="#" class="button-green popup-review" data-person="О клинике" data-formid="Оставить отзыв О клинике" data-mailmsg="Оставить отзыв О клинике">Оставить отзыв</a>
	  </div>
	  
    </section>
    
  