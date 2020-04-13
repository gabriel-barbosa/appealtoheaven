(function ($, root, undefined) {

	$(document).ready(function($) {
		if ($(window).width() > 768) {
			$(".horizontal-wrapper").on("mousewheel", function(e) {
				e.preventDefault();
				var delta = (parseInt(e.originalEvent.deltaY))*(-1);
				//console.log(delta)
				var scto = $(this).scrollLeft() - delta;
				$(this).scrollLeft(scto);
			});

			setTimeout(function(){
				var width = 0;
				var pageBuilderWidth = $('.horizontal-page_builder').outerWidth();
				var elementNum = $('.gallery-img').length;
				//console.log(elementNum)
					$('.gallery-img').each(function() {
							width += $(this).outerWidth( true );
							//console.log(width)
					});
					$('.horizontal-content').css('width', width + pageBuilderWidth + (elementNum*15));
			}, 100);
		}

		/* SET COVER HEIGHT CORRECTLY ON MOBILE - DESCONSIDERS BROWSER NAV BARS */
		const rootElement = document.querySelector(".vc_row-o-full-height");

		if ( rootElement !== null ) {
			const viewPortH = rootElement.getBoundingClientRect().height;
			const windowH = window.innerHeight;
			const browserUiBarsH = viewPortH - windowH;
			rootElement.style.height = `calc(100vh - ${browserUiBarsH}px)`;
		}

		/* HIDE LANDING COVER ON CLICK */
		$('.landing-cover').click(function() {
			$(this).hide();
		});

		/* REMOVE SINGLE PRODUCT VARIABLE THINGS THAT WE DON'T NEED */
		$('.single_add_to_cart_button.button.alt').html('add to cart');

		$(".toggle-item").click(function() {
			$(".toggle-menu").toggle();
		});

	});

	$(window).load(function() {
		if ($(window).width() < 768) {
			$(".horizontal-wrapper").removeClass("product-gallery");

			$('.stories-slider').flipster({
				itemContainer: '.container-slider',
				itemSelector: '.story-item',
				start: 'center',
				fadeIn: 400,
				loop: true,
				autoplay: false,
				pauseOnHover: true,
				style: 'carousel',
				spacing: -0.6,
				nav: true,
				buttons:   true,
				click: true,
				keyboard: true,
				scrollwheel: false,
				touch: true,
				nav: false,
				buttons: false,
				buttonPrev: 'Previous',
				buttonNext: 'Next',
				onItemSwitch: function(currentItem, previousItem){
					var title = $(currentItem).find('.post-info').data('title');
					var description = $(currentItem).find('.post-info').data('description');
					var link = $(currentItem).find('.post-info').data('link');

					$('.stories-title .title').html(title);
					$('.stories-title .description').html(description);
				},
			});
		}
		else {
			$('.stories-slider').flipster({
				itemContainer: '.container-slider',
				itemSelector: '.story-item',
				start: 'center',
				fadeIn: 400,
				loop: true,
				autoplay: false,
				pauseOnHover: true,
				style: 'coverflow',
				spacing: -0.6,
				nav: true,
				buttons:   true,
				click: true,
				keyboard: true,
				scrollwheel: false,
				touch: true,
				nav: false,
				buttons: false,
				buttonPrev: 'Previous',
				buttonNext: 'Next',
				onItemSwitch: function(currentItem, previousItem){
					var title = $(currentItem).find('.post-info').data('title');
					var description = $(currentItem).find('.post-info').data('description');
					var link = $(currentItem).find('.post-info').data('link');

					$('.stories-title .title').html(title);
					$('.stories-title .description').html(description);
				},
			});
		}


		$('.stories-title .title').html($('.flipster__item--current .post-info').data('title'));
		$('.stories-title .description').html($('.flipster__item--current .post-info').data('description'));
	});

	$(function () {

		'use strict';

		// DOM ready, take it awa

		/* MOVE CHECKOUT TITLE TO THE RIGHT PLACE */
		$("#order_review_heading").detach().prependTo("#order_review");


		$('#shipping_method li').each(function() {
			$(this).children().find('.amount').prependTo($(this));
		});
	});

})(jQuery, this);
