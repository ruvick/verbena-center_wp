	<div class="container">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
		  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}?>
	</div>
	<header class="header-service">
    <?php $bg = get_template_directory_uri() . '/img/bn_1.jpg';
      if(carbon_get_the_post_meta('subserice_subimage')) {
        $bg = wp_get_attachment_image_src(carbon_get_the_post_meta('subserice_subimage'), 'full')[0];
      }
    ?>
		<div class="main-slider__item main-slider__item_subservice b-lazy" data-src="<?php echo $bg?>">
        <div class="container">
          <div class="main-slider__item-photo">
            <div class="main-slider__item-bg" style="background-image: url()"></div>
          </div>
          <div class="main-slider__item-content">
            <h1 class="h1"><?php the_title();?></h1>
            <div class="main-slider__item-content-text">
              <div class="sub-title"><?php echo carbon_get_the_post_meta('subserice_subtitle');?></div>
              <a href="#" class="button-green popup-content" data-formid="Запись на процедуру <?php the_title();?>" data-mailmsg="Запись на процедуру <?php the_title();?>">Записаться на процедуру</a>
            </div>
          </div>
        </div>
      </div>
	</header>
 
 <?php if(carbon_get_the_post_meta('verb_subserice_descr_is_showw')):?>
  <section class="subservice-descr ">
    <div class="container">
      <div class="subservice-descr__time">
        <div class="subservice-descr__time-icon <?php echo carbon_get_the_post_meta('verb_subserice_descr_imgstyle');?> b-lazy" data-src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('verb_subserice_descr_image'), 'full')[0];?>"></div>
        <?php if(carbon_get_the_post_meta('verb_subserice_descr_is_show')):?>
        <div class="subservice-descr__time-text">
           <?php echo carbon_get_the_post_meta('verb_subserice_descr_time');?>
        </div>
      <?php endif;?>
      </div>
      <div class="subservice-descr__content">
        <div class="subservice-descr__content-title"><?php echo carbon_get_the_post_meta('verb_subserice_descr_title');?></div>
        <div class="subservice-descr__content-text">
          <?php echo carbon_get_the_post_meta('verb_subserice_descr_textt');?>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>


<?php if(carbon_get_the_post_meta('verb_subserice_result_adv_is_show')):?>
  <section class="result-advant result-advant-1 section-white">
    <div class="leaf-25"></div>
    <div class="leaf-26"></div>
    <div class="leaf-27"></div>
    <?php if(carbon_get_the_post_meta('verb_subserice_result_adv_check')):?>
          <h2 class="section-title"><?php echo carbon_get_the_post_meta('verb_subserice_result_adv_title_1');?></h2>
    <?php endif;?>
	
	<?php if (!empty(carbon_get_the_post_meta('verb_subserice_result_adv_text_top'))):?>
		<div class = "result_adv_text_under result_adv_text_top text_full zag_center uni_text">
			<div class="container" style = "display: block;">
				<?php echo carbon_get_the_post_meta('verb_subserice_result_adv_text_top');?>
			</div>
		</div>
	<?php endif; ?>
	
	<?php if(carbon_get_the_post_meta('verb_subserice_result_adv_show_stlb') == false):?>
	<div class="container">
      
      <div class="service-list">
        <?php if(empty(carbon_get_the_post_meta('verb_subserice_result_adv_check'))):?>
        <h3 class="service-list__title service-list__title_big_icon"><?php echo carbon_get_the_post_meta('verb_subserice_result_adv_title_1');?></h3>
        <?php endif;?>
        <?php 
          $arr_col_1 = carbon_get_the_post_meta('verb_subserice_result_adv_col_1');
		  $arr_col_2 = carbon_get_the_post_meta('verb_subserice_result_adv_col_2');
		  
		  
		  
		  if (count($arr_col_1) > count($arr_col_2))
		  {
			$linebl_1 = "col_set_line_right";
			$linebl_2 = "";
		  } else {
			$linebl_1 = "";
			$linebl_2 = "col_set_line_left";
		  }
          if($arr_col_1):
        ?>
        <ul class="ul-clean <?php echo $linebl_1;?>">
          <?php foreach($arr_col_1 as $item):?>
          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo wp_get_attachment_image_src($item['verb_subserice_result_adv_col_1_img'], 'full')[0]?>);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title"><?php echo $item['verb_subserice_result_adv_col_1_title']?></div>
              <div class="service-list__item-text">
                <?php echo $item['verb_subserice_result_adv_col_1_text']?>
              </div>
            </div>
          </li>
          <?php endforeach;?>
        </ul>
        <?php endif;?>
      </div>
      <div class="service-list">
        <?php if(empty(carbon_get_the_post_meta('verb_subserice_result_adv_check'))):?>
        <h3 class="service-list__title service-list__title_big_icon"><?php echo carbon_get_the_post_meta('verb_subserice_result_adv_title_2');?></h3>
        <?php endif;?>
        <?php 
          
          if($arr_col_2):
        ?>
        <ul class="ul-clean  <?php echo $linebl_2;?>">
          <?php foreach($arr_col_2 as $item):?>
          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo wp_get_attachment_image_src($item['verb_subserice_result_adv_col_2_img'], 'full')[0]?>);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title"><?php echo $item['verb_subserice_result_adv_col_2_title']?></div>
              <div class="service-list__item-text">
                
                <?php echo $item['verb_subserice_result_adv_col_2_text']?>
              </div>
            </div>
          </li>
          <?php endforeach;?>
        </ul>
        <?php endif;?>
      </div>
	  
	  
    </div>
	
	<?php endif; ?>
	
	<?php if (!empty(carbon_get_the_post_meta('verb_subserice_result_adv_text_under'))):?>
		<div class = "result_adv_text_under text_full zag_center uni_text">
			<div class="container" style = "display: block;">
				<?php echo carbon_get_the_post_meta('verb_subserice_result_adv_text_under');?>
			</div>
		</div>
	<?php endif; ?>
	
  </section>
