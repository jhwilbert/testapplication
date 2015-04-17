
var projectsModalOpened = false;

$(document).ready(function() {

	initProjects();

});

/*
* initializes the Projects section
*/
var projectOpen = false;

function openProject(obj) {
	projectOpen = true;
	
	var id = $(obj).attr("id");
	console.debug("id", id)
	var num_cols;
	var col  = id % num_cols;
	var row;
	var viewPortWidth = $(window).width();
	
	if (viewPortWidth < 768) {
		num_cols = 1;
		console.debug("mobile")
		//row = "row_" + $("#"+id).attr("id");
		$("#" + col).append("<div id='modal-open-' class='col-md-12'></div>");
	} else {
		console.debug("desktop");
		row = $("#"+id).parent().parent().parent().attr("id");
		$("#" + row).append("<div id='modal-open' class='col-md-12'></div>");

	}
	
	console.debug("row defined", row);

	// var arrow_col =  Math.round($("#" + row).width() /  num_cols) ;
	
	// var pos1 = arrow_col - ($(".project-image").width() + 10);
	// var pos2 = (arrow_col * 2) - ($(".project-image").width() + 10);
	// var pos3 = (arrow_col * 3) - ($(".project-image").width() + 10);


	
	$("#modal-open").append("<div class='project-open'></div>");
	
	$(".project-open").append('<div class="arrow-project" ><img src="../public/img/arrow_project.png"></div>');
	$(".project-open").append('<div class="close-project" ><img src="../public/img/close_btn.png"></div>');

	$('.close-project').on('click', function(e) { 
		closeProject();	});

	/*
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
	
	*/



}

function closeProject() {
	$("#modal-open").remove();	
	projectOpen = false;
}

function initProjects() {

	/* Projects */

	$('a.project-link').on('click', function(e) {
		//$(".project-open").css("top", "140px");


		if(projectOpen == true) {
			closeProject();
			openProject(this);
		
		} else {
			openProject(this)
			
		}
		e.preventDefault();

		//$('#show-project').modal();
		//
		//projectsModalOpened = true;

		/* get project data */
        $.get(
            $(this).attr('href'),
            function( data ) {


            	$(".project-open").append("<div id='project-slides-container' class='col-md-8'></div>");
            	$("#project-slides-container").append("<div id='project-slides'></div>");
            	
            	
            	$("#project-slides-container").css("width", $("#project-slides-container").width());
            	
			
            	$(".project-open").append("<div id='project-title-open' class='col-md-4'></div>");
            	$(".project-open").append("<div id='project-location-open' class='col-md-4'></div>");
            	$(".project-open").append("<div id='project-description-open' class='col-md-4'></div>");
            	 $(".project-open").append("<div id='project-technology-open' class='col-md-4'></div>");


                $('#project-title-open').html(data.title);
                $('#project-description-open').html(data.description);
                $('#project-technology-open').html(data.technology);
                $('#project-location-open').html(data.location);



				if ($('#project-slides').data('plugin_slidesjs')) {
					$('#project-slides').data('plugin_slidesjs').stop();
					$('#project-slides').removeData('plugin_slidesjs');
					$('#project-slides').html('');
				}
				for (var i in data.image_paths) {
					$('#project-slides').append('<img src="'+data.image_paths[i]+'">');
				}
				$('#project-slides').slidesjs({

					navigation: false,
					active: true	
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
