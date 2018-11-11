(function ($) {
    /*https://idangero.us/swiper/api/#pagination*/
    Drupal.behaviors.idol = {
            attach: function (context, settings) {

            $("#filter-direction, #filter_direction").select2({
                placeholder: "Выберите направления",
                allowClear: true
            });

            $("#filter_trainer").select2({
                placeholder: "Выберите тренера",
                allowClear: true
            });

            $('#filter-direction, #filter_trainer, #filter_direction').val(null).trigger('change');

             $('.container-menu').click(function(x) {
                $(this).toggleClass("change");
                $('.mobile-nav-body').toggleClass("active")
            });

            $('.mobile-nav-body #block-system-main-menu > .menu > li > span').click(function (e) {
               $(this).parent().toggleClass('active');
            });

            $('.filter-trainers #filter-club').change(function (e) {
                if($(this).val() == 1){
                    window.location.href = "/trainers/nagatinskay";
                }
                if($(this).val() == 2){
                    window.location.href = "/trainers/lavochkina";
                }
            });

            $('.filter-trainers #filter-direction').change(function (e) {
                var direction = $(this).val;
            });

            if(window.location.pathname == '/trainers/nagatinskay'){
                $('.filter-trainers #filter-club').val(1);
            }
            if(window.location.pathname == '/trainers/lavochkina'){
                $('.filter-trainers #filter-club').val(2);
            }

            var width = $(window).width();
            $('.wr-view').css('width', width + "px");

            $( window ).resize(function() {
                $('.wr-view').css('width', width + "px");
                resizeClubs();
            });

            function  resizeClubs() {
                var width = $(window).width() + 30;
                if(width < 500){
                    $('.club-link .nagatino').html('ФК Нагатино');
                    $('.club-link .lavochkina').html('ФК Лавочкина');
                }
                else{
                    $('.club-link .nagatino').html('Фитнес-клуб Нагатино');
                    $('.club-link .lavochkina').html('Фитнес-клуб Лавочкина');
                }
            }

            $('.contacts.front ul li').click(function (e) {
                var club = $(this).attr('club');
                console.log(club);
                $('.contacts.front ul li').removeClass('current');
                $(this).addClass('current');
                $('.contacts.front .contact').removeClass('active');
                $('.contacts.front .contact.' + club).addClass('active');

            });

            var mySwiper = new Swiper('.swiper-container', {
                speed: 400,
                spaceBetween: 100,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
            });

            $(document).ready(function(){

                $(window).scroll(function(){
                    if ($(this).scrollTop() > 50) {
                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                resizeClubs();

                $('.scrollup').click(function(){
                    $("html, body").animate({ scrollTop: 0 }, 600);
                    return false;
                });
            });
        }
    };
})(jQuery)