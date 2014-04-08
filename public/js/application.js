var s;
var extrapos = 0;

$(document).ready(function() {

	initSkrollr();

	initProjects();

});


/*
* initializes the Skrollr parallax plugin
*/
function initSkrollr() {

	s = skrollr.init({
		constants: {
			homepos: function() {
				return getPosition('#section-home');
			},
			projectspos: function() {
				return getPosition('#section-projects');
			},
			clientspos: function() {
				return getPosition('#section-clients');
			},
			timelinepos: function() {
				return getPosition('#section-timeline');
			},
			contactpos: function() {
				return getPosition('#section-contact');
			},
			tleventpos: function() {
				return getPosition('#section-timeline', true);
			},
			footerpos: function() {
				return getPosition('#section-contact', true);
			},
		}
	});

	skrollr.menu.init(s, {
	    handleLink: function(link) {
	        return getPosition($(link).attr('href'), true);
	    }
	});	
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
                $('#project-description').html(data.description);
		        $('#show-project').animate({height: 'auto'});
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
					height: 480,
					navigation: false
				});
				$('#slides .slidesjs-pagination').css('width', data.image_paths.length * 15);
            },
            'json'
        );

        /* add extra pixel for the vertical position of sections below Projects */
        extrapos = 1000;
        s.refresh();
 
        return false;
	});

}


/*
* gets the vertical position of a section for skrollr tags
*/
function getPosition(sectionLink, withOffset) {
	var pos = positions[sectionLink];
	if (sectionLink != '#section-home' && sectionLink != '#section-projects') {
		pos += extrapos;
	}
	if (withOffset === true) {
		pos += posOffset;
	}
	return pos;
}

