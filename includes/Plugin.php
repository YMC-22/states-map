<?php

namespace YMCStates;

use includes\frontend\Shortcode as Shortcode;
use includes\frontend\SVG_Display as Svg;
use includes\page_assets\Assets_Loader as Assets_Loader;
use includes\backend\Cpt as Cpt;
use includes\backend\Meta_Boxes as Meta_Boxes;
use includes\backend\Admin_Variables as Admin_Variables;
use includes\backend\Ajax_Requests as Ajax_Requests;



if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Plugin {

	/**
	 * Instance
	 *
	 * @access public
	 * @static
	 */
	public static $instance = null;



	/**
	 * Assets loader.
	 *
	 * Holds the plugin assets loader responsible for conditionally enqueuing
	 * styles and script assets that were pre-enabled.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var Assets_Loader
	 */
	public $assets_loader;

	/**
	 * Custom Post Type.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var Cpt
	 */
	public $cpt;


	/**
	 * Meta Boxes.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var Meta_Boxes
	 */
	public $meta_boxes;


	/**
	 * Admin Variables.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var Admin_Variables
	 */
	public $admin_variables;


	/**
	 * Shortcode.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var Shortcode
	 */
	public $shortcode;


	/**
	 * Shortcode.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var Svg
	 */
	public $svg_map;


	/**
	 * Ajax_Requests.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var Ajax_Requests
	 */
	public $requests;

	/**
	 * Set DEFINES
	 */
	const BG_COLOR_STATE = '#307097';

	const BG_HOVER_COLOR_STATE = '#ff9800';

	const BG_TOOLTIP = 'rgba(0, 0, 0, 0.8)';

	const COLOR_TEXT_TOOLTIP = '#fff';

	const TEXT_READ_MORE = 'Read more';


	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 * @access private
	 */
	private function __construct() {

		// Init Plugin
		add_action( 'plugins_loaded', [ $this, 'init' ] );
	}

	/**
	 * Initialize the plugin
	 *
	 * Fired by plugins_loaded action hook.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function init() {

		$this->register_autoloader();
		$this->init_components();
	}

	/**
	 * Register Autoloader
	 *
	 * Autoloader loads all the classes needed to run the plugin.
	 *
	 * @since 1.0.0
	 * @access private
	 */
	private function register_autoloader() {
		require_once YMC_STATES_DIR . 'includes/Autoloader.php';
		Autoloader::run();
	}

	/**
	 * Init components.
	 *
	 * @since 1.0.0
	 * @access private
	 */
	private function init_components() {

		$this->cpt = new Cpt();
		$this->requests = new Ajax_Requests();
		$this->assets_loader = new Assets_Loader();
		$this->meta_boxes = new Meta_Boxes();
		$this->admin_variables = new Admin_Variables();
		$this->shortcode = new Shortcode();
		$this->svg_map = new Svg();

	}

}

Plugin::instance();