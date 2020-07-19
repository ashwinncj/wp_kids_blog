<?php
/**
 * Plugin Name: Kids blog by Ashwin Inc(Ai)
 */

require_once dirname( __FILE__ ) . '/class/main.php';
register_activation_hook( __FILE__, array( 'KidsBlog', 'activate' ) );
