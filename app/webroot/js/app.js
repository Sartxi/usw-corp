$(document).scroll(function() {
	var y = $(this).scrollTop();
	if (y > 800) {
		$('.returntotop').fadeIn();
	} else {
		$('.returntotop').fadeOut();
	}
});
$(document).ready(function() {
	//responsive
	var winheight = $(window).height();
	var winwidth = $(window).width();

	//Home Slider
	$('#da-slider').cslider({
		autoplay: true,
		interval: 9000
	});

	// Services smooth scrolling
	$('#services a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target
            || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top - $(this).outerHeight(true);
                $('html,body')
                    .animate({scrollTop: targetOffset}, 1000);
                    return false;
            }
        }
    });

    if (winwidth < 728) {
    	$('ul.servnav').removeClass('list-inline').addClass('list-unstyled');
    	$('ul.servnav .btn').addClass('btn-block mobileservnav');
    	$('.learnmore').addClass('btn-block');
    };

	//Products pg
	$('.prod-panels').hover(function() {
		$(this).find('.prodlay').toggle();
		$(this).find('.showprodline').toggle();
	});
	$('.sw-film').click(function(){
		$(this).addClass('active');
		$('.sw-tape, .sw-vent, .sw-rust, .sw-tools').removeClass('active');
		$('#sw-film').show('fade');
		$('#sw-tape, #sw-vent, #sw-rust, #sw-tools').hide();
	});
	$('.sw-tape').click(function(){
		$(this).addClass('active');
		$('.sw-film, .sw-vent, .sw-rust, .sw-tools').removeClass('active');
		$('#sw-tape').show('fade');
		$('#sw-film, #sw-vent, #sw-rust, #sw-tools').hide();
	});
	$('.sw-vent').click(function(){
		$(this).addClass('active');
		$('.sw-film, .sw-tape, .sw-rust, .sw-tools').removeClass('active');
		$('#sw-vent').show('fade');
		$('#sw-film, #sw-tape, #sw-rust, #sw-tools').hide();
	});
	$('.sw-rust').click(function(){
		$(this).addClass('active');
		$('.sw-film, .sw-vent, .sw-tape, .sw-tools').removeClass('active');
		$('#sw-rust').show('fade');
		$('#sw-film, #sw-vent, #sw-tape, #sw-tools').hide();
	});
	$('.sw-tools').click(function(){
		$(this).addClass('active');
		$('.sw-film, .sw-vent, .sw-rust, .sw-tape').removeClass('active');
		$('#sw-tools').show('fade');
		$('#sw-film, #sw-vent, #sw-rust, #sw-tape').hide();
	});
});