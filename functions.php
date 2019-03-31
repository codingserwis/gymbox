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

    // Main styles
    $styles_version = filemtime( URL . '/assets/css/main.css' );
    wp_enqueue_style( 'main-styles', URI . '/assets/css/main.css', array(), $styles_version, 'all' );
 }

 add_action( 'wp_enqueue_scripts', 'gymbox_scripts_and_styles' );