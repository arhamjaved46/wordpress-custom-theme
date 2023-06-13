<?php

function register_primary_menu()
{
    register_nav_menu('primary-menu', 'Top Menu');
}
add_action('after_setup_theme', 'register_primary_menu');


add_theme_support('post-thumbnails');

register_sidebar(
    array(
        'name' => 'Sidebar location',
        'id' => 'sidebar'
    )
);

add_theme_support('custom-header');

function register_our_projects()
{
    register_nav_menu('our-projects', 'Our Projects');
}
add_action('after_setup_theme', 'register_our_projects');

function register_about_us()
{
    register_nav_menu('about-us', 'About us');
}
add_action('after_setup_theme', 'register_about_us');

function register_important_links()
{
    register_nav_menu('important-links', 'Important links');
}
add_action('after_setup_theme', 'register_important_links');

?>