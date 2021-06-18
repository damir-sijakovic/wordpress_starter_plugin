<?php
/**
 * Plugin Name: Damir Wordpress Plugin demo
 * Plugin URI: https://damir.ioox.studio
 * Description: Display content using a shortcode to insert in a page or post
 * Version: 0.1
 * Text Domain: damir-wordpress-plugin-demo
 * Author: Damir Šijaković
 * Author URI: https:damir.//ioox.studio
 */

 function dsijak_pluginDemo($x) {
	return file_get_contents(__DIR__ . '/component.html');
}

// [damir-plugin-demo]
add_shortcode('damir-plugin-demo', 'dsijak_pluginDemo');

add_action('admin_menu', 'dsijak_pluginSetupMenu');
 
function dsijak_pluginSetupMenu(){
    add_menu_page( 'Test Plugin Page', 'Damir Plugin', 'manage_options', 'test-plugin', 'dsijak_init' );
}


function dsijak_init(){
    echo "<script> var wpPluginDir = '" . plugin_dir_url(__FILE__) . "';</script>";
    echo file_get_contents(__DIR__ . '/preferences.html');      
}