<?php endif;?>
<?php if(carbon_get_the_post_meta('verb_subserice_price_is_show')):?>
  <section class="subservice-price section-white">
    <div class="leaf-28"></div>
    <div class="leaf-29"></div>
    <div class="container">
      <h2 class="section-title"><?php echo carbon_get_the_post_meta('verb_subserice_price_title');?></h2>
      <?php echo carbon_get_the_post_meta('verb_subserice_price_table');?>
    </div>
  </section>
<?php endif;?>
<?php if(!empty(carbon_get_the_post_meta('verb_subserice_action_is_show'))):?>
	<?php get_template_part('template-parts/summer');?>
<?php else:?>

<?php 
	//$noshovh2 = true; get_template_part('template-parts/header', 'actions');
	$noshovh2 = true; include('header-actions.php');
?>
<?php endif;?>

<!-- Виды услуг -->
<?php if(carbon_get_the_post_meta('verb_subserice_vidi_uslug_is_show')):
$arr_col_1 = carbon_get_the_post_meta('verb_subserice_vidi_uslug_col');
?>
<section>
    <?php if(!empty(carbon_get_the_post_meta('verb_subserice_vidi_uslug_title'))):?>
          <h2 class="section-title"><?php echo carbon_get_the_post_meta('verb_subserice_vidi_uslug_title');?></h2>
    <?php endif;?>

      <div class = "container container-vidi">
		  <div class="service-list service-list-onecoll">
			<ul class="ul-clean">
			  <?php foreach($arr_col_1 as $item):?>
			  <li class="service-list__item">
				<div class="service-list__item-icon" style="background-image: url(<?php echo wp_get_attachment_image_src($item['verb_subserice_vidi_uslug_col_img'], 'full')[0]?>);"></div>
				<div class="service-list__item-content">
				  <div class="service-list__item-title"><?php echo $item['verb_subserice_vidi_uslug_col_title']?></div>
				  <div class="service-list__item-text">
					<?php echo $item['verb_subserice_vidi_uslug_col_text']?>
				  </div>
				</div>
			  </li>
			  <?php endforeach;?>
			</ul>
		
		  </div>
      </div>
  	<div class="btn-wrap">
		<a href="#" class="button-green popup-content" data-formid="Запись на <?php the_title();?>" data-mailmsg="Запись на <?php the_title();?>">Записаться на процедуру</a>
  	</div>
