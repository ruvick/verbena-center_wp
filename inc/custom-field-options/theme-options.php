<?php
if(!defined('ABSPATH')) {
    exit();
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;
// Container::make( 'theme_options', 'as_theme_options2', 'Настройки темы2' )
//   ->add_fields(array(
//     Field::make('image', 'asdfs', 'dasfasdfs')
//   ));
Container::make( 'theme_options', 'as_theme_options',  __( 'Theme Options' ) )
    ->add_tab(__( 'Главная' ), array(
      //Field::make( 'image', 'as_logo', 'Логотип')->set_width(30),
    ))
    ->add_tab('Отзывы', array(
      Field::make('complex', 'complex_review', 'Отзывы')
        ->add_fields(array(
          Field::make('image', 'complex_review_image', 'Фото')->set_width(30),
         
		 Field::make('text', 'complex_review_date', 'Дата отзыва')->set_width(30),
          Field::make('text', 'complex_review_name', 'Имя')
            ->set_width(30),
          Field::make('textarea', 'complex_review_text', 'Имя'),
        ))
    ))
    ->add_tab('Слайдер на главной', array(
      Field::make('complex', 'main_slider', 'Слайд')
        ->add_fields(array(
          Field::make('text', 'main_slider_title', 'Заголовок')
            ->set_width(50),
          Field::make('text', 'main_slider_text', 'Текст')
            ->set_width(50),
          Field::make('text', 'main_slider_link', 'Ссылка')
            ->set_width(50),
			
          Field::make('image', 'main_slider_img', 'Фото')->set_width(50),
        ))
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_phone', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон 2' ) )
          ->set_width(50),
    		Field::make( 'text', 'as_phone_ws', __( 'Телефон для WhatsApp' ) )
          ->set_width(50),  
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
        
        Field::make( 'text', 'as_tg_send', __( 'Telegram для отправки' ) )
          ->set_width(50),

        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_cpp', __( 'КПП' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) ) 
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'Инстаграм' ) )
          ->set_width(50),
        Field::make( 'text', 'as_whatsapp', __( 'whatsapp' ) )
          ->set_width(50),
		  
    		Field::make( 'text', 'as_grafik_bud', __( 'График (будние)' ) )
              ->set_width(50), 
    		
    		Field::make( 'text', 'as_grafik_uik', __( 'График (Выходные)' ) )
              ->set_width(50), 
    ) )
    ->add_tab('О нас', array(
      Field::make('text', 'as_about_main', 'Заголовок блока О нас'),
      Field::make('rich_text', 'as_about_text', 'Текст'),

    ))
	
    ->add_tab('Подготовка к консультации', array(
      Field::make('image', 'as_cons_image_1', 'Фото')->set_width(50),
      
	  Field::make('rich_text', 'as_cons_text_1', 'Текст')
        ->set_width(50),
      
	  Field::make('image', 'as_cons_image_2', 'Фото')->set_width(50),
     
	 Field::make('rich_text', 'as_cons_text_2', 'Текст')
        ->set_width(50),
		
      Field::make('image', 'as_cons_image_3', 'Фото')->set_width(50),
      
	  Field::make('rich_text', 'as_cons_text_3', 'Текст')
        ->set_width(50),
      Field::make('rich_text', 'as_cons_note', 'Текст'),

    ))
    ->add_tab('Преимущества', array(
      Field::make('image', 'as_adv__img_1', 'Фото')->set_width(50),
     
	 Field::make('text', 'as_adv_title_1', 'Заголовок')
        ->set_width(50),
      Field::make('image', 'as_adv__img_2', 'Фото')->set_width(50),
	  
      Field::make('text', 'as_adv_title_2', 'Заголовок')
        ->set_width(50),
      
	  Field::make('image', 'as_adv__img_3', 'Фото')->set_width(50),
      
	  Field::make('text', 'as_adv_title_3', 'Заголовок')
        ->set_width(50),
      
	  Field::make('image', 'as_adv__img_4', 'Фото')->set_width(50),
	  
      Field::make('text', 'as_adv_title_4', 'Заголовок')
        ->set_width(50),
      
	  Field::make('image', 'as_adv__img_5', 'Фото')->set_width(50),
      
	  Field::make('text', 'as_adv_title_5', 'Заголовок')
        ->set_width(50),
      
	  Field::make('image', 'as_adv__img_6', 'Фото')->set_width(50),
      
	  Field::make('text', 'as_adv_title_6', 'Заголовок')
        ->set_width(50),
    ));


