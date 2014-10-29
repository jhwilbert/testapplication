
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
				for (var i in data.images) {
					$('#solution-slides').append('<img src="'+data.images[i].path+'" title="'+data.images[i].description+'">');
				}
				$('#solution-slides').slidesjs({
					width: 780,
					navigation: { active: true, effect: "slide"},
					callback: {
						complete: function(number) {
							$('#solution-description').html($('.slidesjs-container img').eq(number-1).attr('title'));
						}
					}
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