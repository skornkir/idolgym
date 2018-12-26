<div class="container1">
            <div class="header">Отзывы</div>
            <div class="swiper-container reviews-slider swiper-container-horizontal swiper-container-autoheight">
                <div class="swiper-wrapper" style="height: 346px; transform: translate3d(0px, 0px, 0px);">
                <?php
                    $rows = views_get_view_result('reviews', 'block');
                    foreach ($rows as $row):
                ?>
                        <div class="swiper-slide swiper__list swiper-slide-active" style="width: 750px; margin-right: 30px;">
                            <div class="review__content body">
                               <?php print $row->field_body[0]['raw']['value']; ?>
                            </div>
                            <div class="image">
                                <?php print drupal_render($row->field_field_photo_reviewer[0]['rendered']); ?>
                            </div>
                            <div class="title">
                                <?php print $row->node_title  ; ?>
                            </div>
                        </div>
                <?php endforeach; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                <!-- Add Arrows -->
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
</div>