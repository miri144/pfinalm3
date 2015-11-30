// Code for directions.php

$(document).ready(function(){
	
	/* The outline of this code is from https://developers.google.com/maps/tutorials/fundamentals/adding-a-google-map */
	function initialize() {
        var mapOptions = {
			center: new google.maps.LatLng(42.44989, -76.48049),
			zoom: 14,
			mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions)
      }
	  
      google.maps.event.addDomListener(window, 'load', initialize);

});
