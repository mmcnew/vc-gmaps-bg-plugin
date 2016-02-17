
     
    function showGoogleMaps() {
     
        var latLng = new google.maps.LatLng(position[0], position[1]);
     
        var mapOptions = {
            streetViewControl: false, // hide the yellow Street View pegman
            scaleControl: false, // allow users to zoom the Google Map
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: latLng,
			zoom: zoomLvl
        };
     
        map = new google.maps.Map(document.getElementById('googlemaps'),
            mapOptions);
     
        // Show the default red marker at the location
        marker = new google.maps.Marker({
            position: latLng,
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP
        });
    }
     
    google.maps.event.addDomListener(window, 'load', showGoogleMaps);
