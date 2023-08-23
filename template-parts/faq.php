<?php
    $arr_faq = carbon_get_the_post_meta('faq_in_all_pages');
    if($arr_faq) {
?>
<section class="faq_section section-white">
    <h2 class="section-title">Вопрос ответ</h2>
    <div class="container">
        <?php 
            foreach($arr_faq as $faq){
        ?>
            <details class="faq_details">
                <summary><?php echo $faq['faq_q']?></summary>
                <div class="faq_otv">
                  <?php echo $faq['faq_otv']?>
                </div>
                
            </details>
        <?
          }
        ?>
    </div>
  </section>
<?
}
?>