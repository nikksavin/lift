$(document).ready(function() {

    // Yandex карта page contacts


    if($("#map").length) {

        function addYaMaps() {
            var myMap;
            ymaps.ready(init);

            function init() {
                myMap = new ymaps.Map('map', {
                    center: [59.982919, 30.362194],
                    zoom: 14,
                    controls: []
                }),
                    myPlacemark = new ymaps.Placemark([59.982919, 30.362194], {
                        balloonContentBody: 'ООО "СЕВЕРО-ЗАПАДНАЯ ПРОМЫШЛЕННАЯ КОРПОРАЦИЯ"',
                        balloonContentFooter: "+7 (812) 334-66-56<br>+7 (812) 295-54-46<br>info@szpk-parking.ru",
                    }, {
                        // iconLayout: 'default#image',
                        // iconImageHref: '/local/templates/avangard/images/map-pin.svg',
                        // iconImageSize: [30, 42],
                        // iconImageOffset: [-37, -45],
                        // balloonOffset: [-25, -5]
                    });
                myMap.geoObjects.add(myPlacemark);
                ymapsTouchScroll(myMap, {preventScroll: true, preventTouch: true});
            }
        }

        addYaMaps();
    }

})