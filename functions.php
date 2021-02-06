<?php
//cargamos librerias de terceros
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function cybergarden2077_config(){
    register_nav_menus(
        array(
            'cybergarden2077_main_menu' => 'Cybergarden 2077 menú principal',
        )
    );
}
add_action( 'after_setup_theme', 'cybergarden2077_config', 0 );

function cybergarden2077_scripts(){
    wp_enqueue_script( "bootstrap_js", get_theme_file_uri("inc/js/bootstrap.min.js"), array("jquery"),"4.5", true );
    wp_enqueue_style( "bootstrap_css", get_theme_file_uri("inc/css/bootstrap.min.css"),array(), "4.5","all" );
}
add_action( 'wp_enqueue_scripts', 'cybergarden2077_scripts', );

function add_stylesheet_to_head() {
    echo "<link href='".get_stylesheet_uri()."' rel='stylesheet' type='text/css'>";
}
add_action( 'wp_head', 'add_stylesheet_to_head' );