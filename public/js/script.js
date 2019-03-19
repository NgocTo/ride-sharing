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
        // $('.sidebar').addClass('active');
        $('.sidebar').toggleClass('bg-white');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

    $('#submit').on('click', function (e) {
        e.preventDefault();
        var origin = $('#origin').val();
        var destination = $('#destination').val();
        $.ajax({
            type: "GET",
            // url: '/users/getDirection?origin='+ origin + '&destination=' + destination,
            url: '/users/'+origin+'/'+destination,
            // data: {origin: origin, destination: destination},
            success: function() {
                $('#directionResponse').html(`success`);
            },
        });
    });
});