Container::make('post_meta', 'verb_position', 'Дополнительные поля')
  ->show_on_template('page-position.php')
  ->add_fields(array(
    Field::make('text', 'verb_position_person', 'Должность'),
    Field::make('text', 'verb_position_excerpt', 'Отрывок'),
  ));
Container::make('post_meta', 'verb_position', 'Дополнительные поля')
  ->show_on_template('page-position.php')
  ->add_fields(array(
    Field::make('text', 'verb_position_person', 'Должность'),
    Field::make('text', 'verb_position_excerpt', 'Отрывок'),
  ));
Container::make('post_meta', 'verb_subserice', 'Дополнительные поля')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('text', 'subserice_subtitle', 'Подзаголовок на баннере'),
    Field::make('image', 'subserice_subimage', 'Фото'),
    Field::make('checkbox', 'subserice_test_position', 'Тест под назначениями и противопоказаниями'),
  ));
Container::make('post_meta', 'verb_subserice', 'Преимущества')
  ->show_on_template(array('page-about.php', 'page-loyalityi.php'))
  ->add_fields(array(
    Field::make('image', 'as_adv__img_1', 'Фото')
      ->set_width(50),
    Field::make('text', 'as_adv_title_1', 'Заголовок')
      ->set_width(50),
    Field::make('image', 'as_adv__img_2', 'Фото')
      ->set_width(50),
    Field::make('text', 'as_adv_title_2', 'Заголовок')
      ->set_width(50),
    Field::make('image', 'as_adv__img_3', 'Фото')
      ->set_width(50),
    Field::make('text', 'as_adv_title_3', 'Заголовок')
      ->set_width(50),
    Field::make('image', 'as_adv__img_4', 'Фото')
      ->set_width(50),
    Field::make('text', 'as_adv_title_4', 'Заголовок')
      ->set_width(50),
    Field::make('image', 'as_adv__img_5', 'Фото')
      ->set_width(50),
    Field::make('text', 'as_adv_title_5', 'Заголовок')
      ->set_width(50),
    Field::make('image', 'as_adv__img_6', 'Фото')
      ->set_width(50),
    Field::make('text', 'as_adv_title_6', 'Заголовок')
      ->set_width(50),
)); 
Container::make('post_meta', 'verb_subserice_descr', 'Описание процедуры под баннером')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_descr_is_showw', 'Отображать блок'),
    Field::make('text', 'verb_subserice_descr_title', 'Заголовок'),
    Field::make('textarea', 'verb_subserice_descr_textt', 'Текст')
      ->set_width(70),
    Field::make('image', 'verb_subserice_descr_image', 'Фото')
      ->set_width(30),
	Field::make('text', 'verb_subserice_descr_imgstyle', 'Дополнительный стиль картинки')
      ->set_width(50),  
    Field::make('text', 'verb_subserice_descr_time', 'Время процедуры')
      ->set_width(50),
    Field::make('checkbox', 'verb_subserice_descr_is_show', 'Отображать время процедуры')
      ->set_width(50),
  ));

