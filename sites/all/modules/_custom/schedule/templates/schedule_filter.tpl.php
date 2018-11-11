<div class="club-link">
    <a href="/shedule/nagatino" class="club nagatino <?php  (arg(1) == 'nagatino') ? print 'active' : '';?>">
        Фитнес клуб Нагатинская
    </a>
    <a href="/shedule/lavochkina" class="club lavochkina <?php (arg(1) == 'lavochkina') ? print 'active' : '';?>">
        Фитнес клуб Лавочкина
    </a>
</div>
<div class="clear"></div>
<?
    $trainer_options = schedule_get_nids('trainer');
    $direction_options = schedule_get_tids(6);
?>
<div class="schedule-filter">
    <div class="onehalf">
        <select id="filter_trainer" placeholder="Выбрать тренера">
            <option value="<?php print 0; ?>"><?php print "Все тренера"; ?></option>
            <?php foreach ($trainer_options as $key => $trainer): ?>
                <option value="<?php print $key; ?>"><?php print $trainer; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="onehalf">
        <select id="filter_direction">
            <option value="<?php print 0; ?>"><?php print "Все направления"; ?></option>
            <?php foreach ($direction_options as $key => $direction): ?>
                <option value="<?php print $key; ?>"><?php print $direction; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div class="clear"></div>