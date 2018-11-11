(function ($) {
    Drupal.behaviors.price = {
        attach: function (context, settings) {
            $('.tabs-price li a').click(function(x) {
                var id_block = $(this).attr('id-block');
                $('.prices .collapse').removeClass('show');
                $('.tabs-price li a').removeClass('active');
                $('#' + id_block).addClass('show');
                $(this).addClass('active');
            });
        }
    };
})(jQuery)