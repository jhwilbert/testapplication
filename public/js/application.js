var s;
var extrapos = 0;

$(document).ready(function() {

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

	//The options (second parameter) are all optional. The values shown are the default values.
	skrollr.menu.init(s, {
	    handleLink: function(link) {
	        return getPosition($(link).attr('href'), true);
	    }
	});


	/* projects */

	$('a.project-link').on('click', function() {
        $.get(
            $(this).attr('href'),
            function( data ) {
                console.log(data);
            },
            'json'
        );
        extrapos = 2000;
        s.refresh();
 
        return false;
	});
	
});

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