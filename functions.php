<?php
/**
 * Functions for Gymbox theme
 */

 define( 'URI', get_template_directory_uri( ) );
 define( 'URL', get_template_directory( ) ); 

 // Disable Gutenberg editor
 add_filter( 'use_block_editor_for_post', '__return_false' );

 function gymbox_scripts_and_styles() {
    
    // Google fonts 
    wp_enqueue_style( 'g-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab|Roboto:300,400,500,700&amp;subset=latin-ext', array(), null, 'all' );

    // jQuery
    wp_enqueue_script( 'j-query', URI . '/assets/js/jquery.min.js', array(), null , true );
    // Bootstrap js
    wp_enqueue_script( 'bootstrap', URI . '/assets/js/bootstrap.min.js', array( 'j-query' ), null , true );
    

    // Google mpa
    wp_enqueue_script( 'g-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCyeImWmy1LmNodXs2VPwMnW0-T_W_rHLw&callback' , array(), null, true );
    // Main styles
    $styles_version = filemtime( URL . '/assets/css/main.css' );
    wp_enqueue_style( 'main-styles', URI . '/assets/css/main.css', array(), $styles_version, 'all' );

    // js
    $map_app_version = filemtime( URL . '/assets/js/map-app.js' );
    wp_enqueue_script( 'map', URI . '/assets/js/map-app.js', array( 'g-map', 'j-query' ), $map_app_version, true );

    $app_version = filemtime( URL . '/assets/js/app.js' );
    wp_enqueue_script( 'app', URI . '/assets/js/app.js', array( 'j-query' ), $app_version, true );
 }

 add_action( 'wp_enqueue_scripts', 'gymbox_scripts_and_styles' );

 // Scheduler app
 function gymbox_scheduler() {
     wp_enqueue_script( 'gymbox-scheduler', URI . '/assets/js/scheduler.js', array( 'j-query' ), null, true );

     $g_scheduler_monday = get_field('gymbox_scheduler_monday');
     $g_scheduler_tuesday = get_field('gymbox_scheduler_tuesday');
     $g_scheduler_wednesday = get_field('gymbox_scheduler_wednesday');
     $g_scheduler_thursday = get_field('gymbox_scheduler_thursday');
     $g_scheduler_friday = get_field('gymbox_scheduler_friday');
     $g_scheduler_saturday = get_field('gymbox_scheduler_saturday');
     $g_scheduler_sunday = get_field('gymbox_scheduler_sunday');

    $scheduler = array(
        'monday' => array(
            '8_00' => array(
                'workout' => $g_scheduler_monday['monday_eight_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_eight_hour']['coach']
            ),
            '9_00' => array(
                'workout' => $g_scheduler_monday['monday_nine_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_nine_hour']['coach']
            ),
            '10_00' => array(
                'workout' => $g_scheduler_monday['monday_ten_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_ten_hour']['coach']
            ),
            '15_00' => array(
                'workout' => $g_scheduler_monday['monday_fifteenth_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_fifteenth_hour']['coach']
            ),
            '16_00' => array(
                'workout' => $g_scheduler_monday['monday_sixteenth_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_sixteenth_hour']['coach']
            ),
            '17_00' => array(
                'workout' => $g_scheduler_monday['monday_seventeenth_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_seventeenth_hour']['coach']
            ),
            '18_00' => array(
                'workout' => $g_scheduler_monday['monday_eighteenth_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_eighteenth_hour']['coach']
            ),
            '19_00' => array(
                'workout' => $g_scheduler_monday['monday_nineteenth_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_nineteenth_hour']['coach']
            ),
            '20_00' => array(
                'workout' => $g_scheduler_monday['monday_twenty_hour']['workout'],
                'coach' => $g_scheduler_monday['monday_twenty_hour']['coach']
            )
        ),
        'tuesday' => array(
            '8_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_eight_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_eight_hour']['coach']
            ),
            '9_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_nine_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_nine_hour']['coach']
            ),
            '10_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_ten_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_ten_hour']['coach']
            ),
            '15_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_fifteenth_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_fifteenth_hour']['coach']
            ),
            '16_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_sixteenth_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_sixteenth_hour']['coach']
            ),
            '17_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_seventeenth_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_seventeenth_hour']['coach']
            ),
            '18_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_eighteenth_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_eighteenth_hour']['coach']
            ),
            '19_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_nineteenth_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_nineteenth_hour']['coach']
            ),
            '20_00' => array(
                'workout' => $g_scheduler_tuesday['tuesday_twenty_hour']['workout'],
                'coach' => $g_scheduler_tuesday['tuesday_twenty_hour']['coach']
            )
        ),
        'wednesday' => array(
            '8_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_eight_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_eight_hour']['coach']
            ),
            '9_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_nine_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_nine_hour']['coach']
            ),
            '10_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_ten_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_ten_hour']['coach']
            ),
            '15_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_fifteenth_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_fifteenth_hour']['coach']
            ),
            '16_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_sixteenth_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_sixteenth_hour']['coach']
            ),
            '17_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_seventeenth_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_seventeenth_hour']['coach']
            ),
            '18_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_eighteenth_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_eighteenth_hour']['coach']
            ),
            '19_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_nineteenth_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_nineteenth_hour']['coach']
            ),
            '20_00' => array(
                'workout' => $g_scheduler_wednesday['wednesday_twenty_hour']['workout'],
                'coach' => $g_scheduler_wednesday['wednesday_twenty_hour']['coach']
            )
        ),
        'thursday' => array(
            '8_00' => array(
                'workout' => $g_scheduler_thursday['thursday_eight_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_eight_hour']['coach']
            ),
            '9_00' => array(
                'workout' => $g_scheduler_thursday['thursday_nine_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_nine_hour']['coach']
            ),
            '10_00' => array(
                'workout' => $g_scheduler_thursday['thursday_ten_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_ten_hour']['coach']
            ),
            '15_00' => array(
                'workout' => $g_scheduler_thursday['thursday_fifteenth_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_fifteenth_hour']['coach']
            ),
            '16_00' => array(
                'workout' => $g_scheduler_thursday['thursday_sixteenth_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_sixteenth_hour']['coach']
            ),
            '17_00' => array(
                'workout' => $g_scheduler_thursday['thursday_seventeenth_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_seventeenth_hour']['coach']
            ),
            '18_00' => array(
                'workout' => $g_scheduler_thursday['thursday_eighteenth_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_eighteenth_hour']['coach']
            ),
            '19_00' => array(
                'workout' => $g_scheduler_thursday['thursday_nineteenth_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_nineteenth_hour']['coach']
            ),
            '20_00' => array(
                'workout' => $g_scheduler_thursday['thursday_twenty_hour']['workout'],
                'coach' => $g_scheduler_thursday['thursday_twenty_hour']['coach']
            )
        ),
        'friday' => array(
            '8_00' => array(
                'workout' => $g_scheduler_friday['friday_eight_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_eight_hour']['coach']
            ),
            '9_00' => array(
                'workout' => $g_scheduler_friday['friday_nine_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_nine_hour']['coach']
            ),
            '10_00' => array(
                'workout' => $g_scheduler_friday['friday_ten_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_ten_hour']['coach']
            ),
            '15_00' => array(
                'workout' => $g_scheduler_friday['friday_fifteenth_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_fifteenth_hour']['coach']
            ),
            '16_00' => array(
                'workout' => $g_scheduler_friday['friday_sixteenth_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_sixteenth_hour']['coach']
            ),
            '17_00' => array(
                'workout' => $g_scheduler_friday['friday_seventeenth_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_seventeenth_hour']['coach']
            ),
            '18_00' => array(
                'workout' => $g_scheduler_friday['friday_eighteenth_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_eighteenth_hour']['coach']
            ),
            '19_00' => array(
                'workout' => $g_scheduler_friday['friday_nineteenth_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_nineteenth_hour']['coach']
            ),
            '20_00' => array(
                'workout' => $g_scheduler_friday['friday_twenty_hour']['workout'],
                'coach' => $g_scheduler_friday['friday_twenty_hour']['coach']
            )
        ),
        'saturday' => array(
            '8_00' => array(
                'workout' => $g_scheduler_saturday['saturday_eight_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_eight_hour']['coach']
            ),
            '9_00' => array(
                'workout' => $g_scheduler_saturday['saturday_nine_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_nine_hour']['coach']
            ),
            '10_00' => array(
                'workout' => $g_scheduler_saturday['saturday_ten_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_ten_hour']['coach']
            ),
            '15_00' => array(
                'workout' => $g_scheduler_saturday['saturday_fifteenth_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_fifteenth_hour']['coach']
            ),
            '16_00' => array(
                'workout' => $g_scheduler_saturday['saturday_sixteenth_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_sixteenth_hour']['coach']
            ),
            '17_00' => array(
                'workout' => $g_scheduler_saturday['saturday_seventeenth_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_seventeenth_hour']['coach']
            ),
            '18_00' => array(
                'workout' => $g_scheduler_saturday['saturday_eighteenth_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_eighteenth_hour']['coach']
            ),
            '19_00' => array(
                'workout' => $g_scheduler_saturday['saturday_nineteenth_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_nineteenth_hour']['coach']
            ),
            '20_00' => array(
                'workout' => $g_scheduler_saturday['saturday_twenty_hour']['workout'],
                'coach' => $g_scheduler_saturday['saturday_twenty_hour']['coach']
            )
        ),
        'sunday' => array(
            '8_00' => array(
                'workout' => $g_scheduler_sunday['sunday_eight_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_eight_hour']['coach']
            ),
            '9_00' => array(
                'workout' => $g_scheduler_sunday['sunday_nine_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_nine_hour']['coach']
            ),
            '10_00' => array(
                'workout' => $g_scheduler_sunday['sunday_ten_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_ten_hour']['coach']
            ),
            '15_00' => array(
                'workout' => $g_scheduler_sunday['sunday_fifteenth_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_fifteenth_hour']['coach']
            ),
            '16_00' => array(
                'workout' => $g_scheduler_sunday['sunday_sixteenth_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_sixteenth_hour']['coach']
            ),
            '17_00' => array(
                'workout' => $g_scheduler_sunday['sunday_seventeenth_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_seventeenth_hour']['coach']
            ),
            '18_00' => array(
                'workout' => $g_scheduler_sunday['sunday_eighteenth_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_eighteenth_hour']['coach']
            ),
            '19_00' => array(
                'workout' => $g_scheduler_sunday['sunday_nineteenth_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_nineteenth_hour']['coach']
            ),
            '20_00' => array(
                'workout' => $g_scheduler_sunday['sunday_twenty_hour']['workout'],
                'coach' => $g_scheduler_sunday['sunday_twenty_hour']['coach']
            )
        )
    );

     wp_localize_script( 'gymbox-scheduler', 'g_scheduler', $scheduler );
 }

 add_action( 'wp_enqueue_scripts', 'gymbox_scheduler' );