/*
 * Java-скрипты
 */

	/* toTop Button */
		$(function() { 
			$(window).scroll(function() { 
			if($(this).scrollTop() !== 0) { 
				$('#toTop').fadeIn(); 
					} else {	 
						$('#toTop').fadeOut(); 
					}	 
				}); 
				$('#toTop').click(function() { 
				$('body,html').animate({scrollTop:0},800); 
			}); 
		});
		
	/* btnOrderBottom Button */
		$(function() { 
			$(window).scroll(function() { 
				if($(this).scrollTop() !== 0) { 
					$('#btnOrderBottom').fadeIn(); 
				} else {	 
					$('#btnOrderBottom').fadeOut(); 
				}	 
			}); 
		});
	
	/*Fix menu */
	
	$(document).ready(function(){
	        var $menu = $("#main-menu-container");
	        $(window).scroll(function(){
	            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
	                $menu.removeClass("default").addClass("fixed");
	            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
	                $menu.removeClass("fixed").addClass("default");
			}
		});//scroll
	});
	
	/*scroll to anchor */
	$(document).ready(function() {
		$("a.scrolling-links").click(function () {
		  var elementClick = $(this).attr("href");
		  var destination = $(elementClick).offset().top-50;
		  $('html,body').animate( { scrollTop: destination }, 1100 );
		  return false;
		});
	});

	/* swiper slider */
	$(document).ready(function () {
    //initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
		// Optional parameters
			autoplay: {
			delay: 5000,
			},
		pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				bulletElement: 'span',
				bulletClass: 'swiper-pagination-bullet',
				bulletActiveClass: 'swiper-pagination-bullet-active',
				clickable: true
			},
		navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		mousewheel: {
			invert: true,
			},
		effect: 'fade',
		fadeEffect: {
			crossFade: true
			},
		coverflowEffect: {
			rotate: 30,
			slideShadows: false,
			},
		mousewheel: {
			forceToAxis: true,
		},
		allowTouchMove: false,
		loop: true
		})
	});

	$( function() {
		/**
		* работа с куками:
		* -------------------
		* куки нет -> визит
		* через msek показываем окно и пишем куку
		* кука живет exp дней
		* пока кука стоит - визиты продолжаются, но без показа окна
		* через exp дней кука удаляется
		* куки нет -> визит
		* ... повтор ...
		* 
		* -------------------
		* итого: окно показываем один раз в exp дней
		* 
		* msec и exp настраиваем ниже:
		*/
		const msec = 120000;	// задержка в мс
		const exp = 1;	// дни жизни куки
		let cookie = Cookies.get('colorsArtPopup');
		if(!cookie) {
			setTimeout( () => {
				$('#popup').modal('toggle');
				Cookies.set('colorsArtPopup', 1, { expires: exp });
			}, msec);
		}
		
		/*
			чтобы удалить куку: 
			- раскомментировать сторку ниже, 
			- обновить кэш браузера, 
			- закоментировать строку
		*/
		//Cookies.remove('colorsArtPopup');
	});
	
	  /*$( function() {
		$( "#slider-range" ).slider({
		  range: true,
		  min: 0,
		  max: 500,
		  values: [ 75, 300 ],
		  slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		  }
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		  " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	  } );*/