$(document).ready(function() {

    let heroSlider = new Swiper('.hero-slider', {
        slidesPerView: 1,

        pagination: {
            el: '.hero-slider-pagination',
            clickable: true
          },

        navigation: {
            nextEl: '.hero-slider-buttons .button-next',
            prevEl: '.hero-slider-buttons .button-prev',
        }
    });

    let projectsIndexSlider = new Swiper('.project__items ', {
        slidesPerView: 1.2,
        spaceBetween: 10,
        navigation: {
            nextEl: '.projects__items-nav .button-next',
            prevEl: '.projects__items-nav .button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            744: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            400: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            300: {
                slidesPerView: 1.2,
                spaceBetween: 10
            }
        }
    });

    let newsIndexSlider = new Swiper('.news__items ', {
        slidesPerView: 1.2,
        spaceBetween: 10,
        navigation: {
            nextEl: '.news__items-nav .button-next',
            prevEl: '.news__items-nav .button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            744: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            400: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            300: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });

    let sertificatesSlider = new Swiper('.seftificates__items', {

        spaceBetween: 10,
        navigation: {
            nextEl: '.hero-slider-buttons .button-next',
            prevEl: '.hero-slider-buttons .button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            744: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            400: {
                slidesPerView: 1.2,
                spaceBetween: 10
            },
            300: {
                slidesPerView: 1.2,
                spaceBetween: 10
            }
        }
    });

    // КАРТОЧКА ТОВАРА
    let item_cart_pagination;

    item_cart_pagination = new Swiper('.item-swiper-pagination', {
        slidesPerView: 'auto',
        spaceBetween: 15,
        watchSlidesProgress: true,
        direction: 'vertical',
    });

    let item_cart;

    item_cart = new Swiper('.item-swiper', {
        slidesPerView: "auto",
        centeredSlides: true,
        slidesPerView: 1,
        spaceBetween: 30,
        thumbs: {
          swiper: item_cart_pagination,
        },
    });

    let catSlider_1 = new Swiper('.item__slider--1 .swiper', {
        slidesPerView: 3,
        spaceBetween: 10,
        navigation: {
            nextEl: '.item__slider--1 .button-next',
            prevEl: '.item__slider--1 .button-prev',
        },

        breakpoints: {
            744: {
                slidesPerView: 6,
                spaceBetween: 25
            }
        }
    });

    let catSlider_2 = new Swiper('.item__slider--2 .swiper', {
        slidesPerView: 3,
        spaceBetween: 10,
        navigation: {
            nextEl: '.item__slider--2 .button-next',
            prevEl: '.item__slider--2 .button-prev',
        },

        breakpoints: {
            744: {
                slidesPerView: 6,
                spaceBetween: 25
            }
        }
    });

    let catSlider_3 = new Swiper('.item__slider--3 .swiper', {
        slidesPerView: 2,
        spaceBetween: 10,

        grid: {
            rows: 2,
        },

        navigation: {
            nextEl: '.item__slider--3 .button-next',
            prevEl: '.item__slider--3 .button-prev',
        },

        breakpoints: {
            744: {
                slidesPerView: 3,
                spaceBetween: 25,
            }
        }
    });

    let catSlider_4 = new Swiper('.item__slider--4 .swiper', {
        slidesPerView: 3,
        spaceBetween: 10,
        navigation: {
            nextEl: '.item__slider--4 .button-next',
            prevEl: '.item__slider--4 .button-prev',
        },

        breakpoints: {
            744: {
                slidesPerView: 6,
                spaceBetween: 25
            }
        }
    });

    let catSlider_5 = new Swiper('.item__slider--5 .swiper', {
        slidesPerView: 2,
        spaceBetween: 10,

        grid: {
            rows: 2,
        },

        navigation: {
            nextEl: '.item__slider--5 .button-next',
            prevEl: '.item__slider--5 .button-prev',
        },

        breakpoints: {
            744: {
                slidesPerView: 3,
                spaceBetween: 25,
            }
        }
    });

    let catSlider_6 = new Swiper('.item__slider--6 .swiper', {
        slidesPerView: 2,
        spaceBetween: 10,
        navigation: {
            nextEl: '.item__slider--6 .button-next',
            prevEl: '.item__slider--6 .button-prev',
        },

        breakpoints: {
            744: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        }
    });

})