Container::make('post_meta', 'verb_subserice_result_adv', 'Результаты и  преимущества')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_result_adv_is_show', 'Отображать блок'),
    Field::make('checkbox', 'verb_subserice_result_adv_show_stlb', 'НЕ отображать столбцы'),
	  Field::make('checkbox', 'verb_subserice_result_adv_check', 'Одинарный заголовок'),
    Field::make('text', 'verb_subserice_result_adv_title_1', 'Заголовок 1')
      ->set_width(50),
    Field::make('text', 'verb_subserice_result_adv_title_2', 'Заголовок 2')
      ->set_width(50),
    Field::make('complex', 'verb_subserice_result_adv_col_1', 'Левая колонка')
      ->set_width(50)
      ->add_fields(array(
        Field::make('image', 'verb_subserice_result_adv_col_1_img', 'Изображение')
          ->set_width(30),
        Field::make('text', 'verb_subserice_result_adv_col_1_title', 'Заголовок')
          ->set_width(30),
        Field::make('textarea', 'verb_subserice_result_adv_col_1_text', 'Текст'),
      )),
    Field::make('complex', 'verb_subserice_result_adv_col_2', 'Правая колонка')
      ->set_width(50)
      ->add_fields(array(
        Field::make('image', 'verb_subserice_result_adv_col_2_img', 'Изображение')
          ->set_width(30),
        Field::make('text', 'verb_subserice_result_adv_col_2_title', 'Заголовок')
          ->set_width(30),
        Field::make('textarea', 'verb_subserice_result_adv_col_2_text', 'Текст'),
      )),
	  
	Field::make('rich_text', 'verb_subserice_result_adv_text_top', 'Текст над блоком')
		  ->set_width(100),  
	Field::make('rich_text', 'verb_subserice_result_adv_text_under', 'Текст под блоком')
		  ->set_width(100),
  ));
  
  
 Container::make('post_meta', 'verb_subserice_result_adv', 'Результаты и  преимущества') 
  ->show_on_template('page-price.php')
  ->add_fields(array(
    
    Field::make('complex', 'price_all', 'Все цены клиники')
      ->set_width(100)
      ->add_fields(array(
        
        Field::make('text', 'price_all_title', 'Заголовок')
          ->set_width(100),
        Field::make('rich_text', 'price_all_table', 'Текст')
		  ->set_width(100),
      ))
  ));
  
Container::make('post_meta', 'verb_subserice_price', 'Стоимость процедуры')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_price_is_show', 'Отображать блок'),
    Field::make('text', 'verb_subserice_price_title', 'Заголовок'),
    Field::make('rich_text', 'verb_subserice_price_table', 'Цены'),
  ));

Container::make('post_meta', 'verb_subserice_actions', 'Акции')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_action_is_show', 'Отображать блок'),
    Field::make('text', 'verb_subserice_action_h', 'Заголовок'),
	  Field::make('rich_text', 'verb_subserice_action_text', 'Текст'),
  ));
  
Container::make('post_meta', 'verb_subserice_vidi_uslug', 'Виды услуг')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_vidi_uslug_is_show', 'Отображать блок'),
	 Field::make('text', 'verb_subserice_vidi_uslug_title', 'Заголовок'),
    Field::make('complex', 'verb_subserice_vidi_uslug_col', 'Левая колонка')
      ->set_width(50)
      ->add_fields(array(
        Field::make('image', 'verb_subserice_vidi_uslug_col_img', 'Изображение')
          ->set_width(30),
        Field::make('text', 'verb_subserice_vidi_uslug_col_title', 'Заголовок')
          ->set_width(30),
        Field::make('textarea', 'verb_subserice_vidi_uslug_col_text', 'Текст'),
      )),
  ));
  
  
Container::make('post_meta', 'verb_subserice_after_before', 'До и после')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_after_before_is_show', 'Отображать блок'),
    Field::make('complex', 'verb_complex_after_before')
      ->add_fields(array(
        Field::make('image', 'verb_complex_after_before_img', 'До и после')
          ->set_width(50),
        Field::make('text', 'verb_complex_after_before_text', 'Alt')
      )),
    // Field::make('image', 'verb_subserice_before', 'До')
    //   ->set_width(50),
    // Field::make('image', 'verb_subserice_after', 'После')
    //   ->set_width(50),
  ));

Container::make('post_meta', 'verb_subserice_test', 'Тест')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
	Field::make('checkbox', 'verb_subserice_test_is_show', 'Отображать блок'),
    Field::make('image', 'verb_subserice_test_img', 'Фото'),
    Field::make('text', 'verb_subserice_test_title', 'Заголовок на баннере'),
	  Field::make('text', 'verb_subserice_test_subtitle', 'Подзаголовок на баннере'),
    Field::make('checkbox', 'verb_subserice_test_imt_is_show', 'Тест на ИМТ'),
    Field::make('text', 'verb_subserice_test_test_link', 'Ссылка на тест'),
));

