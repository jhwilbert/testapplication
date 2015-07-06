
$(document).ready(function() {

	$("#project-slidesproject-slides-container").css('width', "100%");

	if ($('#project-slides').data('plugin_slidesjs')) {
		$('#project-slides').data('plugin_slidesjs').stop();
		$('#project-slides').removeData('plugin_slidesjs');
		$('#project-slides').html('');
	}

	$('#project-slides').slidesjs({
		navigation: false,
		active: true	
	});

	var l = $("#project-slides").children().length;
	if (l > 1) {
		$('#project-slides .slidesjs-pagination .project-pagination').show().css('width', l * 15);
	} else {
		$('#project-slides .slidesjs-pagination .project-pagination').hide();
	}


	var heightImage = $("#project-slides").height();

	$("#grey-bg").css("height", (heightImage + 10) + "px");	


});

