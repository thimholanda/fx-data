<?php

error_reporting(E_ERROR | E_PARSE);

function fxdataScripts()
{
    wp_enqueue_script('app', get_template_directory_uri() . '/public/js/app.js', false, false, true);
}

add_action('wp_enqueue_scripts', 'fxdataScripts');


function fxdataStyles()
{
    wp_enqueue_style('styles', get_template_directory_uri() . '/public/css/styles.css');
}

add_action('wp_enqueue_scripts', 'fxdataStyles');

function remove_admin_bar()
{
    show_admin_bar(false);
}

add_action('after_setup_theme', 'remove_admin_bar');

function support_thumbnails()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'support_thumbnails');

add_image_size('publications-thumb', 580, 450, true);
