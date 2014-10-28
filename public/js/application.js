var s;

$(document).ready(function() {


	initSkrollr();


	turnMenuMouseEventsOn();

});



function initSkrollr() {
	s = skrollr.init({
		keyframe: function(element, name, direction) {
			if ($(element).attr('id') == 'section-projects') getProjectsSkrollrEvents(name, direction);
			else if ($(element).attr('id') == 'section-solutions') getSolutionsSkrollrEvents(name, direction);
		}
	});

	skrollr.menu.init(s);

}


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

