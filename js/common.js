/*
jQuery(window).scroll(function ($) {
     var scrolled = jQuery(window).scrollTop();
	 

	
	var t1 = parseInt(jQuery('.leaf-1').css('top'),10);
	var t2 = parseInt(jQuery('.leaf-2').css('top'),10);
	
	t1+=scrolled;
	t2+=scrolled;
	
	jQuery('.leaf-1').css('top',-(scrolled*0.2)+'px');
	jQuery('.leaf-2').css('top',-(scrolled*0.2)+'px');
	console.log(scrolled);
});
*/


jQuery(document).ready(function ($) {
  
  
  jQuery(".header").scrollToFixed({
    marginTop: -3
  });
  setTimeout(function() {
      $("#price-page-modal").arcticmodal();
      
    }, 15 * 1000);
  
  $(".main-slider").slick({
    dots: true,
	adaptiveHeight: true,
	autoplay: true,
   autoplaySpeed: 6000,
  });
  
  $(".reviews-slider").slick({
    slidesToShow: 3,
	adaptiveHeight: true,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  $(".before-after-wrapper").slick({
   adaptiveHeight: true,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
    dots: true,
  });
  //  var width_video = $('.container-video').width;
  if ($(window).width() < 1150) {
    $('.header-search').appendTo('.header .menu');
  }
  if ($(window).width() < 950) {
    var width_video = $(window).width();
    console.log(width_video);
    var height_video = width_video * .56;
    $(".container-video iframe").attr({
      'width': width_video,
      'height': height_video
    });
  } else {
    var width_video = 910;
    console.log(width_video);
    var height_video = width_video * .56;
    $(".container-video iframe").attr({
      'width': width_video,
      'height': height_video
    });
  }

  $('.hamburger').click(function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.header .menu').slideUp();
      $('.header .sub-menu').not('.multilevel-menu > .sub-menu').hide();
    } else {
      $(this).addClass('active');
      $('.header .menu').slideDown();
      // $(".multilevel-menu .sub-menu").show();
    }
  });

  $('.header-search').click(function() {
    $("#search-modal").show();
  });

  $('.close-modal').click(function() {
    $("#search-modal").hide();
  });

  $('.sub-menu').parent('li').parent('.sub-menu').parent('.menu-item-has-children').addClass('multilevel-menu');
  $(".price-item-block__name").click(function() {
    $(this).next().slideToggle();
  });
  if($(window).width() < 1150) {
    $('.sub-menu').hide();
    $(".menu-item-has-children > a").click(function(e) {
      e.preventDefault();
      if($(this).next().is(":hidden")) {
        $(this).next().slideDown();
      } else {
        $(this).next().slideUp();
      }
    });
    
    $(".multilevel-menu a").click(function() {
      $(this).next().find('.sub-menu').css('display', 'block');
    });
  }
  if($(window).width() < 1150) {
  }
  var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  $(".popup-content").click(function(e) {
    e.preventDefault();
    var formid = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");
    $("#order-modal .uniSendBtn").attr({'data-formid': formid, 'data-mailmsg': message});
    $("#order-modal").arcticmodal();
  });
  
  
  $(".popup-zvonok").click(function(e) {
    e.preventDefault();
    var formid = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");
    $("#zvonok-modal .uniSendBtn").attr({'data-formid': formid, 'data-mailmsg': message});
    $("#zvonok-modal").arcticmodal();
  });

  $(".popup-review").click(function(e) {
    e.preventDefault();
    var formid = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");
    var person = $(this).data('person');
    $(".review-about").text(person);
    
	if ($(this).hasClass("popup-q")) {
		$("#review-modal h2").html("Задать вопрос");
		$("#review-modal textarea").attr("placeholder","Ваш вопрос");
		$("#review-modal .uniSendBtn-review").attr({'data-q': 1});
	}
	
	$("#review-modal .uniSendBtn-review").attr({'data-formid': formid, 'data-mailmsg': message});
    $("#review-modal").arcticmodal();
  });

  

  jQuery(".uniSendBtn-review").click(function(e){ 
    e.preventDefault();
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var phone = $(this).siblings('input[type=tel]').val();
      
      var policy = $(this).siblings('.noteInWin');
      policy = $(policy).find('input[type=checkbox]').is(':checked');

      var review = $(this).siblings('textarea[name=review]').val();
      
	  var qv = jQuery(this).data("q");

      if (!policy)
      alert("Необходимо согласие с политикой конфиденциальности и обработки персональных данных!")
      else
      if ((phone == "")||(phone.indexOf("_")>0)) {
        $(this).siblings('input[type=tel]').css("background-color","#ff91a4")
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send_review',    
            nonce: allAjax.nonce,
            msg: message,
            name: jQuery(this).siblings('input[name=name]').val(),
            tel: phone,
            review: review,
			qvm:qv
		  }
          
        );
        
        
        jqXHR.done(function (responce) {
           console.log(responce);
		  ym(47540161, 'reachGoal', 'send_ok');
			$("#review-modal").arcticmodal('close');
          if (qv != "1")
		  {
			  jQuery('#messgeModal #lineMsg').html("Благодарим Вас за оставленный отзыв! Мы ценим Ваше мнение.");
			  ym(47540161, 'reachGoal', 'Otziv'); ga('send', 'event', 'Zayavki', 'Otziv_G');
		  }
			else 
			{
				ym(47540161, 'reachGoal', 'Vopros'); ga('send', 'event', 'Zayavki', 'Otziv_G');
				jQuery('#messgeModal #lineMsg').html("Наши специалисты ответять на Ваш вопрос в ближайшее время.");	
			}  
		  jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });

  jQuery(".uniSendBtn").click(function(e){ 
    e.preventDefault();
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var phone = $(this).siblings('input[type=tel]').val();
      var policy = $(this).siblings('.noteInWin');
      policy = $(policy).find('input[type=checkbox]').is(':checked');
      
	  var elementTel = $(this).siblings('input[type=tel]');
	  var elementName = $(this).siblings('input[name=name]');
	  
    console.log(policy)

    if (!policy)
      alert("Необходимо согласие с политикой конфиденциальности и обработки персональных данных!")
    else

      if ((phone == "")||(phone.indexOf("_")>0)) {
        $(this).siblings('input[type=tel]').css("background-color","#ff91a4")
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send',    
            nonce: allAjax.nonce,
            msg: message,
            name: jQuery(this).siblings('input[name=name]').val(),
            tel: phone
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          console.log(responce);
			ym(47540161, 'reachGoal', 'send_ok');
		  if (message.indexOf("звонка") >= 0) {
			
			if (jQuery('#zvonok-modal').is(':visible')) jQuery('#zvonok-modal').arcticmodal('close');
			jQuery(elementTel).val(""); jQuery(elementName).val("");
			  jQuery('#messgeModal #lineMsg').html("Мы перезвоним Вам в ближайшее время.");
		  }
		else
		{
			if (jQuery('#order-modal').is(':visible'))  jQuery('#order-modal').arcticmodal('close');
			jQuery(elementTel).val(""); jQuery(elementName).val("");
			jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
		}      
      $.arcticmodal('close');   
		 jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });




  $(".test-link").click(function(e) {
    e.preventDefault();
    $("#test-modal").arcticmodal();
  });
  $("#test-modal .popup-content").click(function(e) {
    $("#test-modal").arcticmodal('close');
  });
  $(".test-form__submit").click(function(e) {
    e.preventDefault();
    var is_full = false;
    $(".test-modal__result-number").html('Ваш ИМТ: ');
    $(".test-modal__result-descr").html();
    var width = $("#test-modal input[name=width]").val();
    var weight = $("#test-modal input[name=weight]").val();
    var age = $("#test-modal input[name=age]").val();
      if ((width == "")||(width.indexOf("_")>0)) {
        $("#test-modal input[name=width]").css("border-color","#ff91a4");
        $(".error-test-input-width").show();
        is_full = false;
        return;
      } else {

        $("#test-modal input[name=width]").css("border-color","gray");
        $(".error-test-input-width").hide();
        is_full = true;
      }

      if((weight == "")||(weight.indexOf("_")>0)){
        $("#test-modal input[name=weight]").css("border-color","#ff91a4");
        $(".error-test-input-weight").show();
        is_full = false;
        return;
      } else {
        $("#test-modal input[name=weight]").css("border-color","gray");
        $(".error-test-input-weight").hide();
        is_full = true;
      }
      if((age == "")||(age.indexOf("_")>0)) {
        $("#test-modal input[name=age]").css("border-color","#ff91a4");
        $(".error-test-input-age").show();
        is_full = false;
        return;
      } else {
        $("#test-modal input[name=age]").css("border-color","gray");
        $(".error-test-input-age").hide();
        is_full = true;
      } 
      if(is_full) {
      var width_m = width / 100;
        var imt = weight / (width_m * width_m);
        imt = imt.toFixed(2);
        console.log(imt);
        $(".test-modal__test-descr").slideUp();
        $(".test-modal__result-number").show().append(imt);
        $('#test-modal .btn-wrap').show();
        if(imt <= 15.5) {
          $(".test-modal__result-descr").html(imt_1);
        } else if(imt > 15.5 && imt <= 17.4) {
          $(".test-modal__result-descr").html(imt_2);
        } else if(imt >= 17.5 && imt < 18.4) {
          $(".test-modal__result-descr").html(imt_3);
        } else if(imt >= 18.5 && imt < 24.9) {
          $(".test-modal__result-descr").html(imt_4);
        } else if(imt >= 25.0 && imt < 29.9) {
          $(".test-modal__result-descr").html(imt_5);
        } else if(imt >= 30.0 && imt < 34.9) {
          $(".test-modal__result-descr").html(imt_6);
        } else if(imt >= 35.0 && imt < 39.9) {
          $(".test-modal__result-descr").html(imt_7);
        } else if(imt >= 40.0) {
          $(".test-modal__result-descr").html(imt_8);
        }
      }
  });

  var imt_1 = '<strong>Недостаточная масса тела</strong>, тяжелая степень гипотрофии</br> Необходима консультация специалиста';
  var imt_2 = '<strong>Недостаточная масса тела</strong>, средняя степень гипотрофии</br> Необходимо увеличить калорийность   рациона питания и увеличить массу тела до нормы';
  var imt_3 = '<strong>Недостаточная масса тела</strong>, легкая степень гипотрофии</br> Необходимо наладить свой рацион питания и увеличить массу тела до нормы';
  var imt_4 = '<strong>Нормальная масса тела</strong></br> Ваш вес в норме, поздравляем, так держать!';
  var imt_5 = '<strong>Избыточная масса тела</strong></br> У вас избыточная масса тела, необходимо сбросить вес';
  var imt_6 = '<strong>Ожирение 1 степени</strong></br> Необходимо заняться своим здоровьем и сбросить вес, под наблюдением специалиста';
  var imt_7 = '<strong>Ожирение 2 степени</strong></br> Необходимо заняться своим здоровьем и сбросить вес, под наблюдением специалиста';
  var imt_8 = '<strong>Ожирение 3 степени</strong></br> Необходимо заняться своим здоровьем и сбросить вес, под наблюдением специалиста';


  $(".test-input").onfocus = function() {
    $(this).css('border-color', 'gray');
    $(this).prev().hide();
  }

  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'albumLabel': ''
  });

  $(".blocks-gallery-item img").parent('a').attr("data-lightbox", 'cert');

  var bLazy = new Blazy();
});
