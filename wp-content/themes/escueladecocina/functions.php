<?php

/*
    Carga los Scripts y CSS del theme
*/

function edc_scripts() {
    /* Styles */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', false, '4.1.3');
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css'));

    /* Javascript */
    // wp_enqueue_script('jquery', get_template_directory_uri().'js/jquery.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('popper'), '1.0', true);
}

/* Hooks */
add_action('wp_enqueue_scripts', 'edc_scripts')

?>