</section>
<?php endif;?>


<!-- До и после -->
<?php if(carbon_get_the_post_meta('verb_subserice_after_before_is_show')):?>
  <section class="before-after">
    <div class="container">
      <h2 class="section-title">До и после</h2>
      <?php $arr_before = carbon_get_the_post_meta('verb_complex_after_before');?>
      <?php if($arr_before):?>
      <div class="before-after-wrapper">
        <?php foreach($arr_before as $before):?>
        <!--<div class="before-after-wrapper-slide" style="background-image: url(<?php echo wp_get_attachment_image_src($before['verb_complex_after_before_img'], 'full')[0];?>);"></div>-->
		<div class = "before-after-img-wraper">
			<img class="b-lazy1"
         src="<?php echo wp_get_attachment_image_src($before['verb_complex_after_before_img'], 'full')[0];?>" alt="<?php echo $before['verb_complex_after_before_text']?>" title="<?php echo $before['verb_complex_after_before_text']?>"/>
		</div>
	  <?php endforeach;?>
      </div>
    <?php endif;?>
    </div>
  </section>
<?php endif;?>

  
<?php if(!carbon_get_the_post_meta('subserice_test_position')):?>
	<?php if(carbon_get_the_post_meta('verb_subserice_test_is_show')):?>
			<?php include('subservice-test.php');?>
	<?php endif;?>
<?php endif;?>


<?php if(carbon_get_the_post_meta('verb_subserice_nazn_pp_is_show')):?>
  <section class="result-advant result-advant-2 section-white">
    <div class="leaf-22"></div>
    <div class="leaf-23"></div>
    <div class="leaf-24"></div>
    
        <?php 
          $arr_col_1 = carbon_get_the_post_meta('verb_subserice_nazn_pp_col_1');
		  $arr_col_2 = carbon_get_the_post_meta('verb_subserice_nazn_pp_col_2');
		  
		  $ul_min = '';
      if(!empty(carbon_get_the_post_meta('verb_subserice_nazn_pp_is_show_title'))) {
          $ul_min = carbon_get_the_post_meta('verb_subserice_nazn_pp_style');
      }
		  
		  if (count($arr_col_1) > count($arr_col_2))
		  {
			$linebl_1 = "col_set_line_right";
			$linebl_2 = "";
		  } else {
			$linebl_1 = "";
			$linebl_2 = "col_set_line_left";
		  }
          //if($arr_col_1):
        ?>
	
	<h2 class="section-title">
	<?php 
		$tmptext = carbon_get_the_post_meta('verb_subserice_nazn_pp_title_1');
			echo empty($tmptext)?get_the_title():$tmptext;
		?>
	</h2>
    <div class="container <?php echo $ul_min?>">
      <div class="service-list">
        
        <h3 class="service-list__title"><?php  $prm1 = carbon_get_the_post_meta('verb_subserice_nazn_pp_title_cl_1'); echo (empty($prm1))?"Назначения":$prm1; ?></h3>
      
        <ul class="ul-clean <?php echo $linebl_1;?>">
          <?php if($arr_col_1) { ?>
			<?php foreach($arr_col_1 as $item) { ?>
			  <li class="service-list__item service-list__item_smile">
				<div class="service-list__item-icon service-list__item-icon-smile" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icon_2.svg);"></div>
				<div class="service-list__item-content">
				  <?php if(empty(carbon_get_the_post_meta('verb_subserice_nazn_pp_is_show_title'))):?>
				  <div class="service-list__item-title"><?php echo $item['verb_subserice_nazn_pp_col_1_title']?></div>
				  <?php endif;?>
				  <div class="service-list__item-text">
					<?php echo $item['verb_subserice_nazn_pp_col_1_text']?>
				  </div>
				</div>
			  </li> 
			<?php }?>	
		  <?php }?>	
        </ul>
      </div>
      <div class="service-list">
        
        <h3 class="service-list__title"><?php  $prm2 = carbon_get_the_post_meta('verb_subserice_nazn_pp_title_cl_2'); echo (empty($prm2))?"Противопоказания":$prm2; ?></h3>
      
        <ul class="ul-clean <?php echo $linebl_2;?>">
          <?php if($arr_col_2) { ?>
			<?php foreach($arr_col_2 as $item) { ?>
				  <li class="service-list__item service-list__item_smile">
					<div class="service-list__item-icon service-list__item-icon-smile" style="background-image: url(<?php echo get_template_directory_uri();?>/img/cancel-1.svg);"></div>
					<div class="service-list__item-content">
					  <?php if(empty(carbon_get_the_post_meta('verb_subserice_nazn_pp_is_show_title'))):?>
						<div class="service-list__item-title"><?php echo $item['verb_subserice_nazn_pp_col_2_title']?></div>
					  <?php endif;?>
					  <div class="service-list__item-text">
						<?php echo $item['verb_subserice_nazn_pp_col_2_text']?>
					  </div>
					</div>
				  </li>
		  	<?php }?>	
		  <?php }?>	
        </ul>
      </div>
    </div>
	
	<?php if (!empty(carbon_get_the_post_meta('verb_subserice_nazn_pp_nppdn'))):?>
		<div class = "result_adv_text_under text_full zag_center">
			<div class="container" style = "display: block;">
				<h2><?php echo carbon_get_the_post_meta('verb_subserice_nazn_pp_nppdn');?></h2>
			</div>
		</div>
	<?php endif; ?>
	
	    <div class="btn-wrap btn-wrap-service">
    <a href="#" class="button-green popup-content" data-formid="Запись на процедуру <?php the_title();?>" data-mailmsg="Запись на процедуру <?php the_title();?>">Записаться на процедуру</a>
  </div>
	
  </section>
