'use strict';
jQuery(function($) {
	$('form.quform').Quform();

	// Tooltips
	if(window.tippy) {
		$('.quform-tooltip').each(function () {
			tippy(this, {
				theme: 'quform'
			});
		});
	}

	// Changes subject to a text field when 'Other' is chosen
	$('#subject').replaceSelectWithTextInput({ onValue: 'Other' });
});

(function ($) {
	$(window).on('load', function () {
		// Preload images
		var images = [
			'assets/quform/images/close.png',
			'assets/quform/images/success.png',
			'assets/quform/images/error.png',
			'assets/quform/images/default-loading.gif'
		];

		// Preload images for any active themes
		if ($('.quform-theme-light-light, .quform-theme-light-rounded').length) {
			images = images.concat([
				'assets/quform/themes/light/images/button-active-bg-rep.png',
				'assets/quform/themes/light/images/close.png',
				'assets/quform/themes/light/images/input-active-bg-rep.png'
			]);
		}

		if ($('.quform-theme-dark-dark, .quform-theme-dark-rounded').length) {
			images = images.concat([
				'assets/quform/themes/dark/images/button-active-bg-rep.png',
				'assets/quform/themes/dark/images/close.png',
				'assets/quform/themes/dark/images/input-active-bg-rep.png',
				'assets/quform/themes/dark/images/loading.gif'
			]);
		}

		if ($('.quform-theme-minimal-light').length) {
			images = images.concat([
				'assets/quform/themes/minimal/images/close-light.png'
			]);
		}

		if ($('.quform-theme-minimal-dark').length) {
			images = images.concat([
				'assets/quform/themes/minimal/images/close-dark.png',
				'assets/quform/themes/minimal/images/loading-dark.gif'
			]);
		}

		$.preloadImages(images);
	});
})(jQuery);
