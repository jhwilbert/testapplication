
var projectsModalOpened = false;

$(document).ready(function() {

	initProjects();

});

/*
* initializes the Projects section
*/
var projectOpen = false;

function openProject(id) {
	projectOpen = true;

	var col  = id % 3;
	var row = $("#"+id).parent().parent().parent().attr("id");
	
	var arrow_col =  Math.round($("#" + row).width() / 3) ;
	
	var pos1 = arrow_col - ($(".project-image").width()/2);
	var pos2 = (arrow_col * 2) - ($(".project-image").width()/2);
	var pos3 = (arrow_col * 3) - ($(".project-image").width()/2);


	console.log($(".project-image").width());

	$("#" + row).append("<div id='modal' class='project-open'></div>");
	$(".project-open").append('<div class="arrow-project" ><img src="../public/img/arrow_project.png"></div>');
	$(".project-open").append('<div class="close-project" ><img src="../public/img/close_btn.png"></div>');

	switch(col) {
		case 0:
			console.debug("left",0);
			$(".arrow-project").css("left", pos1);

			break;
		case 1:
			console.debug("middle",pos2);

			$(".arrow-project").css("left", pos2);
			break;
		case 2:
			console.debug("right",arrow_col * 3);
			$(".arrow-project").css("left", pos3);
			
			break;
	}
	

	console.debug($("#" + row).offset());
	console.debug();



}

function closeProject() {
	$("#modal").remove();	
	projectOpen = false;
}

function initProjects() {

	/* Projects */

	$('a.project-link').on('click', function(e) {
		//$(".project-open").css("top", "140px");


		if(projectOpen == true) {
			closeProject();
			openProject($(this).attr('id'));
		
		} else {
			openProject($(this).attr('id'))
			
		}
		e.preventDefault();

		//$('#show-project').modal();
		//
		projectsModalOpened = true;

		/* get project data */
        $.get(
            $(this).attr('href'),
            function( data ) {


            	$(".project-open").append("<div id='project-slides-container'></div>");
            	$("#project-slides-container").append("<div id='project-slides'></div>");
            	$("#project-slides-container").css("width", 600);
            	$("#project-slides-container").css("height", 400);

            	$(".project-open").append("<div id='project-title-open'></div>");
            	$(".project-open").append("<div id='project-description-open'></div>");
            	$(".project-open").append("<div id='project-technology-open'></div>");

                $('#project-title-open').html(data.title);
                $('#project-description-open').html(data.description);
                $('#project-technology-open').html(data.technology);



				if ($('#project-slides').data('plugin_slidesjs')) {
					$('#project-slides').data('plugin_slidesjs').stop();
					$('#project-slides').removeData('plugin_slidesjs');
					$('#project-slides').html('');
				}
				for (var i in data.image_paths) {
					$('#project-slides').append('<img src="'+data.image_paths[i]+'">');
				}
				$('#project-slides').slidesjs({
					width: 100,
					navigation: false
				});
				var l = data.image_paths.length;
				if (l > 1) {
					$('#project-slides .slidesjs-pagination').show().css('width', l * 15);
				} else {
					$('#project-slides .slidesjs-pagination').hide();
				}

            },
            'json'
        );
 
	});
	/*
	$('#show-project').on('hidden.bs.modal', function (e) {
		$('#project-title, #project-description, #project-slides').html('');
		projectsModalOpened = false;
	})
	*/
}
