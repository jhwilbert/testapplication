var s;

$(document).ready(function() {

	s = skrollr.init();

	//The options (second parameter) are all optional. The values shown are the default values.
	skrollr.menu.init(s, {
	    handleLink: function(link) {
	        return positions[$(link).attr('href')];
	    }
	});


	/* projects */

	$('a.project-link').on('click', function() {
        $.get(
            $(this).attr('href'),
            function( data ) {
                console.log(data);
            },
            'json'
        );
 
        return false;
	});
	
});
