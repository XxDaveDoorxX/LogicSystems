/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM
/*-----------------------------------------------------------------------------------*/
$(document).ready(function () {

    function mantenerDatos(n,em) {
        $('#formNamep').val(n);
        $('#formEmailp').val(em);
    }


    $('#formPopup .error').remove();
    var form = $('#formPopup'); // contact form
    var submit = $('#contactForm_submit_popup'); // submit button
    var alertx = $('.successMsg'); // alertx div for show alert message
    // form submit event
    form.on('submit', function (e) {

        var n=$('#formNamep').val(); var em=$('#formEmailp').val();

        var hasError = false;
        $('.requiredp').each(function () {
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
                url: 'functions/procesaFormDownload.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form datae
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
                        mantenerDatos(n,em);
                        form.fadeIn(1800);

                        $('#overlay, #PleaseWait').hide();

                    }, 4000);

                    $('.successMsg').html(data);

                },
                error: function (e) {
                    //console.log(e)
                }

            });
            $('.requiredp').val('');
        }
        return false;
    });

    $('#formPopup input').focus(function () {
        $('#formPopup .error').remove();
    });
    $('#formPopup textarea').focus(function () {
        $('#formPopup .error').remove();
    });

    $('body').prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1001; display: none;"></div>');
    $('body').prepend('<div id="PleaseWait" class="wait"><img src="images/ajax-loader.gif" /></div>');

});
