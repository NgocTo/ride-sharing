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
    
    $('#ifDriver').click(function(){
        if ( $('#ifDriver').prop('checked') == true ){
            // $('#register-heading').html('Create an account');
            $('#register-submit').html(`
            <a href="#" class="btn btn-primary text-center btn-block text-bold mb-3">Next</a>
            `);
            $('#register-submit').click(function(e){
                e.preventDefault;
                $('.testi_slider').trigger('next.owl.carousel');
            })
        } else if ( $('#ifDriver').prop('checked') == false ) {
            $('#register-submit').html(`
            <button type="submit" class="btn btn-primary text-center btn-block text-bold mb-3">Register</button>
            `);
        }
    });
    $('#driver-submit').click(function(e){
        e.preventDefault;
        $('.testi_slider').trigger('next.owl.carousel');
    })

    
    $('.register-back').each(function(){
        $(this).click(function(event){
            event.preventDefault();
            $(this).trigger('prev.owl.carousel');
        });
    });
});
