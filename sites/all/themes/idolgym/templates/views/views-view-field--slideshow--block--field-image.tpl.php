<?php

if(isset($row->field_field_image[0]['rendered']['#item']['uri'])) :
    $uri = $row->field_field_image[0]['rendered']['#item']['uri'];
    $url = file_create_url($uri);
?>
<div class="slideshow-image-block image">
    <img src="<?=$url?>" />
    <?php /*print $output; */?>
</div>
<div class="wr-view">
    <div class="content-view">
        <div class="in-view pos-right">
            <?php print $row->field_body[0]['rendered']['#markup']; ?>
            <!--<div class="die-butt"><div class="buy-tarifs"><a class="inline cboxElement" href="#pop-order" tabindex="0">Узнать подробнее</a></div></div>-->
        </div>
    </div>
</div>
<?php else: ?>
    <div class="slideshow-image-block video">
       тут видео
    </div>
<?php endif; ?>
