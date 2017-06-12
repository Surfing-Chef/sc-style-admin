<?php
/*
Plugin Name: SC Admin Style
Plugin URI: https://github.com/Surfing-Chef/sc-style-admin
Description: SC Admin Style - Activate to enable editing of admin styles in sc-style-admin.css
Author: Surfing-Chef
Version: 1.0
Author URI: https://github.com/Surfing-Chef/
*/

function sc_style__admin() {
    wp_enqueue_style('sc-style-admin', plugins_url('sc-style-admin', __FILE__));
}
add_action('admin_enqueue_scripts', 'sc_style__admin');
add_action('login_enqueue_scripts', 'sc_style__admin');

?>
