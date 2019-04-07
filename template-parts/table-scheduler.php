<?php 
    $g_scheduler_monday = get_field('gymbox_scheduler_monday');
    $g_scheduler_tuesday = get_field('gymbox_scheduler_tuesday');
    $g_scheduler_wednesday = get_field('gymbox_scheduler_wednesday');
    $g_scheduler_thursday = get_field('gymbox_scheduler_thursday');
    $g_scheduler_friday = get_field('gymbox_scheduler_friday');
    $g_scheduler_saturday = get_field('gymbox_scheduler_saturday');
    $g_scheduler_sunday = get_field('gymbox_scheduler_sunday');
?>
<table id="scheduler" class="table table-bordered scheduler-table my-5">
    <thead>
        <tr>
            <th>Godziny</th>
            <th>Poniedziałek</th>
            <th>Wtorek</th>
            <th>Środa</th>
            <th>Czwartek</th>
            <th>Piątek</th>
            <th>Sobota</th>
            <th>Niedziela</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="2">8:00 - 9:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="<?php echo $g_scheduler_monday['monday_eight_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_monday['monday_eight_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_monday['monday_eight_hour']['workout']; ?>
                </div> 
                <div class="">
                    <?php echo $g_scheduler_monday['monday_eight_hour']['coach']; ?>
                </div>
            </td> <!-- /monday -->
            <td class="<?php echo $g_scheduler_tuesday['tuesday_eight_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_tuesday['tuesday_eight_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_tuesday['tuesday_eight_hour']['workout']; ?>
                </div> 
                <div class="">
                    <?php echo $g_scheduler_tuesday['tuesday_eight_hour']['coach']; ?>
                </div>
            </td> <!-- /tuesday -->
            <td class="<?php echo $g_scheduler_wednesday['wednesday_eight_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_wednesday['wednesday_eight_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_wednesday['wednesday_eight_hour']['workout']; ?>
                </div> 
                <div class="">
                    <?php echo $g_scheduler_wednesday['wednesday_eight_hour']['coach']; ?>
                </div>
            </td> <!-- /wednesday -->
            <td class="<?php echo $g_scheduler_thursday['thursday_eight_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_thursday['thursday_eight_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_thursday['thursday_eight_hour']['workout']; ?>
                </div> 
                <div class="">
                    <?php echo $g_scheduler_thursday['thursday_eight_hour']['coach']; ?>
                </div>
            </td> <!-- /thursday -->
            <td class="<?php echo $g_scheduler_friday['friday_eight_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_friday['friday_eight_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_friday['friday_eight_hour']['workout']; ?>
                </div> 
                <div class="">
                    <?php echo $g_scheduler_friday['friday_eight_hour']['coach']; ?>
                </div>
            </td> <!-- /friday -->
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2">9:00 - 10:00</td>
            <td class="<?php echo $g_scheduler_saturday['saturday_nine_hour']['workout']; ?>" rowspan="3" data-workout="<?php echo $g_scheduler_saturday['saturday_nine_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_saturday['saturday_nine_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_saturday['saturday_nine_hour']['coach']; ?>
                </div>
            </td> <!-- /saturday -->
            <td class="<?php echo $g_scheduler_sunday['sunday_nine_hour']['workout']; ?>" rowspan="3" data-workout="<?php echo $g_scheduler_sunday['sunday_nine_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_sunday['sunday_nine_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_sunday['sunday_nine_hour']['coach']; ?>
                </div>
            </td> <!-- /sunday -->
        </tr>
        <tr>
            <td class="<?php echo $g_scheduler_monday['monday_nine_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_monday['monday_nine_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_monday['monday_nine_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_monday['monday_nine_hour']['coach']; ?>
                </div>
            </td> <!-- /monday -->
            <td class="<?php echo $g_scheduler_tuesday['tuesday_nine_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_tuesday['tuesday_nine_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_tuesday['tuesday_nine_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_tuesday['tuesday_nine_hour']['coach']; ?>
                </div>
            </td> <!-- /tuesday -->
            <td class="<?php echo $g_scheduler_wednesday['wednesday_nine_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_wednesday['wednesday_nine_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_wednesday['wednesday_nine_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_wednesday['wednesday_nine_hour']['coach']; ?>
                </div>
            </td> <!-- /wednesday -->
            <td class="<?php echo $g_scheduler_thursday['thursday_nine_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_thursday['thursday_nine_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_thursday['thursday_nine_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_thursday['thursday_nine_hour']['coach']; ?>
                </div>
            </td> <!-- /thursday -->
            <td class="<?php echo $g_scheduler_friday['friday_nine_hour']['workout']; ?>" rowspan="2" data-workout="<?php echo $g_scheduler_friday['friday_nine_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_friday['friday_nine_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_friday['friday_nine_hour']['coach']; ?>
                </div>
            </td> <!-- /friday -->
        </tr>
        <tr>
            <td>10:00 - 11:00</td>
        </tr>
        <tr>
            <td>11:00 - 15:00</td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td>15:00 - 16:00</td>
            <td class="<?php echo $g_scheduler_monday['monday_fifteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_monday['monday_fifteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_monday['monday_fifteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_monday['monday_fifteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /monday -->
            <td class="<?php echo $g_scheduler_tuesday['tuesday_fifteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_tuesday['tuesday_fifteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_tuesday['tuesday_fifteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_tuesday['tuesday_fifteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /tuesday -->
            <td class="<?php echo $g_scheduler_wednesday['wednesday_fifteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_wednesday['wednesday_fifteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_wednesday['wednesday_fifteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_wednesday['wednesday_fifteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /wednesday -->
            <td class="<?php echo $g_scheduler_thursday['thursday_fifteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_thursday['thursday_fifteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_thursday['thursday_fifteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_thursday['thursday_fifteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /thursday -->
            <td class="<?php echo $g_scheduler_friday['friday_fifteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_friday['friday_fifteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_friday['friday_fifteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_friday['friday_fifteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /friday -->
            <td class="<?php echo $g_scheduler_saturday['saturday_fifteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_saturday['saturday_fifteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_saturday['saturday_fifteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_saturday['saturday_fifteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /saturday -->
            <td class="<?php echo $g_scheduler_sunday['sunday_fifteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_sunday['sunday_fifteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_sunday['sunday_fifteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_sunday['sunday_fifteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /sunday -->
        </tr>
        <tr>
            <td>16:00 - 17:00</td>
            <td class="<?php echo $g_scheduler_monday['monday_sixteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_monday['monday_sixteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_monday['monday_sixteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_monday['monday_sixteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /monday -->
            <td class="<?php echo $g_scheduler_tuesday['tuesday_sixteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_tuesday['tuesday_sixteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_tuesday['tuesday_sixteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_tuesday['tuesday_sixteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /tuesday -->
            <td class="<?php echo $g_scheduler_wednesday['wednesday_sixteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_wednesday['wednesday_sixteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_wednesday['wednesday_sixteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_wednesday['wednesday_sixteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /wednesday -->
            <td class="<?php echo $g_scheduler_thursday['thursday_sixteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_thursday['thursday_sixteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_thursday['thursday_sixteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_thursday['thursday_sixteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /thursday -->
            <td class="<?php echo $g_scheduler_friday['friday_sixteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_friday['friday_sixteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_friday['friday_sixteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_friday['friday_sixteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /friday -->
            <td class="<?php echo $g_scheduler_saturday['saturday_sixteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_saturday['saturday_sixteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_saturday['saturday_sixteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_saturday['saturday_sixteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /saturday -->
            <td class="<?php echo $g_scheduler_sunday['sunday_sixteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_sunday['sunday_sixteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_sunday['sunday_sixteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_sunday['sunday_sixteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /sunday -->
        </tr>
        <tr>
            <td>17:00 - 18:00</td>
            <td class="<?php echo $g_scheduler_monday['monday_seventeenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_monday['monday_seventeenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_monday['monday_seventeenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_monday['monday_seventeenth_hour']['coach']; ?>
                </div>
            </td> <!-- /monday -->
            <td class="<?php echo $g_scheduler_tuesday['tuesday_seventeenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_tuesday['tuesday_seventeenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_tuesday['tuesday_seventeenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_tuesday['tuesday_seventeenth_hour']['coach']; ?>
                </div>
            </td> <!-- /tuesday -->
            <td class="<?php echo $g_scheduler_wednesday['wednesday_seventeenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_wednesday['wednesday_seventeenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_wednesday['wednesday_seventeenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_wednesday['wednesday_seventeenth_hour']['coach']; ?>
                </div>
            </td> <!-- /wednesday -->
            <td class="<?php echo $g_scheduler_thursday['thursday_seventeenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_thursday['thursday_seventeenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_thursday['thursday_seventeenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_thursday['thursday_seventeenth_hour']['coach']; ?>
                </div>
            </td> <!-- /thursday -->
            <td class="<?php echo $g_scheduler_friday['friday_seventeenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_friday['friday_seventeenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_friday['friday_seventeenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_friday['friday_seventeenth_hour']['coach']; ?>
                </div>
            </td> <!-- /friday -->
            <td class="<?php echo $g_scheduler_saturday['saturday_seventeenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_saturday['saturday_seventeenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_saturday['saturday_seventeenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_saturday['saturday_seventeenth_hour']['coach']; ?>
                </div>
            </td> <!-- /saturday -->
            <td class="<?php echo $g_scheduler_sunday['sunday_seventeenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_sunday['sunday_seventeenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_sunday['sunday_seventeenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_sunday['sunday_seventeenth_hour']['coach']; ?>
                </div>
            </td> <!-- /sunday -->
        </tr>
        <tr>
            <td>18:00 - 19:00</td>
            <td class="<?php echo $g_scheduler_monday['monday_eighteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_monday['monday_eighteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_monday['monday_eighteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_monday['monday_eighteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /monday -->
            <td class="<?php echo $g_scheduler_tuesday['tuesday_eighteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_tuesday['tuesday_eighteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_tuesday['tuesday_eighteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_tuesday['tuesday_eighteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /tuesday -->
            <td class="<?php echo $g_scheduler_wednesday['wednesday_eighteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_wednesday['wednesday_eighteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_wednesday['wednesday_eighteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_wednesday['wednesday_eighteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /wednesday -->
            <td class="<?php echo $g_scheduler_thursday['thursday_eighteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_thursday['thursday_eighteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_thursday['thursday_eighteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_thursday['thursday_eighteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /thursday -->
            <td class="<?php echo $g_scheduler_friday['friday_eighteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_friday['friday_eighteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_friday['friday_eighteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_friday['friday_eighteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /friday -->
            <td class="<?php echo $g_scheduler_saturday['saturday_eighteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_saturday['saturday_eighteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_saturday['saturday_eighteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_saturday['saturday_eighteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /saturday -->
            <td class="<?php echo $g_scheduler_sunday['sunday_eighteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_sunday['sunday_eighteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_sunday['sunday_eighteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_sunday['sunday_eighteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /sunday -->
        </tr>
        <tr>
            <td>19:0 - 20:00</td>
            <td class="<?php echo $g_scheduler_monday['monday_nineteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_monday['monday_nineteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_monday['monday_nineteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_monday['monday_nineteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /monday -->
            <td class="<?php echo $g_scheduler_tuesday['tuesday_nineteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_tuesday['tuesday_nineteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_tuesday['tuesday_nineteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_tuesday['tuesday_nineteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /tuesday -->
            <td class="<?php echo $g_scheduler_wednesday['wednesday_nineteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_wednesday['wednesday_nineteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_wednesday['wednesday_nineteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_wednesday['wednesday_nineteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /wednesday -->
            <td class="<?php echo $g_scheduler_thursday['thursday_nineteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_thursday['thursday_nineteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_thursday['thursday_nineteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_thursday['thursday_nineteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /thursday -->
            <td class="<?php echo $g_scheduler_friday['friday_nineteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_friday['friday_nineteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_friday['friday_nineteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_friday['friday_nineteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /friday -->
            <td class="<?php echo $g_scheduler_saturday['saturday_nineteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_saturday['saturday_nineteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_saturday['saturday_nineteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_saturday['saturday_nineteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /saturday -->
            <td class="<?php echo $g_scheduler_sunday['sunday_nineteenth_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_sunday['sunday_nineteenth_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_sunday['sunday_nineteenth_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_sunday['sunday_nineteenth_hour']['coach']; ?>
                </div>
            </td> <!-- /sunday -->
        </tr>
        <tr>
            <td>20:0 - 21:00</td>
            <td class="<?php echo $g_scheduler_monday['monday_twenty_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_monday['monday_twenty_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_monday['monday_twenty_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_monday['monday_twenty_hour']['coach']; ?>
                </div>
            </td> <!-- /monday -->
            <td class="<?php echo $g_scheduler_tuesday['tuesday_twenty_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_tuesday['tuesday_twenty_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_tuesday['tuesday_twenty_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_tuesday['tuesday_twenty_hour']['coach']; ?>
                </div>
            </td> <!-- /tuesday -->
            <td class="<?php echo $g_scheduler_wednesday['wednesday_twenty_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_wednesday['wednesday_twenty_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_wednesday['wednesday_twenty_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_wednesday['wednesday_twenty_hour']['coach']; ?>
                </div>
            </td> <!-- /wednesday -->
            <td class="<?php echo $g_scheduler_thursday['thursday_twenty_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_thursday['thursday_twenty_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_thursday['thursday_twenty_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_thursday['thursday_twenty_hour']['coach']; ?>
                </div>
            </td> <!-- /thursday -->
            <td class="<?php echo $g_scheduler_friday['friday_twenty_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_friday['friday_twenty_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_friday['friday_twenty_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_friday['friday_twenty_hour']['coach']; ?>
                </div>
            </td> <!-- /friday -->
            <td class="<?php echo $g_scheduler_saturday['saturday_twenty_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_saturday['saturday_twenty_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_saturday['saturday_twenty_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_saturday['saturday_twenty_hour']['coach']; ?>
                </div>
            </td> <!-- /saturday -->
            <td class="<?php echo $g_scheduler_sunday['sunday_twenty_hour']['workout']; ?>" data-workout="<?php echo $g_scheduler_sunday['sunday_twenty_hour']['workout']; ?>">
                <div class="text-uppercase">
                    <?php echo $g_scheduler_sunday['sunday_twenty_hour']['workout']; ?>
                </div>
                <div>
                    <?php echo $g_scheduler_sunday['sunday_twenty_hour']['coach']; ?>
                </div>
            </td> <!-- /sunday -->
        </tr>
    </tbody>
</table>