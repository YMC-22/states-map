<?php

namespace includes\backend;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Ajax_Requests {

	public function __construct() {

		add_action('wp_ajax_get_state', [ $this,'get_state' ]);

	}

	public function get_state() {

		if (!wp_verify_nonce($_POST['nonce_code'], 'get_data_state')) exit;

		if( !empty($_POST["state_code"]) && !empty($_POST["post_id"]) ) {

			$state_code = sanitize_text_field($_POST["state_code"]);
			$post_id = (int) sanitize_text_field($_POST["post_id"]);
			$title = '';
			$text = '';
			$link = '';

			if( !empty(get_post_meta($post_id, 'ymc_title_states_map_'.$state_code.'', true)) ) {
				$title = get_post_meta($post_id, 'ymc_title_states_map_'.$state_code.'', true);
			}
			if( !empty(get_post_meta($post_id, 'ymc_text_states_map_'.$state_code.'', true)) ) {
				$text = get_post_meta($post_id, 'ymc_text_states_map_'.$state_code.'', true);
			}
			if( !empty(get_post_meta($post_id, 'ymc_link_states_map_'.$state_code.'', true)) ) {
				$link = get_post_meta($post_id, 'ymc_link_states_map_'.$state_code.'', true);
			}
		}

		$data = array(
			'code'  => $state_code,
			'title' => $title,
			'text'  => $text,
			'link'  => $link
		);

		wp_send_json($data);

	}

}