<?php

$image = array(
    'style_name' => $row->field_field_image[0]['rendered']['#image_style'], // style name
    'path' => $row->field_field_image[0]['rendered']['#item']['uri'],
    'alt' => $row->node_title ,
    'title' => $row->node_title,
);
?>
<div class="trainter-image">
    <? print theme('image_style', $image); ?>
    <a href="/node/<? print $row->nid;?>">
        <div class="bg-trainer">

        </div>
    </a>
    <div class="icon">
        <i class="fas fa-search"></i>
    </div>
</div>
