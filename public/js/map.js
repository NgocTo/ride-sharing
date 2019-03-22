
console.log("mapjs");
var map, infoWindow;
function initMap() {
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 14,
    disableDefaultUI: true
  });
  infoWindow = new google.maps.InfoWindow;

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var marker = new google.maps.Marker({position: pos, map: map});
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
      directionsDisplay.setMap(map);

        var onClickHandler = function() {
          calcRoute(directionsService, directionsDisplay);
        };
        document.getElementById('submit').addEventListener('click', onClickHandler);
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function calcRoute(directionsService, directionsDisplay) {
  var origin = $('#origin').val();
  var destination = $('#destination').val();
  var request = {
    origin: origin,
    destination: destination,
    travelMode: 'DRIVING'
  };
  directionsService.route(request, function(result, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(result);
    }
  });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}