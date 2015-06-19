

$(document).ready(function() {

	console.debug("aaaa");
	$('#structure_slides').slidesjs({
		navigation: { active: true, effect: "slide"},
		pagination: false
	});

	$(".timeline").children().each(function(obj) {
		console.debug(this);
		var container = $('.description-container');
		var textRight = $('.description-text-right');
		var textLeft = $('.description-text-left');

		var image = $('img');
		var imageWidth = $(this).find(image).width();

		console.debug(imageWidth);
		$(this).find(container).css('width', imageWidth + 'px');
		$(this).find(textRight).css('width', imageWidth + 'px');
		$(this).find(textLeft).css('width', imageWidth + 'px');
		
		//$(this).find(image).css('border', "1px solid red");


	});
	//console.debug($(".description-container"));

});





