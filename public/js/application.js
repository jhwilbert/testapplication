
var s;
var is_mobile = ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) );

$(document).ready(function() {
	if (is_mobile) mobileHacks();
	//else initSkrollr();
	initWindowResize();
	turnMenuMouseEventsOn();
	closePreloader();
});

$(window).load(function() {
	setMenuPosition();
});

function closePreloader() {
	$('#status').fadeOut(); // will first fade out the loading animation
	$('#preloader').delay(350).fadeOut('slow', function() {
		$('#status').remove();
	});
	$('body').delay(350).css({'overflow':'visible'});
}

/* manage window resize actions */

function initWindowResize() {
	$(window).on('resize', function() {
		callOnResize();
	});
	callOnResize();
}

function callOnResize() {
	var wh = $(window).height();
	var $this, cch, mt; 
	$('.core-contents').each(function(){
		$this = $(this);
		cch = $this.height();
		mt = Math.max(0, ((wh - cch) / 2) - 200);
		$this.css('margin-top', mt);
		if ($this.attr('id') == 'structure_slides') {
			$this.children('.slidesjs-navigation').css('margin-top', mt/2);
		}
	});
}


/* Menu marker animation functions */

function turnMenuMouseEventsOn() {
	setMenuPosition();

	$('#main-menu ul.nav li a').on('mouseenter', function() {
		setMenuPosition($(this));
	});

	$('#main-menu ul.nav').on('mouseleave', function(){
		setMenuPosition();
	});	
}

function turnMenuMouseEventsOff() {

	$('#main-menu ul.nav li a').off('mouseenter');
	$('#main-menu ul.nav').off('mouseleave');

}

function setMenuPosition($item) {
	$('#menu_marker').stop();
	if (!$item) {
		$item = $('#main-menu ul.nav li a.active');
	}
	if ($item.length == 1) {
		var w = $item.parent().width() + 1;
		if ($('#menu_marker').is(":visible")) {
			$('#menu_marker').fadeIn('fast').animate({left: $item.offset().left, width: w});
		} else {
			$('#menu_marker').css({left: $item.offset().left, width: w}).fadeIn('fast');
		}
	} else {
		$('#menu_marker').fadeOut();
	}

}


function mobileHacks() {
	$('body').addClass('mobile');
}
