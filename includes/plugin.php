<?php
namespace Elementor_Luaitech_Addon;

use Elementor_Luaitech_Addon\Widgets\WidgetA;
use Elementor_Luaitech_Addon\Widgets\WidgetB;
use Elementor_Luaitech_Addon\Widgets\WidgetC;
use Elementor_Luaitech_Addon\Control\ControlA;
use Elementor_Luaitech_Addon\Control\ControlB;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Your code starts here.
final class Plugin {

	/**
	 * Plugin instance.
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 *
	 * @var Plugin
	 */
	private static $_instance = null;

	/**
	 * Addon Version
	 *
	 * @since 1.0.0
	 * @var string The addon version.
	 */
	const VERSION = '1.0.0';


	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 * @var string Minimum Elementor version required to run the addon.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';


	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 * @var string Minimum PHP version required to run the addon.
	 */
	const MINIMUM_PHP_VERSION = '7.3';



	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function on_plugins_loaded()
    {
        if ($this->is_compatible()) {

            add_action('elementor/init', [$this, 'init']);
        }
    }

	public function __construct()
    {

        add_action('plugins_loaded', [$this, 'on_plugins_loaded']);
    }

	public function is_compatible() {

		// Check if Elementor is installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return false;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return false;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return false;
		}

		return true;
	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-addon' ),
			'<strong>' . esc_html__( 'Elementor Luaitech Addon', 'elementor-test-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-addon' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-addon' ),
			'<strong>' . esc_html__( 'Elementor Luaitech Addon', 'elementor-test-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'elementor-test-addon' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}




		/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'elementor-test-addon' ),
			'<strong>' . esc_html__( 'Elementor Luaitech Addon', 'elementor-test-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-addon' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}


	public function frontend_styles() {
		//wp_enqueue_style('bootstrap-v3', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), '3.3.5' );
		//add tailwind css
		//wp_enqueue_style('tailwind', 'https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.7.3/tailwind.css' );
		wp_enqueue_style('swiper-style', plugin_dir_url(__FILE__) . '../assets/css/libs/swiper-bundle.min.css',array(), ' 8.0.7');
		wp_enqueue_style('custome-swiper', plugin_dir_url(__FILE__) . '../assets/css/swiper.css');

	}

	public function frontend_scripts() {
		wp_enqueue_script('jquery');
		wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com');
		wp_enqueue_script('swiper-script',  plugin_dir_url(__FILE__) . '../assets/js/libs/swiper-bundle.min.js',array(), ' 8.0.7');
		wp_enqueue_script('swiper-scrndipt2',  plugin_dir_url(__FILE__) . '../assets/js/custom.js');

	}

	/**
	 * Register Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function init_widgets() {

		require_once( __DIR__ . '/widgets/widgetA.php' );
		require_once( __DIR__ . '/widgets/widgetB.php' );
		require_once( __DIR__ . '/widgets/widgetC.php' );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new WidgetA());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new WidgetB());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new WidgetC());

		//$widgets_manager->register( new WidgetA() );
		//$widgets_manager->register( new WidgetB() );

	}

	/**
	 * Register Widget Styles
	 *
	 * Register custom styles required by widgets
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function init_controls( $controls_manager ) {

		require_once( __DIR__ . '/controls/controlA.php' );
		require_once( __DIR__ . '/controls/controlB.php' );

		//$controls_manager->register( new \ControlA() );
		//$controls_manager->register( new \ControlB() );
		\Elementor\Plugin::$instance->controls_manager->register_control('controlA', new ControlA());
		\Elementor\Plugin::$instance->controls_manager->register_control('controlB', new ControlB());


	}

	/**
	 * Init Addons
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 * @access public
	 */


    public function i18n()
    {
		   load_plugin_textdomain('elementor-test-extension');
    }

	 public function init() {

		$this->i18n();
		add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'frontend_styles' ] );
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'frontend_scripts' ] );
		//add_action( 'elementor/controls/register', [ $this, 'register_controls' ] );
		add_action('elementor/widgets/widgets_registered', [$this, 'init_widgets']);
        add_action('elementor/controls/controls_registered', [$this, 'init_controls']);
    }

}
