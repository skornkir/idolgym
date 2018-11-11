<div class="clear"></div>

<div id="all-events" class="events" club="<?php print $club_tid;?>" aria-labelledby="ui-id-1" class="desktop ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel"
     aria-hidden="false">
    <table class="timetable">
        <thead>
            <tr class="row_gray">
                <th></th>
                <th>Пн</th>
                <th>Вт</th>
                <th>Ср</th>
                <th>Чт</th>
                <th>Пт</th>
                <th>Сб</th>
                <th>Вс</th>
            </tr>
        </thead>
        <tbody>
        <?php  foreach ($full_timetable as $key => $items): ?>
            <tr>
                <td class="time" type="0">
                    <?php print $key; ?>
                </td>
                <?php foreach ($items as $item):  ?>
                    <td class="schedule-link <? (empty($item)) ? print "empty" : print "";?>"
                        direction_id="<?php (empty($item)) ? print "" : print $item['direction_id']; ?>"
                        trainer_id="<?php (empty($item)) ? print "" : print $item['trainer_id']; ?>">
                            <?php if(empty($item)): ?>
                                <div class="timetable_cell empty">
                                </div>
                            <?php else: ?>
                                <div class="timetable_cell fill <?php print $item['class_machine']; ?>">
                                    <div class="direction"><?php print $item['class']; ?></div>
                                    <div class="trainer"><?php print $item['trainer']; ?></div>
                                </div>
                            <?php endif; ?>
                    </td>
                <? endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!--<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-target
    </button>
</p>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
    </div>
</div>-->

