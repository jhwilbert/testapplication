
var projectsModalOpened = false;

$(document).ready(function() {

	initProjects();

});

/*
* initializes the Projects section
*/
function initProjects() {

	/* Projects */

	$('a.project-link').on('click', function() {

		$('#show-project').modal();
		projectsModalOpened = true;

		/* get project data */
        $.get(
            $(this).attr('href'),
            function( data ) {
                $('#project-title').html(data.title);
                $('#project-description').html('<p>'+data.description+'</p>');
                /*
                $('#project-description').columnize();
		        */
				if ($('#project-slides').data('plugin_slidesjs')) {
					$('#project-slides').data('plugin_slidesjs').stop();
					$('#project-slides').removeData('plugin_slidesjs');
					$('#project-slides').html('');
				}
				for (var i in data.image_paths) {
					$('#project-slides').append('<img src="'+data.image_paths[i]+'">');
				}
				$('#project-slides').slidesjs({
					width: 780,
					navigation: false
				});
				var l = data.image_paths.length;
				if (l > 1) {
					$('#project-slides .slidesjs-pagination').show().css('width', l * 15);
				} else {
					$('#project-slides .slidesjs-pagination').hide();
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

	$('#show-project').on('hidden.bs.modal', function (e) {
		$('#project-title, #project-description, #project-slides').html('');
		projectsModalOpened = false;
	})

}

function getProjectsSkrollrEvents(name, direction) {
	//console.log(name, direction);
	if (projectsModalOpened && (
		(name == projectsBpUp && direction == 'up') ||
		(name == projectsBpDn && direction == 'down')
	)) 
		$('#show-project').modal('hide');

}