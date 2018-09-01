<?php
/*
Plugin Name: Can First Plugin
Plugin URI:  http://canokay.com
Description: My first wordpress plugin
Version:     1.0.0
Author:      Can Okay
Author URI:  http://canokay.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: http://canokay.com
*/

add_action('admin_menu',function(){

    add_menu_page(
    'Can First Plugin',
    'Can First Plugin',
    'manage_options',
    'custompage',
    'custom_menu_page_render'
);

});

function custom_menu_page_render(){
    //Page content here;
    echo "Hello word";
}

