<?php

$image = array(
    'style_name' => "trainer_420",
    'path' => $node->field_image['und'][0]['uri'],
    'alt' => $node->title,
    'title' => $node->title,
);
$url= file_create_url($node->field_image['und'][0]['uri']);
?>

    <div class="row">
        <div class="col-md-6">
            <div class="trainer_profile_img">
                <img src="<?php print $url;?>" alt="">
            </div>
        </div>
         <div class="col-md-6">
            <div class="trainer_profile_info">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="color-default"><?php print $node->title;?></h2>
                       <!-- <span class="color-dark">
                            <?php /*(isset($node->field_direction['und'][0]['value'])) ? print $node->field_direction['und'][0]['value'] : print "" ;*/?>
                        </span>-->
                    </div>
                </div>
                <div class="row trainer-skills">
                    <div class="col-md-12">
               <!--            <div class="tr">
                                <label>Имя :</label>
                                <span><?php /*(isset($node->field_direction['und'][0]['value'])) ? print $node->field_direction['und'][0]['value'] : print "" ;*/?></span>
                            </div>-->
                           <div class="tr">
                                <label>Рост :</label>
                                <span><?php (isset($node->field_height['und'][0]['value'])) ? print $node->field_height['und'][0]['value'] : print "" ;?> см</span>
                            </div>
                            <div class="tr">
                                <label>Вес :</label>
                                <span><?php (isset($node->field_weight['und'][0]['value'])) ? print $node->field_weight['und'][0]['value'] : print "" ;?> кг </span>
                            </div>
                            <div class="tr">
                                <label>Стаж :</label>
                                <span><?php (isset($node->field_eperience['und'][0]['value'])) ? print $node->field_eperience['und'][0]['value'] : print "" ;?>  лет </span>
                            </div>
                        <div class="tr">
                            <label>Cf level :</label>
                            <span><?php (isset($node->field_cflevel['und'][0]['value'])) ? print $node->field_cflevel['und'][0]['value'] : print "" ;?>  </span>
                        </div>
                    </div>
                </div>
                <div class="row body-text">
                    <div class="col-md-12">
                        <div class="trainer_profile_text margin-30">
                            <?php  print $node->body['und'][0]['value']; ?>
                        </div>
                    </div>
                </div>
                <div class="row social-network">
                    <div class="col-md-12">
                        <ul>
                            <?php if(isset($node->field_vk['und'][0]['value'])): ?>
                                <li>
                                    <i class="fab fa-vk"></i>
                                </li>
                            <?php endif; ?>
                            <?php if(isset($node->field_instagram['und'][0]['value'])): ?>
                                <li>
                                    <i class="fab fa-instagram"></i>
                                </li>
                            <?php endif; ?>
                            <?php if(isset($node->field_youtube['und'][0]['value'])): ?>
                                <li>
                                    <i class="fab fa-youtube"></i>
                                </li>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
                <div class="clear"></div>


            </div>
        </div>
    </div>

<?php
/*

$key_time = schedule_get_tids(5);
$key_trainer = schedule_get_nids('trainer');
$key_direction = schedule_get_tids(6);
$nids = $query = db_select('node', 'n')
    ->condition('type', 'time_trainer')
    ->fields('n')
    ->execute()
    ->fetchAll();

$timetable = array();
foreach ($nids as $nid){
    $schedule_day = node_load($nid->nid);
    $trainer_nid = $schedule_day->field_trainer['und'][0]['target_id'];
    if($schedule_day->field_trainer['und'][0]['target_id'] == $node->nid){
        $trainer = $key_trainer[$schedule_day->field_trainer['und'][0]['target_id']];
        $time = $key_time[$schedule_day->field_time['und'][0]['tid']];
        $weekend = $schedule_day->field_weekend['und'][0]['tid'];
        $direction = $key_direction[$schedule_day->field_directions['und'][0]['tid']];
        $timetable[$time][$weekend] = array('trainer' => $trainer, 'class' => $direction, 'class_machine' => 'cf');
    }
}
$full_timetable = array();
foreach ($timetable as $time => $weekend){
    for($i =1; $i <= 7; $i++ ){
        if(isset($weekend[$i])){
            $full_timetable[$time][$i] = $weekend[$i];
        }
        else{
            $full_timetable[$time][$i] = array();
        }
    }
}


print theme('schedule', array('full_timetable' => $full_timetable));

*/
