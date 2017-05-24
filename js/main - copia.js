/*-----------------------------------------------------------------------------------*/
/*    jQuery to collapse the navbar on scroll
 /*-----------------------------------------------------------------------------------*/
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        event.preventDefault();
    });
});

$(function() {
    $('.nav a').on('click', function(){
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });
});

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
/*    FANCYBOX
 /*-----------------------------------------------------------------------------------*/

$(document).ready(function() {

    $("#single_2").fancybox({
        openEffect	: 'elastic',
        closeEffect	: 'elastic',

        helpers : {
            title : {
                type : 'inside'
            }
        }
    });

});

/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM
 /*-----------------------------------------------------------------------------------*/
$(document).ready(function(){

    function mantenerDatos(n,p,em,ciu,est,m) {
        $('#formName').val(n);
        $('#phone').val(p);
        $('#formEmail').val(em);
        $('#ciudad').val(ciu);
        $('#estado').val(est);
        $('#message').html(m);
    }

    $('#contactForm .error').remove();
    var form = $('#contactForm'); // contact form
    var submit = $('#contactForm_submit'); // submit button
    var alertx = $('.successMsg'); // alertx div for show alert message
    // form submit event
    form.on('submit', function (e) {

        var n=$('#formName').val(); var p=$('#phone').val(); var em=$('#formEmail').val(); var ciu=$('#ciudad').val(); var est=$('#estado').val(); var m=$('#message').val();

        var hasError = false;
        $('.required').each(function () {
            if (jQuery.trim($(this).val()) === '') {
                $(this).parent().append('<span class="error"><i class="fa fa-exclamation-triangle"></i></span>');
                hasError = true;
            } else if ($(this).hasClass('email')) {
                var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!emailReg.test(jQuery.trim($(this).val()))) {
                    $(this).parent().append('<span class="error"><i class="fa fa-exclamation-triangle"></i></span>');
                    hasError = true;
                }
            }else if($(this).hasClass('phone')){
                var telReg= /^[5-9]{1}[0-9]{9}$/;
                if(!telReg.test(jQuery.trim($(this).val()))){
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
                url: 'Class/procesa_contacto.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form datae
                recaptcha:grecaptcha.getResponse(),
                beforeSend: function () {
                    alertx.fadeOut();
                    submit.html('Sending....'); // change submit button text
                },
                success: function (data){
                    form.fadeOut(300);
                    alertx.html(data).fadeIn(1000); // fade in response data
                    setTimeout(function() {
                        alertx.html(data).fadeOut(300);
                        $('#submit').val('');
                        mantenerDatos(n,p,em,ciu,est,m);
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
                    console.log(e)
                }

            });
            $('.required').val();
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
    $('body').prepend('<div id="PleaseWait" class="wait"><img src="css/ajax-loader.gif" /></div>');

});


/*-----------------------------------------------------------------------------------*/
/*    CONTACT POPUP FORM
 /*-----------------------------------------------------------------------------------*/
$(document).ready(function () {

    function mantenerDatos(cod,n,p,em,ciu,est,m) {
        $('#codigop').val(cod);
        $('#formNamep').val(n);
        $('#phonep').val(p);
        $('#formEmailp').val(em);
        $('#ciudadp').val(ciu);
        $('#estadop').val(est);
        $('#messagep').html(m);
    }

    $('#contactFormPopup .error').remove();
    var form = $('#contactFormPopup'); // contact form
    var submit = $('#contactForm_submit_popup'); // submit button
    var alertx = $('.successMsg'); // alertx div for show alert message
    // form submit event
    form.on('submit', function (e) {

        var cod=$('#codigop').val(); var n=$('#formNamep').val(); var p=$('#phonep').val(); var em=$('#formEmailp').val(); var ciu=$('#ciudadp').val(); var est=$('#estadop').val(); var m=$('#messagep').val();

        var hasError = false;
        $('.required').each(function () {
            if (jQuery.trim($(this).val()) === '') {
                $(this).parent().append('<span class="error"><i class="fa fa-exclamation-triangle"></i></span>');
                hasError = true;
            } else if ($(this).hasClass('email')) {
                var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!emailReg.test(jQuery.trim($(this).val()))) {
                    $(this).parent().append('<span class="error"><i class="fa fa-exclamation-triangle"></i></span>');
                    hasError = true;
                }
            }else if($(this).hasClass('phone')){
                var telReg= /^[5-9]{1}[0-9]{9}$/;
                if(!telReg.test(jQuery.trim($(this).val()))){
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
                url: 'Class/procesa_popup.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form datae
                recaptcha:grecaptcha.getResponse(),
                beforeSend: function () {
                    alertx.fadeOut();
                    submit.html('Sending....'); // change submit button text
                },
                success: function (data){
                    form.fadeOut(300);
                    alertx.html(data).fadeIn(1000); // fade in response data
                    setTimeout(function() {
                        alertx.html(data).fadeOut(300);
                        $('#contactForm_submit_popup').val('');
                        mantenerDatos(cod,n,p,em,ciu,est,m);
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
                    console.log(e)
                }

            });
            $('.required').val();
        }
        return false;
    });

    $('#contactFormPopup input').focus(function () {
        $('#contactFormPopup .error').remove();
    });
    $('#contactFormPopup textarea').focus(function () {
        $('#contactFormPopup .error').remove();
    });

    $('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1060; display: none;"></div>');
    $('body').prepend('<div id="PleaseWait" class="wait"><img src="css/ajax-loader.gif" /></div>');

});