<?php
/**
 * @link              https://www.iljester.com
 * @since 			  1.0
 * @package           dpt
 *
 * Plugin Name:       Dadi Plugin Test
 * Plugin URI:        https://www.iljester.com/portfolio/dadi-plugin-test
 * Description:       This is only a plugin test
 * Version:           1.8
 * Author:            Il Jester
 * Author URI:        https://https://www.iljester.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dpt
 * Domain Path:       /languages
 */
 
if( ! class_exists('UpdateClient')) {
	require_once plugin_dir_path( __FILE__ ) . 'assets/update-client/UpdateClient.class.php';
}
 
function dadi_plugin_test( $content ) {
	$content .= '<div class="dadi-plugin-test">Hello World!</div>';
	$content .= 'Hello';
	return $content;
}
add_filter('the_content', 'dadi_plugin_test');

?>
