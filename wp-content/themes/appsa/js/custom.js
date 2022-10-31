jQuery(document).ready(function() {

$('#menu-top-menu').on('click','a', function(event) {
	var $anchor = $(this).attr('href')
	  , $target = $('div' + $anchor);

	$('html, body').stop().animate({
		scrollTop: ($target.offset().top)
	}, 1500);
	event.preventDefault();
});

});