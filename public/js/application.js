var s;
var extrapos = 0;
var menu_target = null;

$(document).ready(function() {

	initSkrollr();

	initMenu();

	initProjects();

});


/*
* initializes the Skrollr parallax plugin
*/
function initSkrollr() {

	s = skrollr.init({
		constants: {
			home_0: function() { return getPosition('#section-home', 0); },
			projects_0: function() { return getPosition('#section-projects', 0); },
			projects_1: function() { return getPosition('#section-projects', 1); },
			projects_2: function() { return getPosition('#section-projects', 2); },
			projects_3: function() { return getPosition('#section-projects', 3); },
			projects_4: function() { return getPosition('#section-projects', 4); },
			clients_0: function() { return getPosition('#section-clients', 0); },
			clients_1: function() { return getPosition('#section-clients', 1); },
			clients_2: function() { return getPosition('#section-clients', 2); },
			clients_3: function() { return getPosition('#section-clients', 3); },
			timeline_0: function() { return getPosition('#section-timeline', 0); },
			timeline_1: function() { return getPosition('#section-timeline', 1); },
			timeline_2: function() { return getPosition('#section-timeline', 2); },
			timeline_3: function() { return getPosition('#section-timeline', 3); },
			contact_0: function() { return getPosition('#section-contact', 0); },
			contact_1: function() { return getPosition('#section-contact', 1); },
			contact_2: function() { return getPosition('#section-contact', 2); },
			contact_3: function() { return getPosition('#section-contact', 3); },

			tleventpos: function() {
				return getPosition('#section-timeline', 0, true);
			},
			footerpos: function() {
				return getPosition('#section-contact', 0, true);
			},
		},
		keyframe: function(element, name, direction) {
			if ('#' + $(element).attr('id') == menu_target) {
				menu_target = null;
				turnMenuMouseEventsOn();
			} else if (menu_target != null) {
				return;
			}
			setMenuPosition();
        },
        render: function(data) {
			setMenuPosition();
        }
	});

}

function initMenu() {

	skrollr.menu.init(s, {
	    handleLink: function(link) {
	    	menu_target = $(link).attr('href');
	        return getPosition(menu_target, 0, true);
	    }
	});	

	turnMenuMouseEventsOn();

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
		$('#menu_marker').fadeIn('fast').animate({left: $item.offset().left, width: $item.parent().width()});
	} else {
		$('#menu_marker').fadeOut();
	}

}


/*
* initializes the Projects section
*/
function initProjects() {

	/* Projects */

	$('a.project-link').on('click', function() {

		$('#show-project').show().animate({height: 400});

		/* get project data */
        $.get(
            $(this).attr('href'),
            function( data ) {
                $('#project-title').html(data.title);
                $('#project-description').html('<p>'+data.description+'</p>');
                $('#project-description').columnize();
		        if ($('#slides').data('plugin_slidesjs')) {
		        	$('#slides').data('plugin_slidesjs').stop();
		        	$('#slides').removeData('plugin_slidesjs');
                	$('#slides').html('');
		        }
                for (var i in data.image_paths) {
                	$('#slides').append('<img src="'+data.image_paths[i]+'">');
                }
				$('#slides').slidesjs({
					width: 780,
					navigation: false
				});
				var l = data.image_paths.length;
				if (l > 1) {
					$('#slides .slidesjs-pagination').show().css('width', l * 15);
				} else {
					$('#slides .slidesjs-pagination').hide();
				}

				/* add extra pixel for the vertical position of sections below Projects */
                $('#show-project').animate({height: 'auto'}, function(){
					extrapos = $('#show-project').height() + 200;
					s.refresh();
                });

            },
            'json'
        );
 
        return false;
	});

}


/*
* gets the vertical position of a section for skrollr tags
*/
function getPosition(sectionLink, state, withOffset) {
	var pos = positions[sectionLink][state];

	if (sectionLink == '#section-projects' && state > 2) return pos + extrapos*.8;

	if (sectionLink != '#section-home' && sectionLink != '#section-projects') {
		pos += extrapos;
	}
	if (withOffset === true) {
		pos += posOffset;
	}
	return pos;
}

