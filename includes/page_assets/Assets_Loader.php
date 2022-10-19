<?php

namespace includes\page_assets;

use YMCStates\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Assets_Loader {

	/**
	 * Init.
	 *
	 * Initialize Scripts CSS & JS.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 */
	public function __construct() {

		add_action( 'admin_enqueue_scripts', [ $this, 'backend_embed_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'frontend_embed_scripts' ] );

	}

	// Backend enqueue scripts & style.
	public function backend_embed_scripts() {

		wp_enqueue_style( 'states-map-'.$this->generate_handle(), YMC_STATES_URL . 'includes/assets/css/admin.css', array(), YMC_STATES_VERSION);
		wp_enqueue_script('wp-color-picker');
		wp_enqueue_script( 'states-map-'.$this->generate_handle(), YMC_STATES_URL . 'includes/assets/js/admin.js', array( 'jquery' ) );

	}


	// Frontend enqueue scripts & style.
	public function frontend_embed_scripts() {

		wp_enqueue_style( 'states-map-'.$this->generate_handle(), YMC_STATES_URL . 'includes/assets/css/frontend.css', array(), YMC_STATES_VERSION);
		wp_enqueue_script( 'states-map-'.$this->generate_handle(), YMC_STATES_URL . 'includes/assets/js/frontend.js', array( 'jquery' ) );
		wp_localize_script( 'states-map-'.$this->generate_handle(), '_ymc_sm_object',
			array(
				'ajax_url' => admin_url('admin-ajax.php'),
				'nonce'    => wp_create_nonce('get_data_state'),
				'path'     => YMC_STATES_URL
			));

	}

	// Generate handle
	public function generate_handle() {
		return wp_create_nonce('include-sm-scripts');
	}

}