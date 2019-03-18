<?php
/*
* Plugin Name: My Plugin
*/
function test($atts=[], $content)
{
    $atts = array_change_key_case((array)$atts,CASE_LOWER);
    extract(shortcode_atts(array(
        'name'=>'World'
    ),$atts));
    return "Hello ".$name;
}

function Menu()
{

}

function SubMenu()
{

}

function menu_init(){
    add_menu_page(
        "Page Title",
        "MenuTitle",
        "manage_options",
        "menu_slug",
        'Menu',
        null,
        0);
    add_submenu_page(
        'menu_slug',
        'sub_page_title',
        'sub_menu_title',
        'manage_options',
        'submenu_slug',
        'SubMenu'
    );
} 

function plugin_init(){
    add_shortcode("test_shortcode", "test");
}

add_action("init","plugin_init");
add_action("admin_menu", "menu_init");
?>