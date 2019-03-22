$(document).ready(function () {
    var item;
    if ($('.testi_slider').length) {
        $('.testi_slider').owlCarousel({
            // loop: true,
            margin: 500,
            items: 1,
            // nav: true,
            autoplay: false,
            smartSpeed: 1000,
            // dots: true,
            responsiveClass: true,
            mouseDrag: false,
            touchDrag: false,
            pullDrag: false,
			// navText : ["Prev","Next"]
        })
    }
    
    $('#driver').click(function(){
        if ( $('#driver').prop('checked') == true ){
            // $('#register-heading').html('Create an account');
            $('#register-submit').html('Next');
            $('#register-submit').click(function(){
                $('.testi_slider').trigger('next.owl.carousel');
            })
        } else if ( $('#driver').prop('checked') == false ) {
            $('#register-submit').html('Register');
        }
    });
    $('#driver-submit').click(function(){
        $('.testi_slider').trigger('next.owl.carousel');
    })

    
    $('.register-back').each(function(){
        $(this).click(function(event){
            event.preventDefault();
            $(this).trigger('prev.owl.carousel');
        });
    });
});
