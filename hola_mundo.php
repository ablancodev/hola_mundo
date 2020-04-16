<?php
/**
 * hola_mundo.php
 *
 * Plugin Name: Hola Mundo
 * Plugin URI: https://www.ablancodev.com
 * Description: Di Hola al mundo WordPress
 * Version: 0.1
 * Author: ablancodev
 * Author URI: https://www.ablancodev.com
 * Text Domain: holamundo
 * Domain Path: /
 * License: GPLv3
 */

function hola_a_todos() {
    echo '<p>Hola mundo</p>';
    
}
add_action('wp_footer', 'hola_a_todos');
?>