
var projectsModalOpened = false;
var interval = undefined;

$(document).ready(function() {
    //interval = setInterval(getNext, 2000); // milliseconds


	initProjects();

});




/*
* initializes the Projects section
*/
var projectOpen = false;

function openModal() {

	projectOpen = true;

	$(".project-modal").addClass("project-modal-open");
	$(".project-modal").css("height", $(window).height() + "px");
	$(".project-modal").css("top",$(".navbar").height() + "px");
	$("body").css("overflow", "hidden");

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



function getNext(obj) {
	console.debug();
	console.debug("curr", $('.project-link'));
	console.debug("first", $('.project-link').first());
    var $curr = $('.project-link'),
        $next = ($curr.next().length) ? $curr.next() : $('.project-link').first();

    transition($curr, $next);
}

function getPrev() {
    var $curr = $('.project-link'),
        $next = ($curr.prev().length) ? $curr.prev() : $('.project-link').last();
    transition($curr, $next);
}

function transition($curr, $next) {
    clearInterval(interval);

    $next.css('z-index', 2).fadeIn('slow', function () {
        $curr.hide().css('z-index', 0);
        $next.css('z-index', 1);
    });
}

/**********************************/
function loadProjectContent(obj) {

		/* get project data */
        $.get(
            $(obj).attr('href'),
            function( data ) {

    			if($(window).width() < 768) {
    				console.debug("mobile");

					$("#modal-container").append("<div id='project-slides-container' class='col-md-4'></div>");
					$("#project-slides-container").css('width', "100%");
			
				
    			} else {
    				console.debug("desktop");
	    			$("#modal-container").append("<div id='project-slides-container' class='col-md-8'></div>");
					$("#project-slides-container").css('width', 800);
    			}
            	
            	$("#project-slides-container").append("<div id='project-slides'></div>");	


    			$('#next-btn').on('click', function() {

    				getNext();
    			});
    			$('#prev-btn').on('click', function(){
    				getPrev()
    			});

            	/* Nav */
            	/*
				$('#next-btn').on('click', function(e) {
					console.debug("clicked next");
					console.debug($(obj).next().attr('href'));
				});

				$('#prev-btn').on('click', function(e) {
					console.debug("clicked prev");
					console.debug($(obj).prev().attr('href'));
				});
				*/
			
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

	$('a.project-link').on('click', function(e) {

		e.preventDefault();
		openModal();
		loadProjectContent(this);
	});

}