Container::make('post_meta', 'verb_subserice_video', 'Видео процедуры')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_video_is_show', 'Отображать блок'),
	  Field::make('text', 'verb_subserice_video_h2', 'Заголовок над видео'),
    Field::make('rich_text', 'verb_subserice_video', 'Видео 1')
      ->set_width(50),
  ));
  
  Container::make('post_meta', 'verb_subserice_nazn_pp', 'Назначение и Противопоказания')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_nazn_pp_is_show', 'Отображать блок'),
    Field::make('checkbox', 'verb_subserice_nazn_pp_is_show_title', 'Без заголовков'),
    Field::make('text', 'verb_subserice_nazn_pp_style', 'Стиль в списке'),
    Field::make('text', 'verb_subserice_nazn_pp_title_1', 'Заголовок'),
    Field::make('text', 'verb_subserice_nazn_pp_title_cl_1', 'Заголовок в 1й колонке')->set_width(50),
    Field::make('text', 'verb_subserice_nazn_pp_title_cl_2', 'Заголовок в 2й колонке')->set_width(50),
    
    Field::make('complex', 'verb_subserice_nazn_pp_col_1', 'Назначения')
      ->set_width(50)
      ->add_fields(array(
        Field::make('text', 'verb_subserice_nazn_pp_col_1_title', 'Заголовок')
          ->set_width(30),
        Field::make('textarea', 'verb_subserice_nazn_pp_col_1_text', 'Текст'),
      )),
    Field::make('complex', 'verb_subserice_nazn_pp_col_2', 'Противопоказания')
      ->set_width(50)
      ->add_fields(array(
        Field::make('text', 'verb_subserice_nazn_pp_col_2_title', 'Заголовок')
          ->set_width(30),
        Field::make('textarea', 'verb_subserice_nazn_pp_col_2_text', 'Текст'),
      )),
	  Field::make('text', 'verb_subserice_nazn_pp_nppdn', 'Напоминание о противопоказаниях')->set_width(50),
  ));
  
  Container::make('post_meta', 'verb_subserice_nazn_only', 'Или Назначения или Противопоказания')
  ->show_on_template('page-subserice.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_nazn_only_is_show', 'Отображать блок'),
    Field::make('text', 'verb_subserice_nazn_only_title', 'Заголовок'),
    
    Field::make('complex', 'verb_subserice_nazn_only_col_1', 'Назначения')
      ->set_width(50)
      ->add_fields(array(
        Field::make('select', 'verb_subserice_nazn_only_col_1_znak', 'Какой значе выводить')->add_options( array(
        'nazn' => 'Листок',
        'pp' => 'Крестик',
    	) )->set_width(30),
		 Field::make('text', 'verb_subserice_nazn_only_col_1_title', 'Заголовок')
		  ->set_width(30),
        Field::make('textarea', 'verb_subserice_nazn_only_col_1_text', 'Текст'),
      )),
	  
    Field::make('complex', 'verb_subserice_nazn_only_col_2', 'Противопоказания')
      ->set_width(50)
      ->add_fields(array(
        Field::make('select', 'verb_subserice_nazn_only_col_2_znak', 'Какой значе выводить')->add_options( array(
        'nazn' => 'Листок',
        'pp' => 'Крестик',
    	) )->set_width(30),
		  Field::make('text', 'verb_subserice_nazn_only_col_2_title', 'Заголовок')
          ->set_width(30),
        Field::make('textarea', 'verb_subserice_nazn_only_col_2_text', 'Текст'),
      )),
	  
	  Field::make('rich_text', 'verb_subserice_nazn_only_text_under', 'Текст под блоком')
		  ->set_width(100),
  ));

Container::make('post_meta', 'verb_news_feild', 'Дополнительные поля для новстей')
  ->show_on_template('single-novosti.php')
  ->add_fields(array(
		Field::make('text', 'verb_news_feild_top_zg', 'Верхний заголовок'),
		Field::make('text', 'verb_news_feild_razdel_url', 'Ссылка в раздел для кнопки'),
	));
  
