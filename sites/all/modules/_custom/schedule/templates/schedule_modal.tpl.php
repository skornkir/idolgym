<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php print $data['direction_title']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="time-modal">
            <i class="far fa-clock"></i>
            <span>11:00</span>
        </div>
        <span class="title-long">Продолжительность: <? print $data['direction_duration']; ?>.</span>
    </div>

    <div class="modal-body">

        <div class="modal-trainer">
            <div class="modal-trainer-img">
                <img src="<?php print $data['trainer_img']; ?>" />
            </div>
            <div class="modal-trainer-body">
                <div class="form-group2">
                    <label>Тренер: </label>
                    <span><?php print $data['trainer_title']; ?></span>
                </div>
                <div class="form-group2">
                    <label>Уровень: </label>
                    <span><?php print $data['direction_level']; ?></span>
                </div>
                <div class="form-group2">
                    <label>Программа: </label>
                    <span><?php print $data['direction_body']; ?></span>
                </div>
            </div>
        </div>
        <!--<div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary">Оформить</button>
        </div>-->
    </div>
</div>