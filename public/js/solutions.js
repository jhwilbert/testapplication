
var solutionsModalOpened = false;

$(document).ready(function() {

	$('.solution-plus').on('click', function(e) {
		e.preventDefault();

		$('#show-solution').modal();
		solutionsModalOpened = true;

		/* get project data */
        $.get(
            $(this).attr('href'),
            function( data ) {
                $('#solution-title').html(data.title);
				if ($('#solution-slides').data('plugin_slidesjs')) {
					$('#solution-slides').data('plugin_slidesjs').stop();
					$('#solution-slides').removeData('plugin_slidesjs');
					$('#solution-slides').html('');
				}
				var img_html;
				for (var i in data.images) {
					img_html = '<div><img src="'+data.images[i].path+'">';
					img_html += '<span class="subtitle">'+data.images[i].description+'</span></div>';
					$('#solution-slides').append(img_html);
				}
				$('#solution-slides').slidesjs({
					height: '300px',
					navigation: { active: true, effect: "slide"}
				});
				var l = data.images.length;
				if (l > 1) {
					$('#solution-slides .slidesjs-pagination').show().css('width', l * 15);
				} else {
					$('#solution-slides .slidesjs-pagination').hide();
				}
				$('#solution-description').html($('.slidesjs-container img').first().attr('title'));
            },
            'json'
        );

	});

});


function getSolutionsSkrollrEvents(name, direction) {
	//console.log(name, direction);
	if (solutionsModalOpened && (
		(name == solutionsBpUp && direction == 'up') ||
		(name == solutionsBpDn && direction == 'down')
	)) 
		$('#show-solution').modal('hide');

}