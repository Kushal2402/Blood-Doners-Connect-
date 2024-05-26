
      var map;
      function loadMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 22.5726, lng: 88.3639},
          zoom: 8
        });
		var marker = new google.maps.Marker({
               position: new google.maps.LatLng(22.5726, 88.3639),
               map: map,
            });
      }
    
	