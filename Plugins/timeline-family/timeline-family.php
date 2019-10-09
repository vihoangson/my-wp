<?php
/*
Plugin Name: Timeline Family
Plugin URI: http://vihoangson.com/
Description:
Version: 2.0.56
Author: Vi Hoàng Sơn
Author URI: http://vihoangson.com.com/
Text Domain:
Domain Path:
*/

defined( 'ABSPATH' ) || exit;

function timelineLover() {
    ob_start();
    include_once (__DIR__."/shortcode/timeline.php");
    return ob_get_clean();

}
add_shortcode('timeline-lover', 'timelineLover');