Container::make('post_meta', 'verb_position', 'Дополнительные поля')
  ->show_on_template(array('page-health.php', 'page-dnk.php'))
  ->add_fields(array(
    Field::make('image', 'verb_health_img', 'Фото'),
    Field::make('text', 'verb_health_subtitle', 'Подзаголовок на баннере'),
    Field::make('checkbox', 'verb_subserice_test_imt_is_show', 'Тест на ИМТ'),
    Field::make('text', 'verb_subserice_dnk_test_link', 'Ссылка на тест'),
  ));
Container::make('post_meta', 'verb_subserice_health', 'Под баннером')
  ->show_on_template('page-health.php')
  ->add_fields(array(
    Field::make('checkbox', 'verb_subserice_health_is_show', 'Отображать блок'),
    Field::make('text', 'verb_subserice_health_title', 'Заголовок'),
    Field::make('rich_text', 'verb_subserice_health_text', 'Текст'),
    Field::make('image', 'verb_subserice_health_img', 'Фото'),
  ));
Container::make('post_meta', 'verb_subserice_nutricevt_about', 'Для чего нужны ')
  ->show_on_template('page-health.php')
  ->add_fields(array(
    Field::make('text', 'verb_subserice_nutricevt_about_title', 'Заголовок'),
    Field::make('rich_text', 'verb_subserice_nutricevt_about_text', 'Текст'),
  ));
Container::make('post_meta', 'verb_subserice_nutricevt_cons', 'Консультация ')
  ->show_on_template(array('page-health.php', 'page-nutr.php'))
  ->add_fields(array(
    Field::make('text', 'verb_subserice_nutricevt_cons_title', 'Заголовок'),
    Field::make('rich_text', 'verb_subserice_nutricevt_cons_table', 'Текст'),
  ));
Container::make('post_meta', 'verb_subserice_nutricevt_cons', 'Консультация ')
  ->show_on_template(array('page-nutr.php'))
  ->add_fields(array(
    Field::make('text', 'verb_subserice_nutr_cons_title', 'Заголовок'),
    Field::make('rich_text', 'verb_subserice_nutr_cons_table', 'Текст'),
  ));
Container::make('post_meta', 'verb_subserice_nutr', 'Баннер')
  ->show_on_template('page-nutr.php')
  ->add_fields(array(
    Field::make('text', 'verb_subserice_nutr_title', 'Заголовок'),
    Field::make('rich_text', 'verb_subserice_nutr_text', 'Текст'),
    Field::make('image', 'verb_subserice_nutr_img', 'Фото'),
    // Field::make('text', 'verb_subserice_test_link', 'Ссылка на тест'),verb_subserice_dnk_test_link
    Field::make('text', 'verb_subserice_dnk_test_link', 'Ссылка на тест'),
  ));
Container::make('post_meta', 'verb_subserice_nutr', 'Под баннером')
  ->show_on_template(array('page-nutr.php', 'page-dnk.php'))
  ->add_fields(array(
    Field::make('text', 'verb_subserice_nutr_title_1', 'Заголовок'),
    Field::make('rich_text', 'verb_subserice_nutr_text_1', 'Текст'),
    Field::make('image', 'verb_subserice_nutr_img_1', 'Фото'),
  ));
Container::make('post_meta', 'verb_subserice_nutricevt_about', 'Для чего нужны ')
  ->show_on_template('page-nutr.php')
  ->add_fields(array(
    Field::make('text', 'verb_subserice_nutr_about_title', 'Заголовок'),
    Field::make('rich_text', 'verb_subserice_nutr_about_text', 'Текcт'),
  ));
Container::make('post_meta', 'verb_nutricitolog', 'Нутрицитолог')
  ->show_on_template('page-nutr.php')
  ->add_fields(array(
    Field::make('text', 'verb_nutricitolog_title', 'Заголовок'),
    Field::make('rich_text', 'verb_nutricitolog_text', 'Текcт'),
    Field::make('image', 'verb_nutricitolog_image', 'Фото'),
  ));
