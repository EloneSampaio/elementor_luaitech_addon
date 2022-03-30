<?php
/**
 * Plugin Name:     Luaitech Elementor Plugin
 * Plugin URI:      Complementos Luaitech
 * Description:     widgets elementor da luaitech
 * Author:          Luaitech
 * Author URI:      luaitech.com
 * Text Domain:     elementor-luaitech-addon
 * Domain Path:     /languages
 * Version:         0.1.0

* Elementor tested up to:     3.5.0
 * Elementor Pro tested up to: 3.5.0
 * @package         Luaitech
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once( __DIR__ . '/includes/plugin.php' );

\Elementor_Luaitech_Addon\Plugin::instance();
