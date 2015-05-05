
$(document).ready(function() {

	var l = $('#megabanners .megabanner-image').length;

	if ($('#megabanners .megabanner-image').length > 1) {

		$('#megabanners').slidesjs({
			width: 1008,
			/*height: 600,*/
			navigation: false,
			play: {
				active: false,
				// [boolean] Generate the play and stop buttons.
				// You cannot use your own buttons. Sorry.
				effect: "slide",
				// [string] Can be either "slide" or "fade".
				interval: 5000,
				// [number] Time spent on each slide in milliseconds.
				auto: true,
				// [boolean] Start playing the slideshow on load.
				swap: true,
				// [boolean] show/hide stop and play buttons
				pauseOnHover: false,
				// [boolean] pause a playing slideshow on hover
				restartDelay: 2500
				// [number] restart delay on inactive slideshow
			}		
		});

		$('#megabanners .slidesjs-pagination').show().css('width', l * 15);

	} else {
		
		$('#megabanners').show();
		$('#megabanners .slidesjs-pagination').hide();

	}

});