<?php endif;?>  
 
<!-- Назначения или противопоказания -->
  
  <?php if(carbon_get_the_post_meta('verb_subserice_nazn_only_is_show')):?>
  <section class="result-advant result-advant-2 section-white">
    <div class="leaf-22"></div>
    <div class="leaf-23"></div>
    <div class="leaf-24"></div>
    
        <?php 
          $arr_col_1 = carbon_get_the_post_meta('verb_subserice_nazn_only_col_1');
		  $arr_col_2 = carbon_get_the_post_meta('verb_subserice_nazn_only_col_2');
		  
		
		  
		  if (count($arr_col_1) > count($arr_col_2))
		  {
			$linebl_1 = "col_set_line_right";
			$linebl_2 = "";
		  } else {
			$linebl_1 = "";
			$linebl_2 = "col_set_line_left";
		  }
          //if($arr_col_1):
        ?>
	
	<h2 class="section-title">
			<?php 
				$tmptext = carbon_get_the_post_meta('verb_subserice_nazn_only_title');
					echo empty($tmptext)?get_the_title():$tmptext;
			?>
	</h2>
    <div class="container <?php echo $ul_min?>">
      <div class="service-list">
        
        <ul class="ul-clean <?php echo $linebl_1;?>">
          <?php if($arr_col_1) { ?>
			<?php foreach($arr_col_1 as $item) { ?>
			  <li class="service-list__item service-list__item_smile">
			  
				<?php 
					$risunok = "icon_2.svg";
					if ($item['verb_subserice_nazn_only_col_1_znak'] === "pp") $risunok = "cancel-1.svg";
					
				?>
			  
				<div class="service-list__item-icon service-list__item-icon-smile" style="background-image: url(<?php echo get_template_directory_uri();?>/img/<?php echo $risunok; ?>);"></div>
				<div class="service-list__item-content">
				  
				  <div class="service-list__item-title"><?php echo $item['verb_subserice_nazn_only_col_1_title']?></div>
			
				  <div class="service-list__item-text">
					<?php echo $item['verb_subserice_nazn_only_col_1_text']?>
				  </div>
				</div>
			  </li> 
			<?php }?>	
		  <?php }?>	
        </ul>
      </div>
      <div class="service-list">
        
        <ul class="ul-clean <?php echo $linebl_2;?>">
          <?php if($arr_col_2) { ?>
			<?php foreach($arr_col_2 as $item) { ?>
				  <li class="service-list__item service-list__item_smile">
					
					<?php 
						$risunok = "icon_2.svg";
						if ($item['verb_subserice_nazn_only_col_2_znak'] === "pp") $risunok = "cancel-1.svg";
					?>
					
					<div class="service-list__item-icon service-list__item-icon-smile" style="background-image: url(<?php echo get_template_directory_uri();?>/img/<?php echo $risunok; ?>);"></div>
					<div class="service-list__item-content">
					  
						<div class="service-list__item-title"><?php echo $item['verb_subserice_nazn_only_col_2_title']?></div>
					  
					  <div class="service-list__item-text">
						<?php echo $item['verb_subserice_nazn_only_col_2_text']?>
					  </div>
					</div>
				  </li>
		  	<?php }?>	
		  <?php }?>	
        </ul>
      </div>
    </div>
	
	<?php if (!empty(carbon_get_the_post_meta('verb_subserice_nazn_only_text_under'))):?>
		<div class = "result_adv_text_under text_full zag_center uni_text">
			<div class="container" style = "display: block;">
				<?php echo carbon_get_the_post_meta('verb_subserice_nazn_only_text_under');?>
			</div>
		</div>
	<?php endif; ?>
	
	
  </section>
  
    <div class="btn-wrap btn-wrap-service">
    <a href="#" class="button-green popup-content" data-formid="Запись на процедуру <?php the_title();?>" data-mailmsg="Запись на процедуру <?php the_title();?>">Записаться на процедуру</a>
  </div>
