<div class="swiper-container reviews-slider swiper-container-horizontal swiper-container-autoheight">
    <div class="swiper-wrapper" style="height: 346px; transform: translate3d(0px, 0px, 0px);">
        <!--<div class="swiper-slide swiper__list swiper-slide-active video" style="width: 750px; margin-right: 30px;">
            <div class="preheader"></div>
            <div class="content-video">
                <iframe width="100%" height="400" allowfullscreen
                    src="https://www.youtube.com/embed/8HhGiB6rhyQ?rel=0&controls=0&showinfo=0&autoplay=1&mute=0&loop=1&hd=1&modestbranding=1&version=3&loop=1&playlist=8HhGiB6rhyQ" frameborder="0" allow="autoplay; encrypted-media"></iframe>
            </div>
            <div class="afterfooter"></div>
        </div>-->
        <?php
        $rows = views_get_view_result('slideshow', 'block');
        foreach ($rows as $row):
        ?>
                <div class="swiper-slide swiper__list swiper-slide-active" style="width: 750px; margin-right: 30px;">
                    <div class="image">
                        <?php print drupal_render($row->field_field_image[0]['rendered']); ?>
                    </div>
                </div>
        <?php endforeach; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
    <!-- Add Arrows -->
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</div>