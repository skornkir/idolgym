(function ($) {

    Drupal.behaviors.schedule = {
        attach: function (context, settings) {


            $('#filter_direction').change(function (e) {
                var type = $(this).val();
                var club = $('.events').attr('club');
                $(this).find('a').addClass("active");
                $('#all-events').css('opacity', '0.5');
                var trainer = $('#filter_trainer').val();
                console.log(trainer);
                console.log(type);
                $.ajax({
                    'url':'/schedule_refresh',
                    'data': 'type=' + type + '&club=' + club + '&trainer=' + trainer,
                    'method':'POST',
                    'success':function(data) {
                        /*  $('#all-events').css('opacity', '1.0');*/
                        $('.schedule-wrapper').html(data.data);
                    },
                    'error':function(jqXHR,textStatus,errorThrown ){},
                })
            });

            $('#filter_trainer').change(function (e) {
                var trainer = $(this).val();
                var club = $('.events').attr('club');
                var type = $('#filter_direction').val();
                $('#all-events').css('opacity', '0.5');
                console.log(trainer);
                $.ajax({
                    'url':'/schedule_refresh',
                    'data': 'trainer=' + trainer + '&club=' + club + '&type=' + type,
                    'method':'POST',
                    'success':function(data) {
                        /*  $('#all-events').css('opacity', '1.0');*/
                        $('.schedule-wrapper').html(data.data);
                    },
                    'error':function(jqXHR,textStatus,errorThrown ){},
                })
            });



            $('#filter_club').change(function (e) {
                console.log('club');
                var club = $(this).val();
                console.log(club);
                if(club == 37){
                    window.location.href = "/shedule/nagatino";
                }
                if(club == 38){
                    window.location.href = "/shedule/lavochkina";
                }
            });

            $('#block-system-main').on('click', 'li', function (e) {
                var type = $(this).attr('type');
                $('#block-system-main li a').removeClass('active');
                $(this).find('a').addClass("active");
                $('#all-events').css('opacity', '0.5');
                var club = $('.events').attr('club');

                $.ajax({
                    'url':'schedule_refresh',
                    'data': 'type=' + type + '&club=' + club,
                    'method':'POST',
                    'success':function(data) {
                      /*  $('#all-events').css('opacity', '1.0');*/
                        $('.schedule-wrapper').html(data.data);
                    },
                    'error':function(jqXHR,textStatus,errorThrown ){},
                })
            });

            $('.schedule-link').click(function (e) {
                var direction = $(this).attr('direction_id');
                var trainer = $(this).attr('trainer_id');
                var trainer = $(this).attr('trainer_id');
                console.log(trainer);
                console.log(direction);
                $.ajax({
                    'url':'/schedule_modal_refresh',
                    'data': 'trainer=' + trainer + '&direction=' + direction,
                    'method':'POST',
                    'success':function(data) {
                        console.log(data.output);
                        $('.schedule-modal .modal-dialog').html(data.output);
                        $('.newmodal').click();
                    },
                    'error':function(jqXHR,textStatus,errorThrown ){},
                })

            })

            $('.time-day').click(function (e) {
                var direction = $(this).attr('direction_id');
                console.log(direction);
                var trainer = $(this).attr('trainer_id');
                console.log(trainer);
                console.log(direction);
                $.ajax({
                    'url':'schedule_modal_refresh',
                    'data': 'trainer=' + trainer + '&direction=' + direction,
                    'method':'POST',
                    'success':function(data) {
                        console.log(data.output);
                        $('.schedule-modal .modal-dialog').html(data.output);
                        $('.newmodal').click();
                    },
                    'error':function(jqXHR,textStatus,errorThrown ){},
                })

            })
        }
    };
})(jQuery)