$(function () {

	setTimeout(function() {
		let stepsCount = 1;

		$('.steps .step').each(function() {
			$(this).addClass(`step-line-${stepsCount}`);
			stepsCount++;
		});

		setTimeout(function() {
			$('.preloader').addClass('hidden');
			if ($('body').hasClass('has-wow')) {
				new WOW().init();
			}
		}, 200);
	}, 3000);

	// main slider init
	$('.main-slider-wrapper').slick({
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 5000,
		appendDots: '.main-slider-dots'
	});

	// fix header
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 40) {
			$('.header').addClass('fixed');
		} else {
			$('.header.fixed').removeClass('fixed');
		}
	});

	// init custom select
	$('select').niceSelect();

	// check select game, make elements clickable and show/hide needed block
	$('.select__game').on('change', function () {
		$('.nice-select.item-disabled, .select-box.item-disabled').removeClass('item-disabled');
		if ($(this).val() === 'CS') {
			$('.select-box.select__role').addClass('hide');
			$('.select__rang_cs.hide').removeClass('hide');
			$('.select__rang_dota').addClass('hide');
		} else {
			$('.select__rang_cs').addClass('hide');
			$('.select__rang_dota').removeClass('hide');
			$('.select-box.select__role.hide').removeClass('hide');
		}
	});

	// open/close custom role select
	$('.select-box').on('click', function (e) {
		if ($(e.target).parent('.select-box').length) {
			$(this).toggleClass('open');
		}
	});

	// close custom role select when the user clicked outside
	$(document).on('click', function (e) {
		if ($(e.target).closest(".select-box.open").length) { return; }
		$(".select-box.open").removeClass("open");
		e.stopPropagation();
	});

	// adding roles to the block during checkbox selection
	$('.select-box label input[type="checkbox"]').on('change', function (e) {
		let checkedCheckboxes = [];
		let selectHeadingText = $(this).parents('.select-box').find('.select-box__head').attr('data-initial-title');

		if ($(this).is(":checked")) {
			$(this).parent().addClass('check');
		} else {
			$(this).parent().removeClass('check');
		}

		$(this).parents('.select-box__list').find("input:checkbox:checked").each(function () {
			checkedCheckboxes.push($(this).parent().find('span').text());
		});

		if (checkedCheckboxes.length > 0) {
			$(this).parents('.select-box').find('.select-box__head').text('Роль: ' + checkedCheckboxes);
		} else {
			$(this).parents('.select-box').find('.select-box__head').text(selectHeadingText);
		}
	});

	$('.select-box label input[type="checkbox"]').each(function (e) {
		let checkedCheckboxes = [];
		let selectHeadingText = $(this).parents('.select-box').find('.select-box__head').attr('data-initial-title');

		if ($(this).is(":checked")) {
			$(this).parent().addClass('check');
		} else {
			$(this).parent().removeClass('check');
		}

		$(this).parents('.select-box__list').find("input:checkbox:checked").each(function () {
			checkedCheckboxes.push($(this).parent().find('span').text());
		});

		if (checkedCheckboxes.length > 0) {
			$(this).parents('.select-box').find('.select-box__head').text('Роль: ' + checkedCheckboxes);
		} else {
			$(this).parents('.select-box').find('.select-box__head').text(selectHeadingText);
		}
	});

	// smooth scrollto anchor
	$('a.scroll-to').bind('click.smoothscroll', function (e) {
		e.preventDefault();

		let target = this.hash,
			$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 1500, 'swing');
	});

	$('body').on('click', '.slide__box_links .discord img', function () {
		$(this).parent().toggleClass('hover');
		$(this).parent().find('div').eq(0).toggle("slide");
	});

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.search-wrapper__info__slider').slick({
		centerMode: true,
		arrows: true,
		infinite: false,
		nextArrow: '<img src="img/icons/slider/arrow-right.svg" class="arrow-next-mob" alt="">',
		prevArrow: ''
	});

	$('.search-wrapper__form').on('submit', function (e) {
		e.preventDefault();

		var $form = $(this),
			$btn = $form.find('button[type="submit"]'),
			$game = $form.find('[name="game"]').val();

		$.ajax('/search', {
			method: 'POST',
			data: $form.serialize(),
			dataType: 'HTML',
			beforeSend: function () {
				$btn.prop('disabled', true);
				$('.search-loader').addClass('active');
				$('.search-wrapper__info__slider').addClass('hide');
				$('.search-wrapper__info__contacts').addClass('hide');
				$('.search-not-found_dota, .search-not-found_cs').addClass('hide');
				$('.search-wrapper__info__slider').slick('slickRemove', null, null, true);
			},
			success: function (data) {
				$('.search-wrapper__info__slider').removeClass('hide');
				$('.search-wrapper__info__contacts').addClass('hide');
				$('.search-wrapper__info__slider').slick('resize');
				$('.search-wrapper__info__slider').slick('slickAdd', data);
			},
			error: function () {
				if ($game == 'Dota') {
					$('.search-not-found_dota').removeClass('hide');
				}
				else if ($game == 'CS') {
					$('.search-not-found_cs').removeClass('hide');
				}
			},
			complete: function () {
				$btn.prop('disabled', false);
				$('.search-loader').removeClass('active');
			}
		});
	});

	$('#contact-form, #profile-form').on('submit', function(e) {
		e.preventDefault();

		var $form = $(this),
			$btn = $form.find('button[type="submit"]'),
			$loader = $('.search-loader');

		$.ajax($form.attr('action'), {
			method: $form.attr('method'),
			data: $form.serialize(),
			beforeSend: function() {
				$btn.prop('disabled', true);
				$loader.addClass('active');
			},
			complete: function() {
				$btn.prop('disabled', false);
				$loader.removeClass('active');
			}
		});
	});

	$('.showInResults_label input[type="checkbox"]').on('change', function () {
		if ($(this).is(":checked")) {
			$(this).parent().addClass('check');
		} else {
			$(this).parent().removeClass('check');
		}
	});

	// gamburger
	$('.menu-wrapper').on('click', function () {
		$('.hamburger-menu').toggleClass('animate');
	});

	$('.header__user').on('click', function(e){
		e.stopPropagation();
		if (e.target.className != 'header__user__links') {
			$('.header__user__arrow_open').toggleClass('open');
			$('.header__user__links').fadeToggle();
		}

	});

	// popup menu
	$('.menu-wrapper').on('click', function () {
		$('.popup-menu').toggleClass('open');
		$('body').toggleClass('body-over');
	});

	$('body').on('click', '.copy_id', function (e) {
		e.preventDefault();

		copyToClipboard(this);

		$(this).addClass('hide');
		$(this).parent().find('span').text('Скопировано');
		$(this).parent().addClass('copy');
	});

	function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).data('copy-text')).select();
		document.execCommand("copy");
		$temp.remove();
	}

});