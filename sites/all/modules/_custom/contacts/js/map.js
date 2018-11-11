(function ($) {

    Drupal.behaviors.map2 = {
        attach: function (context, settings) {

            var w = window.innerWidth;
            if(w < 600){
                $('.accordion.lavochkina').removeClass('active');
            }

            $('.contacts__icon').click(function (e) {
                $(this).parent().parent().toggleClass('active');
            });

            ymaps.ready(function () {
                var myMap = new ymaps.Map('map', {
                        center: [55.751574, 37.573856],
                        zoom: 10
                    }, {
                        searchControlProvider: 'yandex#search'
                    }),

                    // Создаём макет содержимого.
                    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                        '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                    ),

                    myPlacemarkWithContent = new ymaps.Placemark([55.682622, 37.629422], {
                        hintContent: 'Idol Нагатино',
                        balloonContent: 'Москва, ул. Нагатинская д. 1/33',
                       /* iconContent: '12'*/
                    }, {
                        // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#imageWithContent',
                        // Своё изображение иконки метки.
                        iconImageHref: 'sites/all/themes/idolgym/images/logo.png',
                        // Размеры метки.
                        iconImageSize: [48, 48],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-24, -24],
                        // Смещение слоя с содержимым относительно слоя с картинкой.
                        iconContentOffset: [15, 15],
                        // Макет содержимого.
                        iconContentLayout: MyIconContentLayout
                    });

                myPlacemarkWithContent2 = new ymaps.Placemark([55.8635909, 37.4857694], {
                    hintContent: 'Idol Нагатино',
                    balloonContent: 'Москва, ул. Лавочкина, 23',
                    /* iconContent: '12'*/
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: 'sites/all/themes/idolgym/images/logo.png',
                    // Размеры метки.
                    iconImageSize: [48, 48],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-24, -24],
                    // Смещение слоя с содержимым относительно слоя с картинкой.
                    iconContentOffset: [15, 15],
                    // Макет содержимого.
                    iconContentLayout: MyIconContentLayout
                });

                myMap.geoObjects
                    .add(myPlacemarkWithContent);
                myMap.geoObjects
                    .add(myPlacemarkWithContent2);
            });

        }
    };
})(jQuery)