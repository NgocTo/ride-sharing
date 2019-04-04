$(document).ready(function () {

    /* Set the width of the side navigation to 250px */
    $(".openClick").click(function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      $("#overlay").addClass("overlay-active");
    });

    /* Set the width of the side navigation to 0 */
    $(".closebtn, #overlay").click(function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      $("#overlay").removeClass("overlay-active");
    });
    
    $('#submitTrip').click(function() {
      $('.alert').show();
      $('.alert').fadeOut();
    });
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#togBtn').on('click', function (e) {
        e.preventDefault();
        if ($('#togBtn').prop('checked')) {
          $.ajax({
              type: "GET",
              url: '/users/checkDriver',
              success: function(data) {
                  console.log(data);
              },
          });
        }
      });
});