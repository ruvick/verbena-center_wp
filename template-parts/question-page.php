<?php  
    require_once __DIR__ . '/../Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $is_mobile = false;
    if ( $detect->isMobile() ) {
      $is_mobile = false;
    }
?>

    <section class="question question-page">
      <div class="flower-2 b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/flower-2.png"></div>
      <div class="leaf-3 b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/leaf-3.png"></div>
      <div class="leaf-4 b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/leaf-4.png"></div>
      <div class="leaf-5 b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/leaf-3.png"></div>
      <div class="leaf-6 b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/leaf-2.png"></div>
      <div class="leaf-7 b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/leaf-3.png"></div>
      <div class="leaf-8 b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/leaf-4.png"></div>
      <div class="leaf-9 b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/leaf-1.png"></div>
      <div class="container">
        <?php $numb = rand(1, 2);?>
        <?php $numb = 1;?>
        <?php if(!$is_mobile):?>
          <div class="question-photo b-lazy" data-src="<?php echo get_template_directory_uri();?>/img/admin-<?php echo $numb?>.png"></div>
        <?php endif;?>
        <div class="question-content">
          <h2 class="section-title">Не нашли то, что искали?</h2>
          <h2 class="section-title">Остались вопросы?</h2>
          <div class="question-links">
            <a href="#" class="button-green popup-review popup-q" data-formid="Заявка с подвала сайта" data-mailmsg="Заявка с подвала сайта">Задать вопрос</a>
            <!-- <a href="#" class="button-green">Записать на прием</a> -->
          </div>
          <div class="question-soc">
          <h2 class="section-title">Будьте в курсе наших акций,<br> подписывайтесь на нас!</h2>
          <ul class="ul-clean">
            <li><a href="<?php echo carbon_get_theme_option('as_vk');?>" class="b-lazy" data-src="<?php echo get_template_directory_uri()?>/img/instagram-green.svg"></a></li>
            <li><a href="<?php echo carbon_get_theme_option('as_insta');?>" class="b-lazy" data-src="<?php echo get_template_directory_uri()?>/img/vk-green.svg"></a></li>
          </ul>
          </div>
        </div>
      </div>
    </section>