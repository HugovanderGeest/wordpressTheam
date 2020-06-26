<?php

// laat style in
function laadStijlblad()
{
    wp_enqueue_style('stijl', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
}

add_action('init', "laadStijlblad");



// registreren
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function registreer_menu()
{
    $argumenten = array(
        'hoofd-menu' => __('Hooft menu')
    );
    register_nav_menus();
}

add_action('init', 'registreer_menu');
