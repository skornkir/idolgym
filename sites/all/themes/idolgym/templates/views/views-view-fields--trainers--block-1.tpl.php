<div class="trainer-single">
        <div class="left">
            <a href="/node/<?php print  $row->nid; ?>">
                <div class="title">
                    <?php print $fields['title']->raw; ?>
                </div>
                <div class="directions">
                    Персональный тренер
                </div>
            </a>
        </div>
    <a href="/node/<?php print  $row->nid; ?>">
        <div class="right">
            <?php print $fields['field_image']->content; ?>
        </div>
    </a>
</div>