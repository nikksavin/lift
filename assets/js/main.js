$(document).ready(function() {

    // ДЛЯ ВСЕХ(!!!!!!) ВСПЛЫВАЮЩИХ ОКОН [Если кликаем вне всплывающего поля, представленных ниже]
    $('html').on('click', function(e) {
        if (!$(e.target).closest('.nav').length &&
            !$(e.target).closest('.header__burger').length &&
            !$(e.target).closest('.cat__aside').length &&
            !$(e.target).closest('.cat__filter-mobile-btn').length) {
            $('body').removeClass('overflow-hidden')
            $('#page').removeClass('bg-overlay')

            $('.nav').removeClass('opened')
            $('.header__burger').removeClass('opened')
            $('.cat__aside').removeClass('opened')
        }
    })

    function openMobMenu() {
        $('.header__burger').on('click', function(e) {

            if ($('.cat__aside').hasClass('opened')) {
                $('body').removeClass('overflow-hidden')
                $('#page').removeClass('bg-overlay')
                $(this).removeClass('opened')
                $('.cat__aside').removeClass('opened')
            } else {
                $('body').toggleClass('overflow-hidden')
                $('#page').toggleClass('bg-overlay')
                $(this).toggleClass('opened')
                $('.nav').toggleClass('opened')
            }

        })
    }

    openMobMenu();

    function slideMobMenu() {
        if ($(window).width() < 1024) {
            $('.has-child > a').on('click', function(e) {
                e.preventDefault()
                $(this).parent().toggleClass('opened')
                $(this).next().slideToggle()
            })
        }
    }

    slideMobMenu();

     // Navbar
     const $navbar = $('.header__inner')
     const $navbarBtn = $('.hidden-navbar span')
     const $nav_vList = $('.nav__menu')
     const $nav_hList = $('.hidden-navbar .hidden-list')
     const $nav_hListMenu = $('.hidden-navbar')
     const nav_breaks = []

     function updateNavbar() {
         let availableSpace;

         if ($(window).width() >= 1024) {
             availableSpace = $navbar.width() - ($navbarBtn.width() + 325);
         }

         if ($nav_vList.width() > availableSpace) {
             nav_breaks.push($nav_vList.width())
             $nav_vList.children().last().prependTo($nav_hList)

             if ($nav_hListMenu.hasClass('hidden')) {
                 $nav_hListMenu.removeClass('hidden')
             }
         } else {
             if (availableSpace > nav_breaks[nav_breaks.length - 1]) {
               $nav_hList.children().first().appendTo($nav_vList)
               nav_breaks.pop()
             }

             if (nav_breaks.length < 1) {
                 $nav_hListMenu.addClass('hidden');
             }
           }

         if ($nav_vList.width() > availableSpace) {
             updateNavbar();
         }
     }

     $(window).resize(function() {
         if ($(window).width() >= 1024) {
             updateNavbar()
         }
     })

     if ($(window).width() >= 1024) {
         updateNavbar()
     }



    // LIGHT GALLERY INIT

    function showLightgallery() {

        if($(".seftificates__items a").length) {
            $(".seftificates__items a").attr("data-fancybox","gallery");
            $(".seftificates__items a").fancybox();
        }

    }

    showLightgallery();

    $('#success-close').on("click", function(e) {
        $('.is-close').trigger('click')
    })

    $('input[type="tel"]').inputmask({"mask": "+7 (999) 99-99-99", "showMaskOnHover": false});

    // TABS

	$(".js-faq-title").on("click", function(e) {

		e.preventDefault();
		var $this = $(this);

		if (!$this.hasClass("faq__active")) {
			$(".js-faq-content").slideUp(800);
			$(".js-faq-title").removeClass("faq__active");
			$('.js-faq-rotate').removeClass('faq__rotate');
		}

		$this.toggleClass("faq__active");
		$this.next().slideToggle();
		$('.js-faq-rotate',this).toggleClass('faq__rotate');
	});

    // CATALOG FILTERS

    $('.cat__filters-item p').on('click', function() {
        $(this).parent().toggleClass('active')
        $(this).parent().find('.cat__filter-inner').slideToggle()
    })

    $('.cat__filter-mobile-btn').on('click', function() {
        $('body').toggleClass('overflow-hidden')
        $('#page').toggleClass('bg-overlay')
        $('.cat__aside').toggleClass('opened')

        $('.header__burger').toggleClass('opened')
    })

    // ELEMENTS

    $('.element-item').on('click', function(e) {

        if ($(this).hasClass('open')) {
            $(this).removeClass('open')
        } else {
            $('.element-item').removeClass('open')
            $(this).addClass('open')
        }

    })

    $('.element-steps').on('click', function(e) {

        if (!$(e.target).closest('.element-item').length) {
            $('.element-item').removeClass('open')
        }

    })

    // CALC

    let sliderUi_1 = $(".input-slider-1 .slider-ui");

    if (sliderUi_1.length > 0) {
        sliderUi_1.slider({
            animate: "slow",
            range: "min",
            min: 450,
            max: 1000,
            value: 630,
            slide : function(event, ui) {
                $( ".input-slider-1 .ui-slider-handle" ).attr('data-val', ui.value);
            }
        });

        $( ".input-slider-1 .ui-slider-handle" ).attr('data-val', sliderUi_1.slider("value"));
    }

    let sliderUi_2 = $(".input-slider-2 .slider-ui");

    if (sliderUi_2.length > 0) {
        sliderUi_2.slider({
            animate: "slow",
            range: "min",
            min: 2,
            max: 23,
            value: 3,
            slide : function(event, ui) {
                $( ".input-slider-2 .ui-slider-handle" ).attr('data-val', ui.value);
            }
        });

        $( ".input-slider-2 .ui-slider-handle" ).attr('data-val', sliderUi_2.slider("value"));
    }

    let sliderUi_3 = $(".input-slider-3 .slider-ui");

    if (sliderUi_3.length > 0) {
        sliderUi_3.slider({
            animate: "slow",
            range: "min",
            min: 1,
            max: 3,
            value: 1.5,
            step: 0.5,
            slide : function(event, ui) {
                $( ".input-slider-3 .ui-slider-handle" ).attr('data-val', ui.value);
            }
        });

        $( ".input-slider-3 .ui-slider-handle" ).attr('data-val', sliderUi_3.slider("value"));
    }

    // INPUTMASK INIT

    $('input[name="form-phone"]').inputmask({"mask": "+7 (999) 99-99-99", "showMaskOnHover": false});

    // COPY CORDS ON CLICK
    function copyCords() {
        spans = document.querySelectorAll("#copy-coords");
        for (const span of spans) {
            span.onclick = function() {
                document.execCommand("copy");
                alert('Координаты скопированы');
            }

            span.addEventListener("copy", function(event) {
                event.preventDefault();
                if (event.clipboardData) {
                    event.clipboardData.setData("text/plain", span.textContent);
                    console.log(event.clipboardData.getData("text"))
                }
            });

        }
    }

    copyCords();


});
