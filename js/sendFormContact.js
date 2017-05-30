/*-----------------------------------------------------------------------------------*/
/*    CONTACT
 /*-----------------------------------------------------------------------------------*/
$(document).ready(function () {

    function mantenerDatos(n,ep,es,ct,p,em,m) {
        $('#formNamec').val(n);
        $('#empresac').val(ep);
        $('#estadoc').val(es);
        $('#ciudadc').val(ct);
        $('#telefonoc').val(p);
        $('#formEmailc').val(em);
        $('#messagec').html(m);
    }


    $('#formSecctionContact .error').remove();
    var form = $('#formSecctionContact'); // contact form
    var submit = $('#contactForm_submit_contacto_c'); // submit button
    var alertx = $('.successMsg'); // alertx div for show alert message
    // form submit event
    form.on('submit', function (e) {

        var n=$('#formNamec').val(); var ep = $('#empresac').val(); var es = $('#estadoc').val(); var ct = $('#ciudadc').val(); var p=$('#telefonoc').val(); var em=$('#formEmailc').val(); var m=$('#messagec').val();

        var hasError = false;
        $('.requiredc').each(function () {
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
                url: 'functions/procesaFormContact.php', // form action url
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
                        mantenerDatos(n,ep,es,ct,p,em,m);
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

    $('#formSecctionContact input').focus(function () {
        $('#formSecctionContact .error').remove();
    });
    $('#formSecctionContact textarea').focus(function () {
        $('#formSecctionContact .error').remove();
    });

    $('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1001; display: none;"></div>');
    $('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');

});
