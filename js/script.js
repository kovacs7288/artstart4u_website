$(document).ready(function () {
	'use strict';


	// Shuffle js filter and masonry
	var containerEl = document.querySelector('.shuffle-wrapper');
	if (containerEl) {
		var Shuffle = window.Shuffle;
		var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
			itemSelector: '.shuffle-item',
			buffer: 1
		});

		jQuery('input[name="shuffle-filter"]').on('change', function (evt) {
			var input = evt.currentTarget;
			if (input.checked) {
				myShuffle.filter(input.value);
			}
		});
	}

	$('.portfolio-single-slider').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000

	});

	$('.clients-logo').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000
	});

	$('.testimonial-slider').slick({
		slidesToShow: 1,
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000
	});


	// CountDown JS
	$('.count-down').syotimer({
		year: 2021,
		month: 5,
		day: 9,
		hour: 20,
		minute: 30
	});

	// Magnific Popup Image
	$('.portfolio-popup').magnificPopup({
		type: 'image',
		removalDelay: 160, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function () {
				// just a hack that adds mfp-anim class to markup
				this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
				this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		closeOnContentClick: true,
		midClick: true,
		fixedContentPos: true,
		fixedBgPos: true
	});

	//  Count Up
	function counter() {
		var oTop;
		if ($('.count').length !== 0) {
			oTop = $('.count').offset().top - window.innerHeight;
		}
		if ($(window).scrollTop() > oTop) {
			$('.count').each(function () {
				var $this = $(this),
					countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				}, {
					duration: 1000,
					easing: 'swing',
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
					}
				});
			});
		}
	}
	$(window).on('scroll', function () {
		counter();
	});




	// contactr form
	$('#contact-form').validate({
		rules: {
			user_name: {
				required: true,
				minlength: 4
			},
			user_email: {
				required: true,
				email: true
			},
			user_subject: {
				required: false
			},
			user_message: {
				required: true
			}
		},
		messages: {
			user_name: {
				required: 'Come on, you have a name don\'t you?',
				minlength: 'Your name must consist of at least 2 characters'
			},
			user_email: {
				required: 'Please put your email address'
			},
			user_message: {
				required: 'Put some messages here?',
				minlength: 'Your name must consist of at least 2 characters'
			}

		},
		submitHandler: function (form) {
			$(form).ajaxSubmit({
				type: 'POST',
				data: $(form).serialize(),
				url: 'sendmail.php',
				success: function () {
					$('#contact-form #success').fadeIn();
				},
				error: function () {

					$('#contact-form #error').fadeIn();
				}
			});
		}
	});
	let modalId = $('#image-gallery');

	$(document)
	  .ready(function () {
	
		loadGallery(true, 'a.thumbnail');
	
		//This function disables buttons when needed
		function disableButtons(counter_max, counter_current) {
		  $('#show-previous-image, #show-next-image')
			.show();
		  if (counter_max === counter_current) {
			$('#show-next-image')
			  .hide();
		  } else if (counter_current === 1) {
			$('#show-previous-image')
			  .hide();
		  }
		}
	
		/**
		 *
		 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
		 * @param setClickAttr  Sets the attribute for the click handler.
		 */
	
		function loadGallery(setIDs, setClickAttr) {
		  let current_image,
			selector,
			counter = 0;
	
		  $('#show-next-image, #show-previous-image')
			.click(function () {
			  if ($(this)
				.attr('id') === 'show-previous-image') {
				current_image--;
			  } else {
				current_image++;
			  }
	
			  selector = $('[data-image-id="' + current_image + '"]');
			  updateGallery(selector);
			});
	
		  function updateGallery(selector) {
			let $sel = selector;
			current_image = $sel.data('image-id');
			$('#image-gallery-title')
			  .text($sel.data('title'));
			$('#image-gallery-image')
			  .attr('src', $sel.data('image'));
			disableButtons(counter, $sel.data('image-id'));
		  }
	
		  if (setIDs == true) {
			$('[data-image-id]')
			  .each(function () {
				counter++;
				$(this)
				  .attr('data-image-id', counter);
			  });
		  }
		  $(setClickAttr)
			.on('click', function () {
			  updateGallery($(this));
			});
		}
	  });
	
	// build key actions
	$(document)
	  .keydown(function (e) {
		switch (e.which) {
		  case 37: // left
			if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
			  $('#show-previous-image')
				.click();
			}
			break;
	
		  case 39: // right
			if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
			  $('#show-next-image')
				.click();
			}
			break;
	
		  default:
			return; // exit this handler for other keys
		}
		e.preventDefault(); // prevent the default action (scroll / move caret)
	  });
	
});