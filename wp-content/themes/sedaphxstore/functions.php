<?php

function load_stylesheets() 
{

    wp_register_style('font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap',
        array(), false, 'all');
    wp_enqueue_style('font');
    
    wp_register_style('fontawesome', get_template_directory_uri() . '/vendor/fontawesome/css/fontawesome.min.css',
        array(), false, 'all');
    wp_enqueue_style('fontawesome');
    wp_register_style('fontawesome2', get_template_directory_uri() . '/vendor/fontawesome/css/all.css',
        array(), false, 'all');
    wp_enqueue_style('fontawesome2');
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', get_template_directory_uri() . '/vendor/animate/css/animate.css',
        array(), false, 'all');
    wp_enqueue_style('animate');

    wp_register_style('style', get_template_directory_uri() . '/style.css',
        array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function replace_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/js/jquery-3.4.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'replace_jquery');

function load_scripts()
{
    wp_register_script('fontawesome', get_template_directory_uri() . '/vendor/fontawesome/js/fontawesome.min.js', '', 1, true);
    wp_enqueue_script('fontawesome');
    wp_register_script('fontawesome2', get_template_directory_uri() . '/vendor/fontawesome/js/all.js', '', 1, true);
    wp_enqueue_script('fontawesome2');

    wp_register_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('wow', get_template_directory_uri() . '/vendor/wow/js/wow.min.js', '', 1, true);
    wp_enqueue_script('wow');

    wp_register_script('custom', get_template_directory_uri() . '/app.js', '', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_scripts');