<?php endif;?> 
 
 <?php if(carbon_get_the_post_meta('subserice_test_position')):?>
	<?php if(carbon_get_the_post_meta('verb_subserice_test_is_show')):?>
			<?php include('subservice-test.php');?>
	<?php endif;?>
<?php endif;?>

 
 <!-- 
  <section class="result-advant result-advant-2">
    <div class="leaf-22"></div>
    <div class="leaf-23"></div>
    <div class="leaf-24"></div>
      <h2 class="section-title"><?php the_title();?></h2>
    <div class="container">
      <div class="service-list">
        <h3 class="service-list__title">Назначения</h3>
        <ul class="ul-clean">
          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icon_2.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Совершенно новый уход за кожей лица</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>

          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icon_2.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Без боли</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>

          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icon_2.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Совершенно новый уход за кожей лица</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>

          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icon_2.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Совершенно новый уход за кожей лица</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>

          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icon_2.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Совершенно новый уход за кожей лица</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="service-list">
        <h3 class="service-list__title">Противопоказания</h3>
        <ul class="ul-clean">
          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/cancel-1.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Совершенно новый уход за кожей лица</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>

          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/cancel-1.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Без боли</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>

          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/cancel-1.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Совершенно новый уход за кожей лица</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>

          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/cancel-1.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Совершенно новый уход за кожей лица</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>
          
          <li class="service-list__item">
            <div class="service-list__item-icon" style="background-image: url(<?php echo get_template_directory_uri();?>/img/cancel-1.svg);"></div>
            <div class="service-list__item-content">
              <div class="service-list__item-title">Совершенно новый уход за кожей лица</div>
              <div class="service-list__item-text">
                Наногель, расщепляясь на мелкие частицы, выталкивает из кожи все загрязнения.
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  
  -->
  

  <div class="subservice-reviews">
    <div class="leaf-20"></div>
    <div class="leaf-21"></div>
    <?php get_template_part('template-parts/reviews');?>
  </div>
  <?php if(carbon_get_the_post_meta('verb_subserice_video_is_show')):?>
    <section class="video-tour video-tour-no-wrap section-green">
      <div class="flower-1"></div>
      <div class="rose-2"></div>
      <div class="container">
        <h2 class="section-title"> 
			<?php 
				$tmptext = carbon_get_the_post_meta('verb_subserice_video_h2');
				echo empty($tmptext)?"Видео процедуры ".get_the_title():$tmptext;
			?>
		</h2>
      </div>
      <div class="container-video container-video-video">
        <?php echo apply_filters( 'the_content', carbon_get_the_post_meta('verb_subserice_video'));?>
      </div>
    </section>
  <?php endif;?>
    <?php get_template_part('template-parts/question-page');?>