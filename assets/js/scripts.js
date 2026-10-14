
(function ($) {
	'use strict';

	jQuery(document).on('ready', function () {

		/*PRELOADER JS*/
		$(window).on('load', function () {
			$('.status').fadeOut();
			$('.preloader').delay(100).fadeOut('slow');
		});
		/*END PRELOADER JS*/

		/*START MENU JS*/
		// Close responsive menu when a scroll trigger link is clicked
		// Smooth Scroll & Close responsive menu
		$('.navbar-nav .nav-link').on('click', function (e) {
			var anchor = $(this);
			var href = anchor.attr('href');
			// Only for internal links (anchors)
			if (href && href.indexOf('#') === 0 && href.length > 1) {
				e.preventDefault();
				var target = $(href);

				if (target.length) {
					// Since sections have 80px padding-top, scrolling to target.offset().top
					// leaves the heading visible below the sticky navbar without showing any of the banner
					var targetTop = href === '#home' ? 0 : Math.max(0, target.offset().top);
					$('html, body').stop().animate({
						scrollTop: targetTop
					}, 600, 'swing', function () {
						if (history.pushState) {
							history.pushState(null, null, href);
						}
					});
				}
			}
			$('.navbar-collapse').collapse('hide');
		});

		function windowScroll() {
			const navbar = document.getElementById("navbar");
			if (!navbar) return;
			if (
				document.body.scrollTop >= 50 ||
				document.documentElement.scrollTop >= 50
			) {
				navbar.classList.add("nav-sticky");
			} else {
				navbar.classList.remove("nav-sticky");
			}
		}

		window.addEventListener('scroll', () => {
			windowScroll();
		}, { passive: true });
		/*END MENU JS*/

		/*START PROGRESS BAR*/
		$('.progress-bar > span').each(function () {
			var $this = $(this);
			var width = $(this).data('percent');
			$this.css({
				'transition': 'width 2s'
			});

			setTimeout(function () {
				$this.appear(function () {
					$this.css('width', width + '%');
				});
			}, 500);
		});
		/*END PROGRESS BAR*/

		/* START COUNTDOWN JS*/
		$('.counter_feature').on('inview', function (event, visible, visiblePartX, visiblePartY) {
			if (visible) {
				$(this).find('.counter-num').each(function () {
					var $this = $(this);
					$({ Counter: 0 }).animate({ Counter: $this.text() }, {
						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.ceil(this.Counter));
						}
					});
				});
				$(this).unbind('inview');
			}
		});
		/* END COUNTDOWN JS */

		/* START JQUERY LIGHTBOX*/
		jQuery('.lightbox').venobox({
			numeratio: true,
			infinigall: true
		});
		/* END JQUERY LIGHTBOX*/

		/* START MIX JS */
		$('.portfolio_item').mixItUp({

		});

	});

	/* START PARALLAX JS */
	(function () {

		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

		} else {
			$(window).stellar({
				horizontalScrolling: false,
				responsive: true
			});
		}

	}());
	/* END PARALLAX JS  */

	/*START WOW ANIMATION JS*/
	new WOW().init();
	/*END WOW ANIMATION JS*/

})(jQuery);




