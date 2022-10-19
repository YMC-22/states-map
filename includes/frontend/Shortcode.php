<?php

namespace includes\frontend;

use YMCStates\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Shortcode {

	public function __construct() {

		add_shortcode("states_map", [ $this, "run_shortcode" ]);
	}

	public function run_shortcode( $atts ) {

		ob_start();

		$atts = shortcode_atts( [
			'id' => '',
		], $atts );

		$post_id = $atts['id'];

		$post_type = get_post_type($post_id);

		$post_status = get_post_status($post_id);

		$bg_color = Plugin::instance()->admin_variables->get_bg_state($post_id);

		$bg_hover_color = Plugin::instance()->admin_variables->get_bg_hover_state($post_id);

		$bg_tooltip = Plugin::instance()->admin_variables->get_bg_tooltip($post_id);

		$text_tooltip = Plugin::instance()->admin_variables->get_text_color_tooltip($post_id);

		$status_btn = Plugin::instance()->admin_variables->get_status_button($post_id);

		$output = '';

		if ( !empty($post_id) && $post_type === 'states_map' && $post_status === 'publish' ) {

			$output .= '<div id="states-map-'.$post_id.'" class="ymc-states-map states-map-'.$post_id.'" 
			data-postid="'.$post_id.'" data-bgcolor="'.$bg_color.'" data-bghcolor="'.$bg_hover_color.'" 
			data-bgtooltip="'.$bg_tooltip.'" data-colortooltip="'.$text_tooltip.'" data-btnstatus="'.$status_btn.'">';

			$output .= '<div class="states-map-entry">';

			$output .= Plugin::instance()->svg_map->svg_display();

			$output .= '<div class="ymc-tooltip"></div>';

			$output .= '</div>';

			$name_button = Plugin::instance()->admin_variables->get_button($post_id);

			$output .= '<div class="ymc-overlay">
						<div class="ymc-popup">
							<span class="close">x</span>
							<div class="header"></div>
							<div class="container">						
							<div class="text"></div>
							<a class="btn" target="_blank" href="#">'.esc_html__(''.$name_button.'','ymc-states-map').'</a>
							</div>						
						</div></div>';

			$output .= '</div>';

		}
		else {
			echo "<div class='ymc-states-map-notice'>" . esc_html__('States Map US: ID parameter is missing or invalid.', 'ymc-states-map') ."</div>";
		}


		$output .= ob_get_contents();
		ob_end_clean();

		return $output;
	}
}