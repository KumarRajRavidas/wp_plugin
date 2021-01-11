<?php
/*
Plugin Name: My First plugin
Plugin URI: https://kumarrajravidas.wordpress.com/how-to-begin-writing-your-first-wordpress-plugin
Description: This is my first WordPress Plugin
Author: RAJ
Author URI: https://kumarrajravidas.wordpress.com/
Author Email: kumarrajravidas@gmail.com
Version: 1.0
*/
 
function my_plugin_test() {
	echo 'Hello World'; exit;
}
add_action('admin_head', 'my_plugin_test');

include['include/script.php']; //  controling for css and js 
include['include/data-preprocessing.php'];
include['include/display-functions.php'];