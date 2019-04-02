
console.log("mapjs");
var map, infoWindow;
var directionsDisplay;
var directionsService;
var response;
var pos;
var currentAddress;
function initMap() {
  
  directionsService = new google.maps.DirectionsService();
  directionsDisplay = new google.maps.DirectionsRenderer();

  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 55.585901, lng: -105.750596},
    zoom: 14,
    // disableDefaultUI: true
  });

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var marker = new google.maps.Marker({position: pos, map: map});
      map.setCenter(pos);
      geocodePosition(pos);
      
    }, showError)
  } else {
    alert("Geolocation is not supported by this browser.");
  }
  directionsDisplay.setMap(map);
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      alert("User denied the request for Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
      alert("Location information is unavailable.");
      break;
    case error.TIMEOUT:
      alert("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
      alert("An unknown error occurred.");
      break;
  }
}

function calcRoute(origin, destination) {
  // origin = $('#pickUp').val();
  // destination = $('#dropOff').val();
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

function geocodePosition(pos) {
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      currentAddress = responses[0].formatted_address;
    } else {
      alert('Cannot determine address at this location.');
    }
  });
}


$('#submitTrip').on('click', function (e) {
  e.preventDefault();
  if ($('#pickUp').val()) {
    var origin = $('#pickUp').val();
  } else {
    var origin = currentAddress; 
  }
  console.log(origin);
  var destination = $('#dropOff').val();
  $.ajax({
      type: "GET",
      url: '/users/'+origin+'/'+destination,
      success: function(data) {
          response = data;
          $('#directionResponse').html(response.routes);
          calcRoute(origin, destination);
          console.log(response);
      },
  });
});
$('#pickUp').on('input', function() {
  var terms = $('#pickUp').val();
  console.log(terms);
  $.ajax({
    type: "GET",
    url: '/users/'+terms,
    success: function(data) {
      // return {
      //   results: $.map(data, function (d) {
          console.log(data);
          // return {
          //   text: d.text,
          //   id: d.id
          // }
        // })
      // };
    },
  });
});
