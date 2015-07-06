
var projectsModalOpened = false;
var interval = undefined;
var projectsArray = [];
var currId;

$(document).ready(function() {
	//initProjects();

});

/*
* initializes the Projects section
*/
var projectOpen = false;

function openModal() {

	projectOpen = true;

	$(".project-modal").addClass("project-modal-open");
	$(".project-modal").addClass("col-md-12");
	$(".project-modal").css("height", $(window).height() + "px");
	$(".project-modal").css("top",$(".navbar").height() + "px");
	$("body").css("overflow", "hidden");

	$("#modal-container").addClass("col-md-12");
//	$("#modal-container").addClass("center-block");

	$('.close-project').on('click', function(e) {
		closeProject();
	});

}

function closeProject() {

	projectOpen = false;

	$("#modal-container").html("");
	$(".project-modal-open").removeClass("project-modal-open");
	$(".project-modal-open").addClass("project-modal-close");
	
	$("body").css("overflow", "auto");	
}


/**********************************/
/**********************************/
/**********************************/



function getNext() {

	if(currId == projectsArray.length) {
		currId = 0;
	} else {
		currId++;
	}
	console.debug("next",currId);

	loadProjectContent(projectsArray[currId]);


}

function getPrev() {

	if (currId == 0) {
		currId = projectsArray.length;
	} else {
		currId = currId - 1;
	}

	loadProjectContent(projectsArray[currId]);
	console.debug("previous",currId);
	

}


/**********************************/
function loadProjectContent(obj) {

		/* get project data */
        $.get(
            $(obj).attr('href'),
            function( data ) {

    			if($(window).width() < 768) {
					$("#modal-container").append("<div id='project-slides-container' class='col-md-4'></div>");
					$("#project-slides-container").css('width', "100%");
			
				
    			} else {
	    			$("#modal-container").append("<div id='project-slides-container' class='col-md-8'></div>");
					//$("#project-slides-container").css('width', 800);
    			}
            	
            	$("#project-slides-container").append("<div id='project-slides'></div>");	


            	/* Nav */
            	//$("#modal-container").append('<div class="col-md-4" id="btn-nav"><div class="project-button" id="prev-btn">Anterior</div><div class="project-button" id="next-btn">Próximo</div></div>')



      			/* Content */		
            	$("#modal-container").append("<div id='project-title-open' class='col-md-4'></div>");
            	$("#modal-container").append("<div id='project-location-open' class='col-md-4'></div>");
            	$("#modal-container").append("<div id='project-description-open' class='col-md-4'></div>");
            	$("#modal-container").append("<div id='project-technology-open' class='col-md-4'></div>");

            	/* Data */
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

}




function initProjects() {
	/* Projects */

	$('.projects').children().each(function(i,e) {
		projectsArray.push(e);
		$(e).attr("id",i);
	});

	$('a.project-link').on('click', function(e) {
		console.debug();
		currId = parseInt($(this).attr('id'));

		e.preventDefault();
		openModal();
		loadProjectContent(projectsArray[currId]);
	});



	$('#next-btn').on('click', function() {
		getNext();
	});
	$('#prev-btn').on('click', function(){
		getPrev()
	});

}
