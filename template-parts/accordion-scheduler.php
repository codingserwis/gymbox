<?php 
    $g_scheduler_monday = get_field('gymbox_scheduler_monday');
    $g_scheduler_tuesday = get_field('gymbox_scheduler_tuesday');
    $g_scheduler_wednesday = get_field('gymbox_scheduler_wednesday');
    $g_scheduler_thursday = get_field('gymbox_scheduler_thursday');
    $g_scheduler_friday = get_field('gymbox_scheduler_friday');
    $g_scheduler_saturday = get_field('gymbox_scheduler_saturday');
    $g_scheduler_sunday = get_field('gymbox_scheduler_sunday');
?>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseMon" aria-expanded="true" aria-controls="collapseMon">
          Poniedziałek
        </button>
      </h2>
    </div>

    <div id="collapseMon" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="scheduler-list">
            <li class="text-uppercase py-3">
                8:30 - 9:30 - <?php echo $g_scheduler_monday['monday_eight_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                9:30 - 11:00 - <?php echo $g_scheduler_monday['monday_nine_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                15:00 - 16:00 - <?php echo $g_scheduler_monday['monday_fifteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                16:00 - 17:00 - <?php echo $g_scheduler_monday['monday_sixteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                17:00 - 18:00 - <?php echo $g_scheduler_monday['monday_seventeenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                18:00 - 19:00 - <?php echo $g_scheduler_monday['monday_eighteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                19:00 - 20:00 - <?php echo $g_scheduler_monday['monday_nineteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                20:00 - 21:00 - <?php echo $g_scheduler_monday['monday_twenty_hour']['workout']; ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTu" aria-expanded="false" aria-controls="collapseTu">
          Wtorek
        </button>
      </h2>
    </div>
    <div id="collapseTu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <ul class="scheduler-list">
            <li class="text-uppercase py-3">
                8:30 - 9:30 - <?php echo $g_scheduler_tuesday['tuesday_eight_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                9:30 - 11:00 - <?php echo $g_scheduler_tuesday['tuesday_nine_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                15:00 - 16:00 - <?php echo $g_scheduler_tuesday['tuesday_fifteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                16:00 - 17:00 - <?php echo $g_scheduler_tuesday['tuesday_sixteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                17:00 - 18:00 - <?php echo $g_scheduler_tuesday['tuesday_seventeenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                18:00 - 19:00 - <?php echo $g_scheduler_tuesday['tuesday_eighteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                19:00 - 20:00 - <?php echo $g_scheduler_tuesday['tuesday_nineteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                20:00 - 21:00 - <?php echo $g_scheduler_tuesday['tuesday_twenty_hour']['workout']; ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseWed" aria-expanded="false" aria-controls="collapseWed">
          Środa
        </button>
      </h2>
    </div>
    <div id="collapseWed" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="scheduler-list">
            <li class="text-uppercase py-3">
                8:30 - 9:30 - <?php echo $g_scheduler_wednesday['wednesday_eight_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                9:30 - 11:00 - <?php echo $g_scheduler_wednesday['wednesday_nine_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                15:00 - 16:00 - <?php echo $g_scheduler_wednesday['wednesday_fifteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                16:00 - 17:00 - <?php echo $g_scheduler_wednesday['wednesday_sixteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                17:00 - 18:00 - <?php echo $g_scheduler_wednesday['wednesday_seventeenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                18:00 - 19:00 - <?php echo $g_scheduler_wednesday['wednesday_eighteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                19:00 - 20:00 - <?php echo $g_scheduler_wednesday['wednesday_nineteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                20:00 - 21:00 - <?php echo $g_scheduler_wednesday['wednesday_twenty_hour']['workout']; ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThr" aria-expanded="false" aria-controls="collapseThr">
          Czwartek
        </button>
      </h2>
    </div>
    <div id="collapseThr" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="scheduler-list">
            <li class="text-uppercase py-3">
                8:30 - 9:30 - <?php echo $g_scheduler_thursday['thursday_eight_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                9:30 - 11:00 - <?php echo $g_scheduler_thursday['thursday_nine_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                15:00 - 16:00 - <?php echo $g_scheduler_thursday['thursday_fifteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                16:00 - 17:00 - <?php echo $g_scheduler_thursday['thursday_sixteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                17:00 - 18:00 - <?php echo $g_scheduler_thursday['thursday_seventeenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                18:00 - 19:00 - <?php echo $g_scheduler_thursday['thursday_eighteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                19:00 - 20:00 - <?php echo $g_scheduler_thursday['thursday_nineteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                20:00 - 21:00 - <?php echo $g_scheduler_thursday['thursday_twenty_hour']['workout']; ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFri" aria-expanded="false" aria-controls="collapseFri">
          Piątek
        </button>
      </h2>
    </div>
    <div id="collapseFri" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="scheduler-list">
            <li class="text-uppercase py-3">
                8:30 - 9:30 - <?php echo $g_scheduler_friday['friday_eight_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                9:30 - 11:00 - <?php echo $g_scheduler_friday['friday_nine_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                15:00 - 16:00 - <?php echo $g_scheduler_friday['friday_fifteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                16:00 - 17:00 - <?php echo $g_scheduler_friday['friday_sixteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                17:00 - 18:00 - <?php echo $g_scheduler_friday['friday_seventeenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                18:00 - 19:00 - <?php echo $g_scheduler_friday['friday_eighteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                19:00 - 20:00 - <?php echo $g_scheduler_friday['friday_nineteenth_hour']['workout']; ?>
            </li>
            <li class="text-uppercase py-3">
                20:00 - 21:00 - <?php echo $g_scheduler_friday['friday_twenty_hour']['workout']; ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSat" aria-expanded="false" aria-controls="collapseSat">
          Sobota
        </button>
      </h2>
    </div>
    <div id="collapseSat" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="scheduler-list">
            <li class="text-uppercase py-3">
                9:00 - 11:00 - <?php echo $g_scheduler_saturday['saturday_nine_hour']['workout']; ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSa" aria-expanded="false" aria-controls="collapseSa">
          Niedziela
        </button>
      </h2>
    </div>
    <div id="collapseSa" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="scheduler-list">
            <li class="text-uppercase py-3">
                9:00 - 11:00 - <?php echo $g_scheduler_sunday['sunday_nine_hour']['workout']; ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>