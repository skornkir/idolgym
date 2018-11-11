<div class="club-link">
    <a href="/price/nagatino" class="club nagatino <?php ($club == 37) ? print 'active' : '';?>">
        Фитнес клуб Нагатинская
    </a>
    <a href="/price/lavochkina" class="club lavochkina <?php ($club == 38) ? print 'active' : '';?>">
        Фитнес клуб Лавочкина
    </a>
</div>

<div class="clear"></div>

<ul class="tabs-price">
    <li class="tab-price">
        <a class="active"  id-block="seven_days">
            <i class="fas fa-medal"></i>
            <span>7 дней</span>
        </a>
    </li>
    <li class="tab-price">
        <a class=""  id-block="three_days">
            <i class="fab fa-medium-m"></i>
            <span>30 дней</span>
        </a>
    </li>
    <li class="tab-price">
        <a class=""  id-block="nine_days">
            <i class="fas fa-trophy"></i>
            <span>90 дней</span>
        </a>
    </li>
    <li class="tab-price">
        <a class=""  id-block="weekend_days">
            <i class="fas fa-dumbbell"></i>
            <span>вых. дни</span>
        </a>
    </li>
    <li class="tab-price">
        <a class=""  id-block="family_daya">
            <i class="fas fa-user-friends"></i>
            <span>семейный</span>
        </a>
    </li>
    <li class="tab-price">
        <a class=""  id-block="student_days">
            <i class="fas fa-graduation-cap"></i>
            <span>7 дней</span>
        </a>
    </li>
</ul>
<div class="clear"></div>
<div class="prices">
    <div class="collapse show" id="seven_days">
        <?php
            print views_embed_view('price', 'block_7',28, $club)
        ?>
    </div>
    <div class="collapse" id="three_days">
        <?php
            print views_embed_view('price', 'block_7',29, $club)
        ?>
    </div>
    <div class="collapse" id="nine_days">
        <?php
          print views_embed_view('price', 'block_7',30, $club)
        ?>
    </div>
    <div class="collapse" id="weekend_days">
        <?php
             print views_embed_view('price', 'block_7',39, $club)
        ?>
    </div>
    <div class="collapse" id="family_daya">
        <?php
            print views_embed_view('price', 'block_7',31, $club)
        ?>
    </div>

    <div class="collapse" id="student_days">
       <?php
            print views_embed_view('price', 'block_7',32, $club)
        ?>
    </div>
</div>
