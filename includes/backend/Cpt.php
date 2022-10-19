<?php

namespace includes\backend;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Cpt
 * @package includes\backend
 * Create Custom Post Type
 */

class Cpt {

	const post_type = 'states_map';

	public function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ], 0 );
	}

	public function register_post_type() {

		register_post_type( self::post_type,
			array(
				'labels'              => array(
					'name'          => __( 'States Map US', 'ymc-states-map' ),
					'singular_name' => __( 'States Map US', 'ymc-states-map' ),
				),
				'public'              => false,
				'hierarchical'        => false,
				'exclude_from_search' => true,
				'show_ui'             => current_user_can( 'manage_options' ) ? true : false,
				'show_in_admin_bar'   => false,
				'menu_position'       => 7,
				'menu_icon'           => 'dashicons-admin-site',
				'rewrite'             => false,
				'query_var'           => false,
				'supports'            => array(
					'title',
				),
			) );
	}

}