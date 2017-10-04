!(function($){
	"use strict";
	jQuery(document).ready(function($) {
		/* Show menu desktop/mobile */
		function DoyleShowMenuType() {
			var screen_width = $(window).width();
			
			if(screen_width <= option_ob.enable_mobile){
				$('.bt-header .bt-header-desktop, .bt-header .bt-header-stick').hide();
				$('.bt-header .bt-header-mobile').show();
			}else{
				$('.bt-header .bt-header-desktop, .bt-header .bt-header-stick').show();
				$('.bt-header .bt-header-mobile').hide();
			}
		}
		DoyleShowMenuType();
		
		/* Toggle menu mobile */
		function DoyleToggleMenuMobile() {
			$('.bt-header .bt-menu-toggle').on('click', function() {
				$(this).toggleClass('active');
				$('.bt-header .bt-menu-mobile').toggle('slow');
			});
		}
		DoyleToggleMenuMobile();
		
		/* Toggle sub menu mobile */
		function DoyleToggleSubMenuMobile() {
			var hasChildren = $('.bt-header .bt-header-mobile ul li.menu-item-has-children');
			
			hasChildren.each( function() {
				var $btnToggle = $('<span class="menu-toggle"></span>');
				$( this ).append($btnToggle);
				$btnToggle.on( 'click', function(e) {
					e.preventDefault();
					$( this ).toggleClass('active');
					$( this ).parent().children('ul').toggle('slow'); 
				} );
			} );
		}
		DoyleToggleSubMenuMobile();
		
		/* Header Stick */
		function DoyleHeaderStick() {
			if($( '.bt-header' ).hasClass( 'bt-stick' )) {
				var h_menu = $('.bt-header .bt-header-desktop .bt-subheader.bt-bottom'),
					h_menu_info = {top: h_menu.offset().top, height: h_menu.innerHeight()};
				
				if ($(window).scrollTop() > (h_menu_info.top + h_menu_info.height)){
					$( '.bt-header .bt-header-stick' ).addClass('active');
				}
				if($(window).scrollTop() < (h_menu_info.top + h_menu_info.height + 90)){
					$( '.bt-header .bt-header-stick' ).removeClass('active');
				}
				
			}
			
			
		}
		DoyleHeaderStick();
		
		/* Menu Canvas */
		function DoyleMenuCanvas() {
			$('.bt-header .bt-menu-canvas-toggle').on('click', function() {
				$('#bt_menu_canvas').toggleClass('active');
			});
			$('#bt_menu_canvas').on('click', function() {
				$('#bt_menu_canvas').toggleClass('active');
			});
		}
		DoyleMenuCanvas();
		
		/* Easy Scroll */
		function DoyleEasingScroll() {
			var $root = $('html, body');
			$('.page-template-page-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li > a,.page-template-page-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a, .bt-header-onepage .bt-menu-list ul > li > a').on('click', function() {
				var href = $.attr(this, 'href');
				$root.animate({
					scrollTop: $(href).offset().top
				}, 700, function() {
					window.location.hash = href;
				});
				return false;
			});
		}
		DoyleEasingScroll();
		
		/* Active Menu Item Scroll  */
		function DoyleActiveMenuItemScroll() {
			var scroll_pos = $(window).scrollTop() + 1;
			var sec_attr = [];
 
			$('.page-template-page-onepage .vc_section, .page-template-page-onepagescroll .vc_section').each(function(){
				sec_attr.push([$(this).attr('id'), $(this).offset().top]);
			});

			$.each(sec_attr, function( index, value ) {
				if(scroll_pos >= value[1] && scroll_pos < value[1] + $('#' + value[0]).innerHeight()){
					$('.page-template-page-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li, .page-template-page-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li, .bt-header-onepage .bt-menu-list ul > li').removeClass('current-menu-item');
					$('.page-template-page-onepage .bt-header .bt-header-desktop .bt-bottom ul.menu > li > a[href="#' + value[0] +'"], .page-template-page-onepage .bt-header .bt-header-stick .bt-menu-desktop ul.menu > li > a[href="#' + value[0] +'"], .bt-header-onepage .bt-menu-list ul > li > a[href="#' + value[0] +'"]').parent().addClass('current-menu-item');
				}
			});
		}
		DoyleActiveMenuItemScroll();
		
		/* Masonry */
		function DoyleMasonry() {
			if($('.bt-grid-masonry').length > 0) {
				$('.bt-grid-masonry .row').isotope({
					// options
				});
			}
		}
		DoyleMasonry();
		
		/* Callback function when resize screen */
		$(window).on('resize', function() {
			DoyleShowMenuType();
			DoyleActiveMenuItemScroll();
			DoyleMasonry();
		});
		
		$(window).on('scroll', function() {
			DoyleHeaderStick();
			DoyleActiveMenuItemScroll();
			DoyleMasonry();
		});
		
		
		/* Compatible Ess Grid and VC Animation */
		$('body').on('click', '.esg-filterbutton', function() {
			setTimeout(function(){
				$(window).trigger('resize');
			}, 500);
		});
		
		
		/* Open the hide mini search */
		function DoyleOpenMiniSearchSidebar() {
			$('.bt-mini-search > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').hasClass('active')){
					$('.bt-mini-cart .bt-cart-content, .bt-mini-cart > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-mini-search .bt-search-form').toggleClass('active');
			});
		}
		DoyleOpenMiniSearchSidebar();
		
		/* Open the hide mini cart */
		function DoyleOpenMiniCartSidebar() {
			$('.bt-mini-cart > a').on('click', function(e) {
				e.preventDefault();
				if($('.bt-mini-search .bt-search-form, .bt-mini-search > a').hasClass('active')){
					$('.bt-mini-search .bt-search-form, .bt-mini-search > a').removeClass('active');
				}
				$(this).toggleClass('active');
				$('.bt-mini-cart .bt-cart-content').toggleClass('active');
			});
		}
		DoyleOpenMiniCartSidebar();
		
		
		
		
		/* Open the hide menu canvas */
		function BearsthemesOpenMenuSidebar() {
			$('.bt-menu-sidebar > a').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
			$('.bt-menu-canvas-overlay').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
		}
		BearsthemesOpenMenuSidebar();
		
		function BearsthemesCountDownClock() {
			$('.bt-countdown-clock').each(function() {
				var countdownTime = $(this).attr('data-countdown');
				var countdownFormat = $(this).attr('data-format');
				var countdownLabels = $(this).attr('data-labels').split(',');
				var countdownLabels1 = $(this).attr('data-labels1').split(',');
				$(this).countdown({
					until: countdownTime,
					format: countdownFormat,
					labels: countdownLabels,
					labels1: countdownLabels1,
					padZeroes: true
				});
			});
		}
		BearsthemesCountDownClock();
		
        /* Plus Qty */
        $(document).on('click', '.qty-plus', function() {
            var parent = $(this).parent();
            $('input.qty', parent).val( parseInt($('input.qty', parent).val()) + 1);
			$('input.qty', parent).trigger('change');
        });
        /* Minus Qty */
        $(document).on('click', '.qty-minus', function() {
            var parent = $(this).parent();
            if( parseInt($('input.qty', parent).val()) > 1) {
                $('input.qty', parent).val( parseInt($('input.qty', parent).val()) - 1);
				$('input.qty', parent).trigger('change');
            }
        });
	});
})(jQuery);