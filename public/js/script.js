$(document).ready(function () {

    // $('#dismiss').on('click', function () {
    //     // hide sidebar
    //     $('.sidebar').removeClass('active');
    //     $('.sidebar').removeClass('bg-white');
    //     $('.sidebar').addClass('bg-transparent');
    //     // $('a[aria-expanded=true]').attr('aria-expanded', 'true');
    //     $('.sidebar').collapse("toggle");
    // });

    $('#sidebarCollapse').on('click', function () {
        // open sidebar
        $('.sidebar').addClass('active');
        $('.sidebar').toggleClass('bg-white');
        // $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        $('#sidebarCollapse').remove();
        $('.overlay').addClass('active');
    });
    $('.overlay').on('click', function() {

    })
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
              url: '/users/setSession',
              success: function(data) {
                  console.log(data);
              },
          });
        }
      });
});