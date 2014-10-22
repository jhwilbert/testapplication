var s;

$(document).ready(function() {


	initSkrollr();


	turnMenuMouseEventsOn();

});



function initSkrollr() {
	s = skrollr.init();
}




function turnMenuMouseEventsOn() {

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
		$item = $('#main-menu ul.nav li a.selected');
	}
	if ($item.length == 1) {
		if ($('#menu_marker').is(":visible")) {
			$('#menu_marker').fadeIn('fast').animate({left: $item.offset().left, width: $item.parent().width()});
		} else {
			$('#menu_marker').css({left: $item.offset().left, width: $item.parent().width()}).fadeIn('fast');
		}
	} else {
		$('#menu_marker').fadeOut();
	}

}
