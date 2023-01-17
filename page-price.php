<?php 
/*
* Template Name: Цены
*/
get_header();

?>
<div style="display: none;">
    <div class="box-modal" id="price-page-modal">
        <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close-button.svg"></div>
        <div class = "modalline" id = "lineIcon">
          <div class="box-modal-bg box-modal-bg-sale"></div>
          <form  class="form_in_page" action="">
            <input type="text" name="name" placeholder="Имя">
            <input type="tel" name="tel" placeholder="Телефон">
			
			<?php get_template_part('template-parts/form-policy-element'); ?>
			
			<a href="#" class="uniSendBtn button-green" data-mailmsg="Запрос на скидку" onclick="ym(47540161, 'reachGoal', 'Zakaz_zvonka'); ga('send', 'event', 'Zayavki', 'Zakaz_zvonka_G'); return true;">Получить скидку</a>
          </form>
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
<div class="container">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}?>
</div>

<?php //get_template_part('template-parts/header', 'actions');?>
	<section class = "green-prtg">
		<div class="container ">
			<h1 class="page-title"><?php  the_title();?></h1>
		</div>
	</section>
<div class="container">
	<!--<h2 class="section-title">Прайс клиники</h2>-->
	
	<?php 
          $prices = carbon_get_the_post_meta('price_all');
		  if($prices) {
			foreach($prices as $item) {
	?>
				<div class="price-item-block">
					<div class="price-item-block__name"><?php echo $item['price_all_title']?></div>
					<div class="price-item-block__table">
						<?php echo apply_filters( 'the_content', $item['price_all_table']);?>
					</div>
				</div>
	
	<?php
			}
		  }
	?>
	
	

	<!--
	<div class="price-item-block">
		<div class="price-item-block__name">Эстетическая косметология</div>
		<div class="price-item-block__table">
			<table class="price-table">
		        <thead>
		          <tr>
		            <td>Наименование</td>
		            <td>Время процедуры, мин.</td>
		            <td>Цена, ₽</td>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>Карбоновый пилинг</td>
		            <td class="tac">30</td>
		            <td class="tac">7 500</td>
		          </tr>
		          <tr>
		            <td>Мягкий карбоновый пилинг</td>
		            <td class="tac">30</td>
		            <td class="tac">5 000</td>
		          </tr>
		        </tbody>
		      </table>
		</div>
	</div>
	<div class="price-item-block">
		<div class="price-item-block__name">Карбоновый пиллинг</div>
		<div class="price-item-block__table">
			<table class="price-table">
		        <thead>
		          <tr>
		            <td>Наименование</td>
		            <td>Время процедуры, мин.</td>
		            <td>Цена, ₽</td>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>Карбоновый пилинг</td>
		            <td class="tac">30</td>
		            <td class="tac">7 500</td>
		          </tr>
		          <tr>
		            <td>Мягкий карбоновый пилинг</td>
		            <td class="tac">30</td>
		            <td class="tac">5 000</td>
		          </tr>
		        </tbody>
		      </table>
		</div>
	</div>
	-->
</div>

<?php $noshovh2 = true;  include('template-parts/header-actions.php'); ?>

<?php get_template_part('template-parts/reviews');?>
<?php get_template_part('template-parts/videotur');?>
<?php
get_template_part('template-parts/question-page');
get_footer();