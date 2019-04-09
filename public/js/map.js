
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
    disableDefaultUI: true
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
  var datetime = $('#time').val();
  var date = moment(datetime).format('YYYY-MM-DD');
  var time = moment(datetime).format('hh:mm:ss');
  var destination = $('#dropOff').val();
  $.ajax({
      type: 'GET',
      url: '/rides/'+origin+'/'+destination,
      success: function(data) {
        response = data;
        $('#directionResponse').html(response.routes);
        calcRoute(origin, destination);
        $.ajax({
          type: 'POST',
          url: '/rides/store',
          data:{origin: origin, destination:destination, date:date, time:time},
          success: function(data) {
            $('.flash-message').html(`<button type="button" class="close" data-dismiss="alert">×</button>	
              <p><strong>Your trip has been successfully planned!</strong> Check out your trip details in your ride history.</p>`);
            $('.flash-message').show(500);
            hideFlashMessage($('.flash-message'));
          },
        });
      },
  });
});

$('#checkRide').on('click', function (e) {
  e.preventDefault();
  if ($('#pickUp').val()) {
    var origin = $('#pickUp').val();
  } else {
    var origin = currentAddress; 
  }
  var destination = $('#dropOff').val();
  calcRoute(origin, destination);
  $.ajax({
    type: 'GET',
    url: '/getCurrentRides',
    success: function(data) {
      var output = '';
      console.log(data);
      $.each(JSON.parse(data), function(i, d) {
        
        output += `
<li class="list-group-item mx-4 p-0">
    <div class="col-3">
      <div class="img-containerSmall text-center"><img src="img/default-profile.jpg" alt="default profile"></div>
    </div>
    <div class="col-7">
      <p class="name mb-0">${d.user.firstName} ${d.user.lastName}</p>
      <p class="ratingSmall">${d.driverInfo.driverRating} <i class="fas fa-star fa-xs"></i></p>
      <p><strong>Rules: </strong>${d.driverInfo.driverRules}</p>
    </div>
    <div class="col-2 text-green text-right">
      <p class="name mb-0">$${d.estimatedPrice}</p>
    </div>
    <a href="ride/${d.id}" class="ride-list">See details</a>
</li><hr/>`
      });
      $('#driversList').html(`<ul class="list-group">` + output + `</ul>`);
    }
  });
});


$('#directionForm input:text').on('input', fillDropDown);
$('.predictions').on('click', function(e){
  e.stopPropagation();
  $('.prediction').on('click', fillTextInput);
})

function fillDropDown(e) {
  var terms = $(this).val();
  $.ajax({
    type: 'GET',
    url: '/rides/'+terms,
    success: function(response) {
      var output = '';
      var data = JSON.parse(response);
      $.map(data, function (d) {
        output += `<div class="prediction">${d.text}</div>`;
      })
      e.currentTarget.nextElementSibling.children[0].innerHTML = output;
      e.currentTarget.nextElementSibling.children[0].classList.add('shadow');
    },
  });
}
function fillTextInput(e) {
  e.stopPropagation();
  var current = e.currentTarget.innerText;
  e.currentTarget.parentNode.parentNode.previousSibling.previousSibling.value = current;
  $('.predictions').html('');
  $('.predictions').removeClass('shadow');
}
$( document ).ready(function(){
  var datetime = moment().format('YYYY-MM-DDThh:mm:ss');
  $('#time').val(datetime);  
});

function hideFlashMessage(message) {
  setTimeout(function() {
    message.hide(500);
    message.html('');
  }, 5000);
}