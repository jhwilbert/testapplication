
$(document).ready(function() {

	initProjects();

});

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
                /*
                $('#project-description').columnize();
		        if ($('#slides').data('plugin_slidesjs')) {
		        	$('#slides').data('plugin_slidesjs').stop();
		        	$('#slides').removeData('plugin_slidesjs');
                	$('#slides').html('');
		        }
		        */
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

