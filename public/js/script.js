$(document).ready(function () {

  /* Set the width of the side navigation to 250px */
  $(".openClick").click(function openNav() {
    $("#mySidenav").css("width", "250px");
    $("#overlay").addClass("overlay-active");
  });

  /* Set the width of the side navigation to 0 */
  $(".closebtn, #overlay").click(function closeNav() {
    $("#mySidenav").css("width", "0");
    $("#overlay").removeClass("overlay-active");
  });
  
  // $('#submitTrip').click(function() {
  //   $('.alert').show();
  //   $('.alert').fadeOut();
  // });
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

  $('#toggleBtn').on('click', function () {
    if ($('#toggleBtn').prop('checked') == true) {
      $.ajax({
          type: "GET",
          url: '/setDriverMode',
          success: function(data) {
            location.reload();
          },
      });
    } else if ($('#toggleBtn').prop('checked') == false) {
      $.ajax({
          type: "GET",
          url: '/setRiderMode',
          success: function(data) {
            location.reload();
          },
      });
    }
  });
});