Container::make('post_meta', 'actions-item', 'Акции')
  ->show_on_template('page-actions.php')
  ->add_fields(array(
    Field::make('complex', 'complex_actions', 'Акции')
      ->add_fields(array(
        Field::make('text', 'actions_title', 'Заголовок')
          ->set_width(50),
        Field::make('text', 'actions_link', 'Ссылка на акцию')
          ->set_width(50),
        Field::make('image', 'actions_image', 'Фото'),
        Field::make('rich_text', 'actions_text'),
      )),
  ));
Container::make('post_meta', 'verb_nutricitolog', 'Баннер')
  ->show_on_template('page-dnk.php')
  ->add_fields(array(
    Field::make('text', 'dnk_subtitle', 'Подзаголовок'),
    Field::make('rich_text', 'dnk_header_text', 'Текcт'),
    Field::make('image', 'dnk_header_image', 'Фото'),
    Field::make('text', 'verb_subserice_dnk_test_link', 'Ссылка на тест'),
    Field::make('text', 'dnk_gen_code', 'Заголовок блока "Генетический код красоты..."'),
    Field::make('text', 'dnk_price_test', 'Заголовок блока "Стоимость генетического тестирования"'),
    Field::make('text', 'dnk_for', 'Заголовок блока "Для чего нужен генетический тест"'),

  ));
Container::make('post_meta', 'verb_dnk_beauty', 'Панель Beauty')
  ->show_on_template('page-dnk.php')
  ->add_fields(array(
    Field::make('rich_text', 'dnk_beauty', 'Текcт'),
  ));
Container::make('post_meta', 'verb_dnk_wellness', 'Панель Wellness')
  ->show_on_template('page-dnk.php')
  ->add_fields(array(
    Field::make('rich_text', 'dnk_wellness', 'Текcт'),
  ));
Container::make('post_meta', 'verb_dnk_price', 'Стоимость генетического тестирования')
  ->show_on_template('page-dnk.php')
  ->add_fields(array(
    Field::make('rich_text', 'dnk_price_table', 'Текcт'),
  ));
Container::make('post_meta', 'verb_dnk_test', 'Для чего нужен генетический тест')
  ->show_on_template('page-dnk.php')
  ->add_fields(array(
    Field::make('rich_text', 'dnk_test_text_1', 'Пункт 1'),
    Field::make('rich_text', 'dnk_test_text_2', 'Пункт 2'),
    Field::make('rich_text', 'dnk_test_text_3', 'Пункт 3'),
    Field::make('rich_text', 'dnk_test_text_4', 'Текст внизу'),
  ));
Container::make('post_meta', 'verb_dnk_video', 'Видео')
  ->show_on_template(array('page-dnk.php', 'page-nutr.php', 'page-health.php'))
  ->add_fields(array(
    Field::make('textarea', 'dnk_video', 'Код видео'),
  ));
Container::make('post_meta', 'verb_nutr_for', 'Показания')
  ->show_on_template(array('page-nutr.php'))
  ->add_fields(array(
    Field::make('textarea', 'nutr_for_1', 'Пункт 1'),
    Field::make('textarea', 'nutr_for_2', 'Пункт 2'),
    Field::make('textarea', 'nutr_for_3', 'Пункт 3'),
    Field::make('textarea', 'nutr_for_4', 'Пункт 4'),
    Field::make('textarea', 'nutr_for_5', 'Пункт 5'),
    Field::make('textarea', 'nutr_for_6', 'Пункт 6'),
    Field::make('textarea', 'nutr_for_7', 'Пункт 7'),
  ));

Container::make('post_meta', 'verb_faq_in_all_pages', 'Faq')
->show_on_post_type('page')
  ->add_fields(array(
      Field::make('complex', 'faq_in_all_pages', 'Вопрос ответ')
        ->add_fields(array(
          Field::make('text', 'faq_q', 'Вопрос')->set_width(50),
          Field::make('rich_text', 'faq_otv', 'Ответ')->set_width(50),
        ))
  ));