<div class="mobile events events"  club="<?php print $club_tid;?>" >
    <div class="day">
        <div class="title-day" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
            <span>Понедельник</span>
            <span class="minus">
                 <i class="fas fa-minus"></i>
            </span>
            <span class="plus">
                 <i class="fas fa-plus"></i>
            </span>
        </div>
        <div class="body-day collapse show " id="collapseExample" >
            <?php foreach ($full_timetable as $key => $cell):  ?>
                <?php if(!empty($cell[1])): ?>
                    <div class="time-day" direction_id="<?php (empty($cell[1])) ? print "" : print $cell[1]['direction_id']; ?>"
                         trainer_id="<?php (empty($cell[1])) ? print "" : print $cell[1]['trainer_id']; ?>">
                       <!-- <div class="time">
                            <?php /*print $key; */?>
                        </div>-->
                        <div class="cell">
                            <div class="time-workout"><?php print $key; ?></div>
                            <div class="direction"><?php print $cell[1]['class']; ?></div>
                            <div class="trainer"><?php print $cell[1]['trainer']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="day">
        <div class="title-day" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
            <span>Вторник</span>
            <span class="minus">
                 <i class="fas fa-minus"></i>
            </span>
            <span class="plus">
                 <i class="fas fa-plus"></i>
            </span>
        </div>
        <div class="body-day collapse" id="collapseExample2" >
            <?php foreach ($full_timetable as $key => $cell): ?>
                <?php if(!empty($cell[2])): ?>
                    <div class="time-day" direction_id="<?php (empty($cell[2])) ? print "" : print $cell[2]['direction_id']; ?>"
                         trainer_id="<?php (empty($cell[2])) ? print "" : print $cell[2]['trainer_id']; ?>">
                        <div class="cell">
                            <div class="time-workout"><?php print $key; ?></div>
                            <div class="direction"><?php print $cell[2]['class']; ?></div>
                            <div class="trainer"><?php print $cell[2]['trainer']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
   <div class="day">
       <div class="title-day" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
           <span>Среда</span>
           <span class="minus">
                 <i class="fas fa-minus"></i>
            </span>
           <span class="plus">
                 <i class="fas fa-plus"></i>
            </span>
       </div>
       <div class="body-day collapse"  id="collapseExample3" >
            <?php foreach ($full_timetable as $key => $cell): ?>
                <?php if(!empty($cell[3])): ?>
                    <div class="time-day" direction_id="<?php (empty($cell[3])) ? print "" : print $cell[3]['direction_id']; ?>"
                         trainer_id="<?php (empty($cell[3])) ? print "" : print $cell[3]['trainer_id']; ?>">
                        <div class="cell">
                            <div class="time-workout"><?php print $key; ?></div>
                            <div class="direction"><?php print $cell[3]['class']; ?></div>
                            <div class="trainer"><?php print $cell[3]['trainer']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="day">
        <div class="title-day" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
            <span>Четверг</span>
            <span class="minus">
                 <i class="fas fa-minus"></i>
            </span>
            <span class="plus">
                 <i class="fas fa-plus"></i>
            </span>
        </div>
        <div class="body-day collapse"  id="collapseExample4" >
            <?php foreach ($full_timetable as $key => $cell): ?>
                <?php if(!empty($cell[4])): ?>
                    <div class="time-day" direction_id="<?php (empty($cell[4])) ? print "" : print $cell[4]['direction_id']; ?>"
                         trainer_id="<?php (empty($cell[4])) ? print "" : print $cell[4]['trainer_id']; ?>">
                        <div class="cell">
                            <div class="time-workout"><?php print $key; ?></div>
                            <div class="direction"><?php print $cell[4]['class']; ?></div>
                            <div class="trainer"><?php print $cell[4]['trainer']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="day">
        <div class="title-day" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
            <span>Пятница</span>
            <span class="minus">
                 <i class="fas fa-minus"></i>
            </span>
            <span class="plus">
                 <i class="fas fa-plus"></i>
            </span>
        </div>
        <div class="body-day collapse"  id="collapseExample5" >
            <?php foreach ($full_timetable as $key => $cell): ?>
                <?php if(!empty($cell[5])): ?>
                    <div class="time-day" direction_id="<?php (empty($cell[5])) ? print "" : print $cell[5]['direction_id']; ?>"
                         trainer_id="<?php (empty($cell[5])) ? print "" : print $cell[5]['trainer_id']; ?>">
                        <div class="cell">
                            <div class="time-workout"><?php print $key; ?></div>
                            <div class="direction"><?php print $cell[5]['class']; ?></div>
                            <div class="trainer"><?php print $cell[5]['trainer']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="day">
        <div class="title-day" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">
            <span>Суббота</span>
            <span class="minus">
                 <i class="fas fa-minus"></i>
            </span>
            <span class="plus">
                 <i class="fas fa-plus"></i>
            </span>
        </div>
        <div class="body-day collapse" id="collapseExample6" >
            <?php foreach ($full_timetable as $key => $cell): ?>
                <?php if(!empty($cell[6])): ?>
                    <div class="time-day" direction_id="<?php (empty($cell[6])) ? print "" : print $cell[6]['direction_id']; ?>"
                         trainer_id="<?php (empty($cell[6])) ? print "" : print $cell[6]['trainer_id']; ?>">
                        <div class="cell">
                            <div class="time-workout"><?php print $key; ?></div>
                            <div class="direction"><?php print $cell[6]['class']; ?></div>
                            <div class="trainer"><?php print $cell[6]['trainer']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="day">
        <div class="title-day" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">
            <span>Воскресенье</span>
            <span class="minus">
                 <i class="fas fa-minus"></i>
            </span>
            <span class="plus">
                 <i class="fas fa-plus"></i>
            </span>
        </div>
        <div class="body-day collapse" id="collapseExample7" >
            <?php foreach ($full_timetable as $key => $cell): ?>
                <?php if(!empty($cell[7])): ?>
                    <div class="time-day" direction_id="<?php (empty($cell[7])) ? print "" : print $cell[7]['direction_id']; ?>"
                         trainer_id="<?php (empty($cell[7])) ? print "" : print $cell[7]['trainer_id']; ?>">
                        <div class="cell">
                            <div class="time-workout"><?php print $key; ?></div>
                            <div class="direction"><?php print $cell[7]['class']; ?></div>
                            <div class="trainer"><?php print $cell[7]['trainer']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="newmodal" data-toggle="modal" data-target="#exampleModal2"></div>

<div class="modal schedule-modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
    </div>
</div>
