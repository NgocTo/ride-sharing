$(document).ready(function () {

    $('#dismiss').on('click', function () {
        // hide sidebar
        $('.sidebar').removeClass('active');
        $('.sidebar').removeClass('bg-white');
        $('.sidebar').addClass('bg-transparent');
        // $('a[aria-expanded=true]').attr('aria-expanded', 'true');
        $('.sidebar').collapse("toggle");
    });

    $('#sidebarCollapse').on('click', function () {
        // open sidebar
        $('.sidebar').addClass('active');
        $('.sidebar').addClass('bg-white');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});