$(function() {
	$(window).load(function(event) {
		if ( $.cookie("user_startTime") == undefined ) {
			$.cookie("user_startTime", new Date().getTime() / 1000);
			$.cookie("user_startTime_i", 0);
		} else if( (new Date().getTime() / 1000 - $.cookie("user_startTime")) > 45 && $.cookie("user_startTime_i") == 0 ) {
			yaCounter44882842.reachGoal('more45sec');
			$.cookie("user_startTime_i", 1);
		}
	});
});

jQuery(document).ready(function($) {
/*==========================================
=            PHONE MASKED INPUT            =
==========================================*/
    $("[name*=phone]").mask("+1-999-999-9999");
/*=====  End of phone masked input  ======*/


/*==========================================
=            UI SLIDER FOR CALC            =
==========================================*/
if ( $('#people-count').length > 0 ) {

	$("#people-count .slider").slider({
	    range: false,
	    min: 0,
	    max: 1000,
	    values: [0],
	    step: 5,
	    stop: function(event, ui) {
	        $('#price-button').data("p_count",$(this).slider("values",0));
			// $('.people-quantity').text($(this).slider("values",0));
			$('.people-quantity').val($(this).slider("values",0));
	    },
		slide: function(event, ui) {
	        // $('.people-quantity').text($(this).slider("values",0));
	        $('.people-quantity').val($(this).slider("values",0));
	    },
		create: function(event, ui) {
	        // $('.people-quantity').text($(this).slider("values",0));
	        $('.people-quantity').val($(this).slider("values",0));
	        $('#price-button').data("p_count",$(this).slider("values",0));
	    }
	});

	$("input.people-quantity").change(function(){

		var value1 = $("input.people-quantity").val();
		$("#people-count .slider").slider("values",0,value1);
		$('#price-button').data("p_count",value1);	
	});

	$("#age-count .slider").slider({
	    range: false,
	    min: 0,
	    max: 100,
	    values: [0],
	    step: 1,
	    stop: function(event, ui) {
	        $('#price-button').data("a_count",$(this).slider("values",0));
			// $('.age-quantity').text($(this).slider("values",0));
			$('.age-quantity').val($(this).slider("values",0));
	    },
		slide: function(event, ui) {
	        // $('.age-quantity').text($(this).slider("values",0));
	        $('.age-quantity').val($(this).slider("values",0));
	    },
		create: function(event, ui) {
	        // $('.age-quantity').text($(this).slider("values",0));
	        $('.age-quantity').val($(this).slider("values",0));
	        $('#price-button').data("a_count",$(this).slider("values",0));
	    }
	});

	$("input.age-quantity").change(function(){

		var value1 = $("input.age-quantity").val();
		$("#age-count .slider").slider("values",0,value1);
		$('#price-button').data("a_count",value1);	
	});

	$(".radio-inline").on('click', function(event) {
		// $('#price-button').data("place",$(this).text());
		$('#price-button').data("place",$(this).text());
	});

	$('#formatmer_akt').click(function() {
		if ( this.checked ) {
		    $("#price-button").data('formatmer_akt', $(this).parent('label').text());
		} else {
			$("#price-button").data('formatmer_akt', "");
		}
	});
	$('#formatmer_creat').click(function() {
		if ( this.checked ) {
		    $("#price-button").data('formatmer_creat', $(this).parent('label').text());
		} else {
			$("#price-button").data('formatmer_creat', "");
		}
	});
	$('#formatmer_int').click(function() {
		if ( this.checked ) {
		    $("#price-button").data('formatmer_int', $(this).parent('label').text());
		} else {
			$("#price-button").data('formatmer_int', "");
		}
	});
}

var calc_i = 0;
$(".people-quantity, .ui-slider, .ui-slider-handle, .age-quantity, #korporativ_calc .radio-inline, #korporativ_calc .checkbox-inline").on('click', function(event) {
	if (calc_i == 0) {
		yaCounter44882842.reachGoal('InteractionCalculate');
		ga('send', 'event', 'Interaction', 'InteractionCalculate');
		calc_i++;
	}
});

var gameSteps_i = 0;
$(".cd-timeline-navigation .prev,.cd-timeline-navigation .next, .events a, .events-content li").on('click', function(event) {
	if (gameSteps_i == 0) {
		yaCounter44882842.reachGoal('InteractionHowStudents');
		ga('send', 'event', 'Interaction', 'InteractionHowStudents');
		gameSteps_i++;
	}
});

var reviews_i = 0;
$(".jp-play").on('click', function(event) {
	if (reviews_i == 0) {
		yaCounter44882842.reachGoal('Review');
		ga('send', 'event', 'Interaction', 'Review');
		reviews_i++;
	}
});


$('#testimonials').on('click', ".owl-prev, .owl-next, .item", function(event) {
	if (reviews_i == 0) {
		yaCounter44882842.reachGoal('Review');
		ga('send', 'event', 'Interaction', 'Review');
		reviews_i++;
	}
});
$('#testimonials').on('mousedown', ".owl-item", function(event) {
	if (reviews_i == 0) {
		yaCounter44882842.reachGoal('Review');
		ga('send', 'event', 'Interaction', 'Review');
		reviews_i++;
	}
});
$('#testimonials').on('touchstart', ".owl-item", function(event) {
	if (reviews_i == 0) {
		yaCounter44882842.reachGoal('Review');
		ga('send', 'event', 'Interaction', 'Review');
		reviews_i++;
	}
});


$('#parents_testimonials').on('click', ".owl-prev, .owl-next, .item", function(event) {
	if (reviews_i == 0) {
		yaCounter44882842.reachGoal('Review');
		ga('send', 'event', 'Interaction', 'Review');
		reviews_i++;
	}
});
$('#parents_testimonials').on('mousedown', ".owl-item", function(event) {
	if (reviews_i == 0) {
		yaCounter44882842.reachGoal('Review');
		ga('send', 'event', 'Interaction', 'Review');
		reviews_i++;
	}
});
$('#parents_testimonials').on('touchstart', ".owl-item", function(event) {
	if (reviews_i == 0) {
		yaCounter44882842.reachGoal('Review');
		ga('send', 'event', 'Interaction', 'Review');
		reviews_i++;
	}
});

/*=====  End of UI SLIDER FOR CALC  ======*/

/*===========================================
=            OWL CAROUSEL CUSTOM            =
===========================================*/

$('#corporative_otzyvy .owl-carousel').owlCarousel({
    loop: true,
    dots: false,
    items: 1,
    // nav: true,
    thumbs: true,
    thumbsPrerendered: true,
});

/*=====  End of OWL CAROUSEL CUSTOM  ======*/

$(window).load(function() {
	$('.polygon-shadow').css('height', $('#menu_arrow_down').height()+10);

	$(window).resize(function(event) {
		$('.polygon-shadow').css('height', $('#menu_arrow_down').height()+10);
	});
});



});