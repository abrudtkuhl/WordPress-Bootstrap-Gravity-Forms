<?php
defined('ABSPATH') or die("These aren't the droids you're looking for");

/**
 * Plugin Name: Gravity Forms Bootstrap 3 Style
 * Plugin URI: https://github.com/abrudtkuhl/WordPress-Bootstrap-Gravity-Forms
 * Description: Use Bootstrap 3 form styles with Gravity Forms
 * Version: 0.3
 * Author: Andy Brudtkuhl
 * Author URI: http://youmetandy.com
 */

if( ! function_exists( 'gravity_forms_bootstrap_style' ) ) {
  function gravity_forms_bootstrap_style() {
    wp_register_style( 'gravity-bootstrap', plugins_url('gravity-forms-bootstrap-3-style/gravity-forms-bootstrap.css'), array(), '1.0', 'all' );
    wp_enqueue_style( 'gravity-bootstrap' );
  }

  add_action( 'wp_enqueue_scripts', 'gravity_forms_bootstrap_style' );
}
