$(document).ready(function() {

    // HERO SLIDER BTN
    Fancybox.bind("#btn-get-request", {
        on : {
            closing : () => {
                $('.popup-success').hide();
                $('.p-form__container, .popup-form__title').show();
            }
        }
    });

    // GET CP DETAIL CARD BTN
    Fancybox.bind("#get-cp-detail", {
        on : {
            done : () => {
                let itemName = $('#get-cp-detail').attr("data-item");
                $('input[name="form-item"]').val(itemName);
            },
            closing : () => {
                $('.popup-success').hide();
                $('.p-form__container, .popup-form__title').show();
            }
        }
    });

    // GET QUESTION DETAIL BTN
    Fancybox.bind("#get-question-detail", {
        on : {
            done : () => {
                let itemName = $('#get-question-detail').attr("data-item");
                $('input[name="form-item"]').val(itemName);
            },
            closing : () => {
                $('.popup-success').hide();
                $('.p-form__container, .popup-form__title').show();
            }
        }
    });

    // CALCULATE PAGE BTN
    Fancybox.bind("#get-calculate-btn", {
        on : {
            done : () => {
                let itemName = $('#get-calculate-btn').attr("data-item");
                $('input[name="form-item"]').val(itemName);
            },
            closing : () => {
                $('.popup-success').hide();
                $('.p-form__container, .popup-form__title').show();
            }
        }
    });


    // HERO SLIDER GET CALLBACK BTN
    Fancybox.bind("#hero-callback__btn", {
        on : {
            done : () => {
                let itemName = $('#hero-callback__btn').attr("data-item");
                $('input[name="form-item"]').val(itemName);
            },
            closing : () => {
                $('.popup-success').hide();
                $('.p-form__container, .popup-form__title').show();
            }
        }
    });

    // FOOTER GET CALLBACK BTN
    Fancybox.bind(".footer__middle-btn", {
        on : {
            done : () => {
                let itemName = $('#hero-callback__btn').attr("data-item");
                $('input[name="form-item"]').val(itemName);
            },
            closing : () => {
                $('.popup-success').hide();
                $('.p-form__container, .popup-form__title').show();
            }
        }
    });

    // MOBILE NAV GET CALLBACK BTN
    Fancybox.bind("#callback-mob-btn", {
        on : {
            done : () => {
                let itemName = $('#hero-callback__btn').attr("data-item");
                $('input[name="form-item"]').val(itemName);
            },
            closing : () => {
                $('.popup-success').hide();
                $('.p-form__container, .popup-form__title').show();
            }
        }
    });


    // SHOW SUCESS MESSAGE AFTER FORM SENDED
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        var id = event.detail.contactFormId;
        console.log(id);
        if ( id == 484 || id == 505 || id == 511 || id == 516 || id == 750 ) {
            $('.p-form__container, .popup-form__title, .wpcf7-response-output').hide();
            $('.popup-success').show();
        }
    }, false );


});

