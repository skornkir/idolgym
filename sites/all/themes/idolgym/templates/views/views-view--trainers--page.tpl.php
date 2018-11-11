<div class="filter-trainers">
    <div class="club-link">
        <a href="/trainers/nagatinskay" class="club nagatino <?php  (arg(1) == 'nagatinskay') ? print 'active' : ''; ?>">
            Фитнес клуб Нагатинская
        </a>
        <a href="/trainers/lavochkina" class="club lavochkina <?php   (arg(1) == 'lavochkina') ? print 'active' : '';?>">
            Фитнес клуб Лавочкина
        </a>
    </div>
    <div class="clear"></div>
    <div class="filter">
        <select id="filter-direction">
            <option value="35">Гимнастика</option>
            <option value="24">Кроссфит</option>
            <option value="36">Тяжёлая атлетика</option>
            <option value="34">Базовый курc</option>
            <option value="27">Кроссфит памп</option>
            <option value="26">Функионал</option>
            <option value="25">Кроссфит-зарядка</option>
            <option value="33">Растяжка</option>
        </select>
    </div>
</div>
<div class="clear"></div>

<div class="views-trainers-desktop  <?php print $classes; ?>">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
        <?php print $title; ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($header): ?>
        <div class="view-header">
            <?php print $header; ?>
        </div>
    <?php endif; ?>

    <?php if ($exposed): ?>
        <div class="view-filters">
            <?php print $exposed; ?>
        </div>
    <?php endif; ?>

    <?php if ($attachment_before): ?>
        <div class="attachment attachment-before">
            <?php print $attachment_before; ?>
        </div>
    <?php endif; ?>

    <?php if ($rows): ?>
        <div class="view-content">
            <?php print $rows; ?>
        </div>
    <?php elseif ($empty): ?>
        <div class="view-empty">
            <?php print $empty; ?>
        </div>
    <?php endif; ?>

    <?php if ($pager): ?>
        <?php print $pager; ?>
    <?php endif; ?>

    <?php if ($attachment_after): ?>
        <div class="attachment attachment-after">
            <?php print $attachment_after; ?>
        </div>
    <?php endif; ?>

    <?php if ($more): ?>
        <?php print $more; ?>
    <?php endif; ?>

    <?php if ($footer): ?>
        <div class="view-footer">
            <?php print $footer; ?>
        </div>
    <?php endif; ?>

    <?php if ($feed_icon): ?>
        <div class="feed-icon">
            <?php print $feed_icon; ?>
        </div>
    <?php endif; ?>

</div><?php /* class view */ ?>

<div class="views-trainers-mobile">
    <?php
        print views_embed_view('trainers', 'block_1', 37);
    ?>
</div>
