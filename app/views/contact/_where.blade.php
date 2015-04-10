<script src="https://maps.googleapis.com/maps/api/js"></script>

<section class="section section-gray" id="section-contact">

	<div class="inner-content container">
		
		<h2>{{Lang::get('messages.contact.where')}}</h2>

		  <div id="map-canvas"></div>

		  <script>

				var style = [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-100},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-100},{"lightness":40}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-10},{"lightness":30}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":-60},{"lightness":10}]},{"featureType":"landscape.natural","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":-60},{"lightness":60}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"},{"saturation":-100},{"lightness":60}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"},{"saturation":-100},{"lightness":60}]}];
				
				function initialize() {
					var myLatlng = new google.maps.LatLng(-19.9506258,-43.9370374);

				    var mapCanvas = document.getElementById('map-canvas');
		    		
		    		var styledMap = new google.maps.StyledMapType(style, { name:"Grayscale" });   
		    		

		    		var mapOptions = {
		      			center: myLatlng,
		      			zoom:16,
		      			mapTypeId: google.maps.MapTypeId.ROADMAP,
		   				mapTypeControlOptions: {
		      				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		    			}
		    		}
		    		var map = new google.maps.Map(mapCanvas, mapOptions);
					map.mapTypes.set('map_style', styledMap);
		  			map.setMapTypeId('map_style');

		    		var image = '../public/img/icon-map.png';

		    	  	var marker = new google.maps.Marker({
				      position: myLatlng,
				      map: map,
				      title: 'Projesom',
				      icon: image
				  });	    		
		    	
		  		}
	  			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
	</div>

</section>