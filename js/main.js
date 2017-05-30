
/*-----------------------------------------------------------------------------------*/
/*    FLEXSLIDER HOME
 /*-----------------------------------------------------------------------------------*/

$('.flexslider-home').flexslider({
    animation: "fade",
    slideshow: true,
    slideshowSpeed: 4000,
    animationSpeed: 600,
    smoothHeight: true,
    controlsContainer: ".flex-container-home",
    directionNav: true,
    controlNav: false,
    useCSS: false

});


/*-----------------------------------------------------------------------------------*/
/*    CONTACT FOOTER
 /*-----------------------------------------------------------------------------------*/
$(document).ready(function () {

    function mantenerDatos(n,p,em,m) {
        $('#formName').val(n);
        $('#phone').val(p);
        $('#formEmail').val(em);
        $('#message').html(m);
    }


    $('#contactForm .error').remove();
    var form = $('#contactForm'); // contact form
    var submit = $('#contactForm_submit_contacto'); // submit button
    var alertx = $('.successMsg'); // alertx div for show alert message
    // form submit event
    form.on('submit', function (e) {

        var n=$('#formName').val(); var p=$('#phone').val(); var em=$('#formEmail').val(); var m=$('#message').val();

        var hasError = false;
        $('.requiredf').each(function () {
            if (jQuery.trim($(this).val()) === '') {
                $(this).parent().append('<span class="error"><i class="fa fa-exclamation-triangle"></i></span>');
                hasError = true;
            } else if ($(this).hasClass('email')) {
                var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!emailReg.test(jQuery.trim($(this).val()))) {
                    $(this).parent().append('<span class="error"><i class="fa fa-exclamation-triangle"></i></span>');
                    hasError = true;
                }
            }
        });
        if (!hasError) {
            e.preventDefault(); // prevent default form submit
            // sending ajax request through jQuery
            $('#overlay, #PleaseWait').show();
            $.ajax({
                url: 'functions/procesaFormFooter.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form datae
                recaptcha:grecaptcha.getResponse(),
                beforeSend: function () {
                    alertx.fadeOut();
                    //submit.html('Sending....'); // change submit button text
                },
                success: function (data){
                    form.fadeOut(300);
                    alertx.html(data).fadeIn(1000); // fade in response data
                    setTimeout(function() {
                        alertx.html(data).fadeOut(300);
                        $('#submit').val('');
                        mantenerDatos(n,p,em,m);
                        form.fadeIn(1800);

                        console.log(data);
                        $('#overlay, #PleaseWait').hide();

                    }, 4000);

                    if(data == "Captcha incorrecto"){
                        $('#overlay, #PleaseWait').hide();

                    }
                    $('.successMsg').html(data);

                },
                error: function (e) {
                    //console.log(e)
                }

            });
            $('.required').val('');
        }
        return false;
    });

    $('#contactForm input').focus(function () {
        $('#contactForm .error').remove();
    });
    $('#contactForm textarea').focus(function () {
        $('#contactForm .error').remove();
    });

    $('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1001; display: none;"></div>');
    $('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');

});



/*-----------------------------------------------------------------------------------*/
/* 		PRODUCTS Slider
 /*-----------------------------------------------------------------------------------*/
$(document).ready(function() {
    $("#owl-products").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 4,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2],
        slideBy: 4,
        stopOnHover : true,
        navigation : true, // Show next and prev buttons
        pagination : false,
        navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    });
});


/*-----------------------------------------------------------------------------------*/
/* 		EVENTS Slider
 /*-----------------------------------------------------------------------------------*/
$(document).ready(function() {
    $("#owl-events").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 3,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2],
        slideBy: 4,
        stopOnHover : true,
        navigation : true, // Show next and prev buttons
        pagination : false,
        navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    });
});



/*-----------------------------------------------------------------------------------*/
/* 	ANIMATION
 /*-----------------------------------------------------------------------------------*/
var wow = new WOW({
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       100,          // distance to the element when triggering the animation (default is 0)
    mobile:       false        // trigger animations on mobile devices (true is default)
});
wow.init();
