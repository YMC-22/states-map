<?php

namespace includes\backend;

use YMCStates\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Meta_Boxes
 * @package includes\backend
 * Create Meta Boxes in admin panel
 */

class Meta_Boxes {

	public function __construct() {

		add_action( 'add_meta_boxes', [ $this, 'add_post_metabox' ]);

		add_action( 'save_post', [ $this, 'save_meta_box' ], 10, 2);
	}

	public function save_meta_box( $post_id, $post ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}

        // Button Read More
		if( isset($_POST['button_read_more']) ) {
			$button_read_more = sanitize_text_field( $_POST['button_read_more'] );
			update_post_meta( $post_id, 'button_read_more', $button_read_more );
		}

        // Bg color state
		if( isset($_POST['bg-color-state']) ) {
			$bg_color_state = !empty( $_POST['bg-color-state'] ) ? sanitize_hex_color( $_POST['bg-color-state'] ) : Plugin::BG_COLOR_STATE;
			update_post_meta( $post_id, 'bg_color_state', $bg_color_state );
		}

		// Bg hover color state
		if( isset($_POST['bg-hover-color-state']) ) {
			$bg_hover_color_state = !empty( $_POST['bg-hover-color-state'] ) ? sanitize_hex_color( $_POST['bg-hover-color-state'] ) : Plugin::BG_HOVER_COLOR_STATE;
			update_post_meta( $post_id, 'bg_hover_color_state', $bg_hover_color_state );
		}

		// Bg color tooltip
		if( isset($_POST['bg-color-tooltip']) ) {
			$bg_color_tooltip = !empty( $_POST['bg-color-tooltip'] ) ? sanitize_hex_color( $_POST['bg-color-tooltip'] ) : Plugin::BG_TOOLTIP;
			update_post_meta( $post_id, 'bg_color_tooltip', $bg_color_tooltip );
		}

		// Color text tooltip
		if( isset($_POST['text-color-tooltip']) ) {
			$text_color_tooltip = !empty( $_POST['text-color-tooltip'] ) ? sanitize_hex_color( $_POST['text-color-tooltip'] ) : Plugin::COLOR_TEXT_TOOLTIP;
			update_post_meta( $post_id, 'text_color_tooltip', $text_color_tooltip );
		}

		// Status button Read More
		if( isset($_POST['status_button_read_more']) ) {
			$status_button_read_more = sanitize_text_field( $_POST['status_button_read_more'] );
			update_post_meta( $post_id, 'status_button_read_more', $status_button_read_more );
		}

		// Massachusetts Fields
		if( isset($_POST['ymc_title_states_map_ma']) ) {
			$title_ma = sanitize_text_field( $_POST['ymc_title_states_map_ma'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ma', $title_ma );
		}
		if( isset($_POST['ymc_text_states_map_ma']) ) {
			$text_ma =  wp_kses_post($_POST['ymc_text_states_map_ma']);
			update_post_meta( $post_id, 'ymc_text_states_map_ma', $text_ma );
		}
		if( isset($_POST['ymc_link_states_map_ma']) ) {
			$link_ma = sanitize_url( $_POST['ymc_link_states_map_ma'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ma', $link_ma );
		}
		// Minnesota Fields
		if( isset($_POST['ymc_title_states_map_mn']) ) {
			$title_mn = sanitize_text_field( $_POST['ymc_title_states_map_mn'] );
			update_post_meta( $post_id, 'ymc_title_states_map_mn', $title_mn );
		}
		if( isset($_POST['ymc_text_states_map_mn']) ) {
			$text_mn = wp_kses_post($_POST['ymc_text_states_map_mn']);
			update_post_meta( $post_id, 'ymc_text_states_map_mn', $text_mn );
		}
		if( isset($_POST['ymc_link_states_map_mn']) ) {
			$link_mn = sanitize_url( $_POST['ymc_link_states_map_mn'] );
			update_post_meta( $post_id, 'ymc_link_states_map_mn', $link_mn );
		}
		// Montana Fields
		if( isset($_POST['ymc_title_states_map_mt']) ) {
			$title_mt = sanitize_text_field( $_POST['ymc_title_states_map_mt'] );
			update_post_meta( $post_id, 'ymc_title_states_map_mt', $title_mt );
		}
		if( isset($_POST['ymc_text_states_map_mt']) ) {
			$text_mt = wp_kses_post($_POST['ymc_text_states_map_mt']);
			update_post_meta( $post_id, 'ymc_text_states_map_mt', $text_mt );
		}
		if( isset($_POST['ymc_link_states_map_mt']) ) {
			$link_mt = sanitize_url( $_POST['ymc_link_states_map_mt'] );
			update_post_meta( $post_id, 'ymc_link_states_map_mt', $link_mt );
		}
		// North Dakota
		if( isset($_POST['ymc_title_states_map_nd']) ) {
			$title_nd = sanitize_text_field( $_POST['ymc_title_states_map_nd'] );
			update_post_meta( $post_id, 'ymc_title_states_map_nd', $title_nd );
		}
		if( isset($_POST['ymc_text_states_map_nd']) ) {
			$text_nd = wp_kses_post($_POST['ymc_text_states_map_nd']);
			update_post_meta( $post_id, 'ymc_text_states_map_nd', $text_nd );
		}
		if( isset($_POST['ymc_link_states_map_nd']) ) {
			$link_nd = sanitize_url( $_POST['ymc_link_states_map_nd'] );
			update_post_meta( $post_id, 'ymc_link_states_map_nd', $link_nd );
		}
		// Hawaii
		if( isset($_POST['ymc_title_states_map_hi']) ) {
			$title_hi = sanitize_text_field( $_POST['ymc_title_states_map_hi'] );
			update_post_meta( $post_id, 'ymc_title_states_map_hi', $title_hi );
		}
		if( isset($_POST['ymc_text_states_map_hi']) ) {
			$text_hi = wp_kses_post($_POST['ymc_text_states_map_hi']);
			update_post_meta( $post_id, 'ymc_text_states_map_hi', $text_hi );
		}
		if( isset($_POST['ymc_link_states_map_hi']) ) {
			$link_hi = sanitize_url( $_POST['ymc_link_states_map_hi'] );
			update_post_meta( $post_id, 'ymc_link_states_map_hi', $link_hi );
		}
        // Idaho
		if( isset($_POST['ymc_title_states_map_id']) ) {
			$title_id = sanitize_text_field( $_POST['ymc_title_states_map_id'] );
			update_post_meta( $post_id, 'ymc_title_states_map_id', $title_id );
		}
		if( isset($_POST['ymc_text_states_map_id']) ) {
			$text_id = wp_kses_post($_POST['ymc_text_states_map_id']);
			update_post_meta( $post_id, 'ymc_text_states_map_id', $text_id );
		}
		if( isset($_POST['ymc_link_states_map_id']) ) {
			$link_id = sanitize_url( $_POST['ymc_link_states_map_id'] );
			update_post_meta( $post_id, 'ymc_link_states_map_id', $link_id );
		}
        // Washington
		if( isset($_POST['ymc_title_states_map_wa']) ) {
			$title_wa = sanitize_text_field( $_POST['ymc_title_states_map_wa'] );
			update_post_meta( $post_id, 'ymc_title_states_map_wa', $title_wa );
		}
		if( isset($_POST['ymc_text_states_map_wa']) ) {
			$text_wa = wp_kses_post($_POST['ymc_text_states_map_wa']);
			update_post_meta( $post_id, 'ymc_text_states_map_wa', $text_wa );
		}
		if( isset($_POST['ymc_link_states_map_wa']) ) {
			$link_wa = sanitize_url( $_POST['ymc_link_states_map_wa'] );
			update_post_meta( $post_id, 'ymc_link_states_map_wa', $link_wa );
		}
		// Arizona
		if( isset($_POST['ymc_title_states_map_az']) ) {
			$title_az = sanitize_text_field( $_POST['ymc_title_states_map_az'] );
			update_post_meta( $post_id, 'ymc_title_states_map_az', $title_az );
		}
		if( isset($_POST['ymc_text_states_map_az']) ) {
			$text_az = wp_kses_post($_POST['ymc_text_states_map_az']);
			update_post_meta( $post_id, 'ymc_text_states_map_az', $text_az );
		}
		if( isset($_POST['ymc_link_states_map_az']) ) {
			$link_az = sanitize_url( $_POST['ymc_link_states_map_az'] );
			update_post_meta( $post_id, 'ymc_link_states_map_az', $link_az );
		}
        // California
		if( isset($_POST['ymc_title_states_map_ca']) ) {
			$title_ca = sanitize_text_field( $_POST['ymc_title_states_map_ca'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ca', $title_ca );
		}
		if( isset($_POST['ymc_text_states_map_ca']) ) {
			$text_ca = wp_kses_post($_POST['ymc_text_states_map_ca']);
			update_post_meta( $post_id, 'ymc_text_states_map_ca', $text_ca );
		}
		if( isset($_POST['ymc_link_states_map_ca']) ) {
			$link_ca = sanitize_url( $_POST['ymc_link_states_map_ca'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ca', $link_ca );
		}
        // Colorado
		if( isset($_POST['ymc_title_states_map_co']) ) {
			$title_co = sanitize_text_field( $_POST['ymc_title_states_map_co'] );
			update_post_meta( $post_id, 'ymc_title_states_map_co', $title_co );
		}
		if( isset($_POST['ymc_text_states_map_co']) ) {
			$text_co = sanitize_text_field($_POST['ymc_text_states_map_co']);
			update_post_meta( $post_id, 'ymc_text_states_map_co', $text_co );
		}
		if( isset($_POST['ymc_link_states_map_co']) ) {
			$link_co = sanitize_url( $_POST['ymc_link_states_map_co'] );
			update_post_meta( $post_id, 'ymc_link_states_map_co', $link_co );
		}
        // Nevada
		if( isset($_POST['ymc_title_states_map_nv']) ) {
			$title_nv = sanitize_text_field( $_POST['ymc_title_states_map_nv'] );
			update_post_meta( $post_id, 'ymc_title_states_map_nv', $title_nv );
		}
		if( isset($_POST['ymc_text_states_map_nv']) ) {
			$text_nv = wp_kses_post($_POST['ymc_text_states_map_nv']);
			update_post_meta( $post_id, 'ymc_text_states_map_nv', $text_nv );
		}
		if( isset($_POST['ymc_link_states_map_nv']) ) {
			$link_nv = sanitize_url( $_POST['ymc_link_states_map_nv'] );
			update_post_meta( $post_id, 'ymc_link_states_map_nv', $link_nv );
		}
        // New Mexico
		if( isset($_POST['ymc_title_states_map_nm']) ) {
			$title_nm = sanitize_text_field( $_POST['ymc_title_states_map_nm'] );
			update_post_meta( $post_id, 'ymc_title_states_map_nm', $title_nm );
		}
		if( isset($_POST['ymc_text_states_map_nm']) ) {
			$text_nm = wp_kses_post($_POST['ymc_text_states_map_nm']);
			update_post_meta( $post_id, 'ymc_text_states_map_nm', $text_nm );
		}
		if( isset($_POST['ymc_link_states_map_nm']) ) {
			$link_nm = sanitize_url( $_POST['ymc_link_states_map_nm'] );
			update_post_meta( $post_id, 'ymc_link_states_map_nm', $link_nm );
		}
        // Oregon
		if( isset($_POST['ymc_title_states_map_or']) ) {
			$title_or = sanitize_text_field( $_POST['ymc_title_states_map_or'] );
			update_post_meta( $post_id, 'ymc_title_states_map_or', $title_or );
		}
		if( isset($_POST['ymc_text_states_map_or']) ) {
			$text_or = wp_kses_post($_POST['ymc_text_states_map_or']);
			update_post_meta( $post_id, 'ymc_text_states_map_or', $text_or );
		}
		if( isset($_POST['ymc_link_states_map_or']) ) {
			$link_or = sanitize_url( $_POST['ymc_link_states_map_or'] );
			update_post_meta( $post_id, 'ymc_link_states_map_or', $link_or );
		}
        // Utah
		if( isset($_POST['ymc_title_states_map_ut']) ) {
			$title_ut = sanitize_text_field( $_POST['ymc_title_states_map_ut'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ut', $title_ut );
		}
		if( isset($_POST['ymc_text_states_map_ut']) ) {
			$text_ut = wp_kses_post($_POST['ymc_text_states_map_ut']);
			update_post_meta( $post_id, 'ymc_text_states_map_ut', $text_ut );
		}
		if( isset($_POST['ymc_link_states_map_ut']) ) {
			$link_ut = sanitize_url( $_POST['ymc_link_states_map_ut'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ut', $link_ut );
		}
        // Wyoming
		if( isset($_POST['ymc_title_states_map_wy']) ) {
			$title_wy = sanitize_text_field( $_POST['ymc_title_states_map_wy'] );
			update_post_meta( $post_id, 'ymc_title_states_map_wy', $title_wy );
		}
		if( isset($_POST['ymc_text_states_map_wy']) ) {
			$text_wy = wp_kses_post($_POST['ymc_text_states_map_wy']);
			update_post_meta( $post_id, 'ymc_text_states_map_wy', $text_wy );
		}
		if( isset($_POST['ymc_link_states_map_wy']) ) {
			$link_wy = sanitize_url( $_POST['ymc_link_states_map_wy'] );
			update_post_meta( $post_id, 'ymc_link_states_map_wy', $link_wy );
		}
        // Arkansas
		if( isset($_POST['ymc_title_states_map_ar']) ) {
			$title_ar = sanitize_text_field( $_POST['ymc_title_states_map_ar'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ar', $title_ar );
		}
		if( isset($_POST['ymc_text_states_map_ar']) ) {
			$text_ar = wp_kses_post($_POST['ymc_text_states_map_ar']);
			update_post_meta( $post_id, 'ymc_text_states_map_ar', $text_ar );
		}
		if( isset($_POST['ymc_link_states_map_ar']) ) {
			$link_ar = sanitize_url( $_POST['ymc_link_states_map_ar'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ar', $link_ar );
		}
        // Iowa
		if( isset($_POST['ymc_title_states_map_ia']) ) {
			$title_ia = sanitize_text_field( $_POST['ymc_title_states_map_ia'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ia', $title_ia );
		}
		if( isset($_POST['ymc_text_states_map_ia']) ) {
			$text_ia = wp_kses_post($_POST['ymc_text_states_map_ia']);
			update_post_meta( $post_id, 'ymc_text_states_map_ia', $text_ia );
		}
		if( isset($_POST['ymc_link_states_map_ia']) ) {
			$link_ia = sanitize_url( $_POST['ymc_link_states_map_ia'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ia', $link_ia );
		}
        // Kansas
		if( isset($_POST['ymc_title_states_map_ks']) ) {
			$title_ks = sanitize_text_field( $_POST['ymc_title_states_map_ks'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ks', $title_ks );
		}
		if( isset($_POST['ymc_text_states_map_ks']) ) {
			$text_ks = wp_kses_post($_POST['ymc_text_states_map_ks']);
			update_post_meta( $post_id, 'ymc_text_states_map_ks', $text_ks );
		}
		if( isset($_POST['ymc_link_states_map_ks']) ) {
			$link_ks = sanitize_url( $_POST['ymc_link_states_map_ks'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ks', $link_ks );
		}
        // Missouri
		if( isset($_POST['ymc_title_states_map_mo']) ) {
			$title_mo = sanitize_text_field( $_POST['ymc_title_states_map_mo'] );
			update_post_meta( $post_id, 'ymc_title_states_map_mo', $title_mo );
		}
		if( isset($_POST['ymc_text_states_map_mo']) ) {
			$text_mo = wp_kses_post($_POST['ymc_text_states_map_mo']);
			update_post_meta( $post_id, 'ymc_text_states_map_mo', $text_mo );
		}
		if( isset($_POST['ymc_link_states_map_mo']) ) {
			$link_mo = sanitize_url( $_POST['ymc_link_states_map_mo'] );
			update_post_meta( $post_id, 'ymc_link_states_map_mo', $link_mo );
		}
        // Nebraska
		if( isset($_POST['ymc_title_states_map_ne']) ) {
			$title_ne = sanitize_text_field( $_POST['ymc_title_states_map_ne'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ne', $title_ne );
		}
		if( isset($_POST['ymc_text_states_map_ne']) ) {
			$text_ne = wp_kses_post($_POST['ymc_text_states_map_ne']);
			update_post_meta( $post_id, 'ymc_text_states_map_ne', $text_ne );
		}
		if( isset($_POST['ymc_link_states_map_ne']) ) {
			$link_ne = sanitize_url( $_POST['ymc_link_states_map_ne'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ne', $link_ne );
		}
        // Oklahoma
		if( isset($_POST['ymc_title_states_map_ok']) ) {
			$title_ok = sanitize_text_field( $_POST['ymc_title_states_map_ok'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ok', $title_ok );
		}
		if( isset($_POST['ymc_text_states_map_ok']) ) {
			$text_ok = wp_kses_post($_POST['ymc_text_states_map_ok']);
			update_post_meta( $post_id, 'ymc_text_states_map_ok', $text_ok );
		}
		if( isset($_POST['ymc_link_states_map_ok']) ) {
			$link_ok = sanitize_url( $_POST['ymc_link_states_map_ok'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ok', $link_ok );
		}
        // South Dakota
		if( isset($_POST['ymc_title_states_map_sd']) ) {
			$title_sd = sanitize_text_field( $_POST['ymc_title_states_map_sd'] );
			update_post_meta( $post_id, 'ymc_title_states_map_sd', $title_sd );
		}
		if( isset($_POST['ymc_text_states_map_sd']) ) {
			$text_sd = wp_kses_post($_POST['ymc_text_states_map_sd']);
			update_post_meta( $post_id, 'ymc_text_states_map_sd', $text_sd );
		}
		if( isset($_POST['ymc_link_states_map_sd']) ) {
			$link_sd = sanitize_url( $_POST['ymc_link_states_map_sd'] );
			update_post_meta( $post_id, 'ymc_link_states_map_sd', $link_sd );
		}
        // Louisiana
		if( isset($_POST['ymc_title_states_map_la']) ) {
			$title_la = sanitize_text_field( $_POST['ymc_title_states_map_la'] );
			update_post_meta( $post_id, 'ymc_title_states_map_la', $title_la );
		}
		if( isset($_POST['ymc_text_states_map_la']) ) {
			$text_la = wp_kses_post($_POST['ymc_text_states_map_la']);
			update_post_meta( $post_id, 'ymc_text_states_map_la', $text_la );
		}
		if( isset($_POST['ymc_link_states_map_la']) ) {
			$link_la = sanitize_url( $_POST['ymc_link_states_map_la'] );
			update_post_meta( $post_id, 'ymc_link_states_map_la', $link_la );
		}
        // Texas
		if( isset($_POST['ymc_title_states_map_tx']) ) {
			$title_tx = sanitize_text_field( $_POST['ymc_title_states_map_tx'] );
			update_post_meta( $post_id, 'ymc_title_states_map_tx', $title_tx );
		}
		if( isset($_POST['ymc_text_states_map_tx']) ) {
			$text_tx = wp_kses_post($_POST['ymc_text_states_map_tx']);
			update_post_meta( $post_id, 'ymc_text_states_map_tx', $text_tx );
		}
		if( isset($_POST['ymc_link_states_map_tx']) ) {
			$link_tx = sanitize_url( $_POST['ymc_link_states_map_tx'] );
			update_post_meta( $post_id, 'ymc_link_states_map_tx', $link_tx );
		}
        // Connecticut
		if( isset($_POST['ymc_title_states_map_ct']) ) {
			$title_ct = sanitize_text_field( $_POST['ymc_title_states_map_ct'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ct', $title_ct );
		}
		if( isset($_POST['ymc_text_states_map_ct']) ) {
			$text_ct = wp_kses_post($_POST['ymc_text_states_map_ct']);
			update_post_meta( $post_id, 'ymc_text_states_map_ct', $text_ct );
		}
		if( isset($_POST['ymc_link_states_map_ct']) ) {
			$link_ct = sanitize_url( $_POST['ymc_link_states_map_ct'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ct', $link_ct );
		}
        // New Hampshire
		if( isset($_POST['ymc_title_states_map_nh']) ) {
			$title_nh = sanitize_text_field( $_POST['ymc_title_states_map_nh'] );
			update_post_meta( $post_id, 'ymc_title_states_map_nh', $title_nh );
		}
		if( isset($_POST['ymc_text_states_map_nh']) ) {
			$text_nh = wp_kses_post($_POST['ymc_text_states_map_nh']);
			update_post_meta( $post_id, 'ymc_text_states_map_nh', $text_nh );
		}
		if( isset($_POST['ymc_link_states_map_nh']) ) {
			$link_nh = sanitize_url( $_POST['ymc_link_states_map_nh'] );
			update_post_meta( $post_id, 'ymc_link_states_map_nh', $link_nh );
		}
        // Rhode Island
		if( isset($_POST['ymc_title_states_map_ri']) ) {
			$title_ri = sanitize_text_field( $_POST['ymc_title_states_map_ri'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ri', $title_ri );
		}
		if( isset($_POST['ymc_text_states_map_ri']) ) {
			$text_ri = wp_kses_post($_POST['ymc_text_states_map_ri']);
			update_post_meta( $post_id, 'ymc_text_states_map_ri', $text_ri );
		}
		if( isset($_POST['ymc_link_states_map_ri']) ) {
			$link_ri = sanitize_url( $_POST['ymc_link_states_map_ri'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ri', $link_ri );
		}
        // Vermont
		if( isset($_POST['ymc_title_states_map_vt']) ) {
			$title_vt = sanitize_text_field( $_POST['ymc_title_states_map_vt'] );
			update_post_meta( $post_id, 'ymc_title_states_map_vt', $title_vt );
		}
		if( isset($_POST['ymc_text_states_map_vt']) ) {
			$text_vt = wp_kses_post($_POST['ymc_text_states_map_vt']);
			update_post_meta( $post_id, 'ymc_text_states_map_vt', $text_vt );
		}
		if( isset($_POST['ymc_link_states_map_vt']) ) {
			$link_vt = sanitize_url( $_POST['ymc_link_states_map_vt'] );
			update_post_meta( $post_id, 'ymc_link_states_map_vt', $link_vt );
		}
        // Alabama
		if( isset($_POST['ymc_title_states_map_al']) ) {
			$title_al = sanitize_text_field( $_POST['ymc_title_states_map_al'] );
			update_post_meta( $post_id, 'ymc_title_states_map_al', $title_al );
		}
		if( isset($_POST['ymc_text_states_map_al']) ) {
			$text_al = wp_kses_post($_POST['ymc_text_states_map_al']);
			update_post_meta( $post_id, 'ymc_text_states_map_al', $text_al );
		}
		if( isset($_POST['ymc_link_states_map_al']) ) {
			$link_al = sanitize_url( $_POST['ymc_link_states_map_al'] );
			update_post_meta( $post_id, 'ymc_link_states_map_al', $link_al );
		}
        // Florida
		if( isset($_POST['ymc_title_states_map_fl']) ) {
			$title_fl = sanitize_text_field( $_POST['ymc_title_states_map_fl'] );
			update_post_meta( $post_id, 'ymc_title_states_map_fl', $title_fl );
		}
		if( isset($_POST['ymc_text_states_map_fl']) ) {
			$text_fl = wp_kses_post($_POST['ymc_text_states_map_fl']);
			update_post_meta( $post_id, 'ymc_text_states_map_fl', $text_fl );
		}
		if( isset($_POST['ymc_link_states_map_fl']) ) {
			$link_fl = sanitize_url( $_POST['ymc_link_states_map_fl'] );
			update_post_meta( $post_id, 'ymc_link_states_map_fl', $link_fl );
		}
		// Georgia
		if( isset($_POST['ymc_title_states_map_ga']) ) {
			$title_ga = sanitize_text_field( $_POST['ymc_title_states_map_ga'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ga', $title_ga );
		}
		if( isset($_POST['ymc_text_states_map_ga']) ) {
			$text_ga = wp_kses_post($_POST['ymc_text_states_map_ga']);
			update_post_meta( $post_id, 'ymc_text_states_map_ga', $text_ga );
		}
		if( isset($_POST['ymc_link_states_map_ga']) ) {
			$link_ga = sanitize_url( $_POST['ymc_link_states_map_ga'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ga', $link_ga );
		}
		// Mississippi
		if( isset($_POST['ymc_title_states_map_ms']) ) {
			$title_ms = sanitize_text_field( $_POST['ymc_title_states_map_ms'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ms', $title_ms );
		}
		if( isset($_POST['ymc_text_states_map_ms']) ) {
			$text_ms = wp_kses_post($_POST['ymc_text_states_map_ms']);
			update_post_meta( $post_id, 'ymc_text_states_map_ms', $text_ms );
		}
		if( isset($_POST['ymc_link_states_map_ms']) ) {
			$link_ms = sanitize_url( $_POST['ymc_link_states_map_ms'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ms', $link_ms );
		}
        // South Carolina
		if( isset($_POST['ymc_title_states_map_sc']) ) {
			$title_sc = sanitize_text_field( $_POST['ymc_title_states_map_sc'] );
			update_post_meta( $post_id, 'ymc_title_states_map_sc', $title_sc );
		}
		if( isset($_POST['ymc_text_states_map_sc']) ) {
			$text_sc = wp_kses_post($_POST['ymc_text_states_map_sc']);
			update_post_meta( $post_id, 'ymc_text_states_map_sc', $text_sc );
		}
		if( isset($_POST['ymc_link_states_map_sc']) ) {
			$link_sc = sanitize_url( $_POST['ymc_link_states_map_sc'] );
			update_post_meta( $post_id, 'ymc_link_states_map_sc', $link_sc );
		}
        // Illinois
		if( isset($_POST['ymc_title_states_map_il']) ) {
			$title_il = sanitize_text_field( $_POST['ymc_title_states_map_il'] );
			update_post_meta( $post_id, 'ymc_title_states_map_il', $title_il );
		}
		if( isset($_POST['ymc_text_states_map_il']) ) {
			$text_il = wp_kses_post($_POST['ymc_text_states_map_il']);
			update_post_meta( $post_id, 'ymc_text_states_map_il', $text_il );
		}
		if( isset($_POST['ymc_link_states_map_il']) ) {
			$link_il = sanitize_url( $_POST['ymc_link_states_map_il'] );
			update_post_meta( $post_id, 'ymc_link_states_map_il', $link_il );
		}
        // Indiana
		if( isset($_POST['ymc_title_states_map_in']) ) {
			$title_in = sanitize_text_field( $_POST['ymc_title_states_map_in'] );
			update_post_meta( $post_id, 'ymc_title_states_map_in', $title_in );
		}
		if( isset($_POST['ymc_text_states_map_in']) ) {
			$text_in = wp_kses_post($_POST['ymc_text_states_map_in']);
			update_post_meta( $post_id, 'ymc_text_states_map_in', $text_in );
		}
		if( isset($_POST['ymc_link_states_map_in']) ) {
			$link_in = sanitize_url( $_POST['ymc_link_states_map_in'] );
			update_post_meta( $post_id, 'ymc_link_states_map_in', $link_in );
		}
        // Kentucky
		if( isset($_POST['ymc_title_states_map_ky']) ) {
			$title_ky = sanitize_text_field( $_POST['ymc_title_states_map_ky'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ky', $title_ky );
		}
		if( isset($_POST['ymc_text_states_map_ky']) ) {
			$text_ky = wp_kses_post($_POST['ymc_text_states_map_ky']);
			update_post_meta( $post_id, 'ymc_text_states_map_ky', $text_ky );
		}
		if( isset($_POST['ymc_link_states_map_ky']) ) {
			$link_ky = sanitize_url( $_POST['ymc_link_states_map_ky'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ky', $link_ky );
		}
        // North Carolina
		if( isset($_POST['ymc_title_states_map_nc']) ) {
			$title_nc = sanitize_text_field( $_POST['ymc_title_states_map_nc'] );
			update_post_meta( $post_id, 'ymc_title_states_map_nc', $title_nc );
		}
		if( isset($_POST['ymc_text_states_map_nc']) ) {
			$text_nc = wp_kses_post($_POST['ymc_text_states_map_nc']);
			update_post_meta( $post_id, 'ymc_text_states_map_nc', $text_nc );
		}
		if( isset($_POST['ymc_link_states_map_nc']) ) {
			$link_nc = sanitize_url( $_POST['ymc_link_states_map_nc'] );
			update_post_meta( $post_id, 'ymc_link_states_map_nc', $link_nc );
		}
        // Ohio
		if( isset($_POST['ymc_title_states_map_oh']) ) {
			$title_oh = sanitize_text_field( $_POST['ymc_title_states_map_oh'] );
			update_post_meta( $post_id, 'ymc_title_states_map_oh', $title_oh );
		}
		if( isset($_POST['ymc_text_states_map_oh']) ) {
			$text_oh = wp_kses_post($_POST['ymc_text_states_map_oh']);
			update_post_meta( $post_id, 'ymc_text_states_map_oh', $text_oh );
		}
		if( isset($_POST['ymc_link_states_map_oh']) ) {
			$link_oh = sanitize_url( $_POST['ymc_link_states_map_oh'] );
			update_post_meta( $post_id, 'ymc_link_states_map_oh', $link_oh );
		}
        // Tennessee
		if( isset($_POST['ymc_title_states_map_tn']) ) {
			$title_tn = sanitize_text_field( $_POST['ymc_title_states_map_tn'] );
			update_post_meta( $post_id, 'ymc_title_states_map_tn', $title_tn );
		}
		if( isset($_POST['ymc_text_states_map_tn']) ) {
			$text_tn = wp_kses_post($_POST['ymc_text_states_map_tn']);
			update_post_meta( $post_id, 'ymc_text_states_map_tn', $text_tn );
		}
		if( isset($_POST['ymc_link_states_map_tn']) ) {
			$link_tn = sanitize_url( $_POST['ymc_link_states_map_tn'] );
			update_post_meta( $post_id, 'ymc_link_states_map_tn', $link_tn );
		}
        // Virginia
		if( isset($_POST['ymc_title_states_map_va']) ) {
			$title_va = sanitize_text_field( $_POST['ymc_title_states_map_va'] );
			update_post_meta( $post_id, 'ymc_title_states_map_va', $title_va );
		}
		if( isset($_POST['ymc_text_states_map_va']) ) {
			$text_va = wp_kses_post($_POST['ymc_text_states_map_va']);
			update_post_meta( $post_id, 'ymc_text_states_map_va', $text_va );
		}
		if( isset($_POST['ymc_link_states_map_va']) ) {
			$link_va = sanitize_url( $_POST['ymc_link_states_map_va'] );
			update_post_meta( $post_id, 'ymc_link_states_map_va', $link_va );
		}
        // Wisconsin
		if( isset($_POST['ymc_title_states_map_wi']) ) {
			$title_wi = sanitize_text_field( $_POST['ymc_title_states_map_wi'] );
			update_post_meta( $post_id, 'ymc_title_states_map_wi', $title_wi );
		}
		if( isset($_POST['ymc_text_states_map_wi']) ) {
			$text_wi = wp_kses_post($_POST['ymc_text_states_map_wi']);
			update_post_meta( $post_id, 'ymc_text_states_map_wi', $text_wi );
		}
		if( isset($_POST['ymc_link_states_map_wi']) ) {
			$link_wi = sanitize_url( $_POST['ymc_link_states_map_wi'] );
			update_post_meta( $post_id, 'ymc_link_states_map_wi', $link_wi );
		}
        // West Virginia
		if( isset($_POST['ymc_title_states_map_wv']) ) {
			$title_wv = sanitize_text_field( $_POST['ymc_title_states_map_wv'] );
			update_post_meta( $post_id, 'ymc_title_states_map_wv', $title_wv );
		}
		if( isset($_POST['ymc_text_states_map_wv']) ) {
			$text_wv = wp_kses_post($_POST['ymc_text_states_map_wv']);
			update_post_meta( $post_id, 'ymc_text_states_map_wv', $text_wv );
		}
		if( isset($_POST['ymc_link_states_map_wv']) ) {
			$link_wv = sanitize_url( $_POST['ymc_link_states_map_wv'] );
			update_post_meta( $post_id, 'ymc_link_states_map_wv', $link_wv );
		}
        // Delaware
		if( isset($_POST['ymc_title_states_map_de']) ) {
			$title_de = sanitize_text_field( $_POST['ymc_title_states_map_de'] );
			update_post_meta( $post_id, 'ymc_title_states_map_de', $title_de );
		}
		if( isset($_POST['ymc_text_states_map_de']) ) {
			$text_de = wp_kses_post($_POST['ymc_text_states_map_de']);
			update_post_meta( $post_id, 'ymc_text_states_map_de', $text_de );
		}
		if( isset($_POST['ymc_link_states_map_de']) ) {
			$link_de = sanitize_url( $_POST['ymc_link_states_map_de'] );
			update_post_meta( $post_id, 'ymc_link_states_map_de', $link_de );
		}
        // District of Columbia
		if( isset($_POST['ymc_title_states_map_dc']) ) {
			$title_dc = sanitize_text_field( $_POST['ymc_title_states_map_dc'] );
			update_post_meta( $post_id, 'ymc_title_states_map_dc', $title_dc );
		}
		if( isset($_POST['ymc_text_states_map_dc']) ) {
			$text_dc = wp_kses_post($_POST['ymc_text_states_map_dc']);
			update_post_meta( $post_id, 'ymc_text_states_map_dc', $text_dc );
		}
		if( isset($_POST['ymc_link_states_map_dc']) ) {
			$link_dc = sanitize_url( $_POST['ymc_link_states_map_dc'] );
			update_post_meta( $post_id, 'ymc_link_states_map_dc', $link_dc );
		}
        // Maryland
		if( isset($_POST['ymc_title_states_map_md']) ) {
			$title_md = sanitize_text_field( $_POST['ymc_title_states_map_md'] );
			update_post_meta( $post_id, 'ymc_title_states_map_md', $title_md );
		}
		if( isset($_POST['ymc_text_states_map_md']) ) {
			$text_md = wp_kses_post($_POST['ymc_text_states_map_md']);
			update_post_meta( $post_id, 'ymc_text_states_map_md', $text_md );
		}
		if( isset($_POST['ymc_link_states_map_md']) ) {
			$link_md = sanitize_url( $_POST['ymc_link_states_map_md'] );
			update_post_meta( $post_id, 'ymc_link_states_map_md', $link_md );
		}
        // New Jersey
		if( isset($_POST['ymc_title_states_map_nj']) ) {
			$title_nj = sanitize_text_field( $_POST['ymc_title_states_map_nj'] );
			update_post_meta( $post_id, 'ymc_title_states_map_nj', $title_nj );
		}
		if( isset($_POST['ymc_text_states_map_nj']) ) {
			$text_nj = wp_kses_post($_POST['ymc_text_states_map_nj']);
			update_post_meta( $post_id, 'ymc_text_states_map_nj', $text_nj );
		}
		if( isset($_POST['ymc_link_states_map_nj']) ) {
			$link_nj = sanitize_url( $_POST['ymc_link_states_map_nj'] );
			update_post_meta( $post_id, 'ymc_link_states_map_nj', $link_nj );
		}
        // New York
		if( isset($_POST['ymc_title_states_map_ny']) ) {
			$title_ny = sanitize_text_field( $_POST['ymc_title_states_map_ny'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ny', $title_ny );
		}
		if( isset($_POST['ymc_text_states_map_ny']) ) {
			$text_ny = wp_kses_post($_POST['ymc_text_states_map_ny']);
			update_post_meta( $post_id, 'ymc_text_states_map_ny', $text_ny );
		}
		if( isset($_POST['ymc_link_states_map_ny']) ) {
			$link_ny = sanitize_url( $_POST['ymc_link_states_map_ny'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ny', $link_ny );
		}
        // Pennsylvania
		if( isset($_POST['ymc_title_states_map_pa']) ) {
			$title_pa = sanitize_text_field( $_POST['ymc_title_states_map_pa'] );
			update_post_meta( $post_id, 'ymc_title_states_map_pa', $title_pa );
		}
		if( isset($_POST['ymc_text_states_map_pa']) ) {
			$text_pa = wp_kses_post($_POST['ymc_text_states_map_pa']);
			update_post_meta( $post_id, 'ymc_text_states_map_pa', $text_pa );
		}
		if( isset($_POST['ymc_link_states_map_pa']) ) {
			$link_pa = sanitize_url( $_POST['ymc_link_states_map_pa'] );
			update_post_meta( $post_id, 'ymc_link_states_map_pa', $link_pa );
		}
        // Maine
		if( isset($_POST['ymc_title_states_map_me']) ) {
			$title_me = sanitize_text_field( $_POST['ymc_title_states_map_me'] );
			update_post_meta( $post_id, 'ymc_title_states_map_me', $title_me );
		}
		if( isset($_POST['ymc_text_states_map_me']) ) {
			$text_me = wp_kses_post($_POST['ymc_text_states_map_me']);
			update_post_meta( $post_id, 'ymc_text_states_map_me', $text_me );
		}
		if( isset($_POST['ymc_link_states_map_me']) ) {
			$link_me = sanitize_url( $_POST['ymc_link_states_map_me'] );
			update_post_meta( $post_id, 'ymc_link_states_map_me', $link_me );
		}
        // Michigan
		if( isset($_POST['ymc_title_states_map_mi']) ) {
			$title_mi = sanitize_text_field( $_POST['ymc_title_states_map_mi'] );
			update_post_meta( $post_id, 'ymc_title_states_map_mi', $title_mi );
		}
		if( isset($_POST['ymc_text_states_map_mi']) ) {
			$text_mi = wp_kses_post($_POST['ymc_text_states_map_mi']);
			update_post_meta( $post_id, 'ymc_text_states_map_mi', $text_mi );
		}
		if( isset($_POST['ymc_link_states_map_mi']) ) {
			$link_mi = sanitize_url( $_POST['ymc_link_states_map_mi'] );
			update_post_meta( $post_id, 'ymc_link_states_map_mi', $link_mi );
		}
        // Alaska
		if( isset($_POST['ymc_title_states_map_ak']) ) {
			$title_ak = sanitize_text_field( $_POST['ymc_title_states_map_ak'] );
			update_post_meta( $post_id, 'ymc_title_states_map_ak', $title_ak );
		}
		if( isset($_POST['ymc_text_states_map_ak']) ) {
			$text_ak = wp_kses_post($_POST['ymc_text_states_map_ak']);
			update_post_meta( $post_id, 'ymc_text_states_map_ak', $text_ak );
		}
		if( isset($_POST['ymc_link_states_map_ak']) ) {
			$link_ak = sanitize_url( $_POST['ymc_link_states_map_ak'] );
			update_post_meta( $post_id, 'ymc_link_states_map_ak', $link_ak );
		}

	}

	public function add_post_metabox() {

		add_meta_box( 'ymc_top_meta_box' , __('Settings Map','ymc-states-map'), [ $this,'top_meta_box' ], 'states_map', 'normal', 'core');

		add_meta_box( 'ymc_side_meta_box' , __('States Map US','ymc-states-map'), [ $this,'side_meta_box' ], 'states_map', 'side', 'core');

	}

	public function top_meta_box() {

		$post_id = get_the_ID();

		$var_instance = Plugin::instance()->admin_variables;

		$var_instance->init_variables($post_id);

		?>

		<div class="ymc-sm-container-settings">

            <div class="header active">
                <span class="icon-theme dashicons dashicons-shortcode"></span>
				<?php echo esc_html__('Shortcode Options', 'ymc-states-map'); ?>
                <span class="dashicons dashicons-arrow-down-alt2 active"></span>
            </div>

            <div class="content content-shortcode active">
                <div class="form-group">
                    <label for="ymc-shortcode" class="form-label">
						<?php echo esc_html__('Shortcode For Page / Post','ymc-states-map'); ?>
                        <span class="information">
                    <?php echo esc_html__('Directly paste this shortcode in your page','ymc-states-map'); ?>
                    </span>
                    </label>
                    <input type="text" readonly value="[states_map id='<?php echo esc_attr($post_id); ?>']" onfocus="this.select()" class="random-shortcode">
                </div>
                <div class="form-group">
                    <label for="ymc-shortcode" class="form-label">
						<?php echo esc_html__('Shortcode For Page Template','ymc-states-map'); ?>
                        <span class="information">
                            <?php echo esc_html__('Directly paste this shortcode in your page template','ymc-states-map'); ?>
                        </span>
                    </label>
					<?php $sh_code = "&lt;?php echo do_shortcode('[states_map id=&quot;". esc_attr($post_id) ."&quot;]'); ?&gt;"; ?>
                    <input type="text" readonly value="<?php echo esc_attr($sh_code); ?>" onfocus="this.select()" class="random-shortcode">
                </div>
            </div>

			<header class="header">
                <span class="icon-theme dashicons dashicons-list-view"></span>
				<?php echo esc_html__('States Options','ymc-states-map'); ?>
                <span class="dashicons dashicons-arrow-down-alt2"></span>
			</header>

			<div class="content content-states">
                <div class="form-group">

                    <label for="ymc-state" class="form-label">
		                <?php echo esc_html__('List of States US','ymc-states-map'); ?>
                        <span class="information">
                        <?php echo esc_html__('Choose a state and add information. This will be displayed in a popup.','ymc-states-map'); ?>
                    </span>
                    </label>

                    <ul class="states-container">
                        <li id="az" class="state az arizona">
                            <a class="tab" href="#"><?php echo esc_html__('Arizona','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_az" value="<?php echo $var_instance->title_az ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_az, 'ymc_text_states_map_az', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_az',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_az" value="<?php echo $var_instance->link_az; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ak" class="state ak alaska">
                            <a class="tab" href="#"><?php echo esc_html__('Alaska','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ak" value="<?php echo $var_instance->title_ak; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ak, 'ymc_text_states_map_ak', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ak',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ak" value="<?php echo $var_instance->link_ak; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="al" class="state al alabama">
                            <a class="tab" href="#"><?php echo esc_html__('Alabama','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_al" value="<?php echo $var_instance->title_al; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_al, 'ymc_text_states_map_al', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_al',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_al" value="<?php echo $var_instance->link_al; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ca" class="state ca california">
                            <a class="tab" href="#"><?php echo esc_html__('California','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ca" value="<?php echo $var_instance->title_ca ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ca, 'ymc_text_states_map_ca', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ca',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ca" value="<?php echo $var_instance->link_ca; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="co" class="state co colorado">
                            <a class="tab" href="#"><?php echo esc_html__('Colorado','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_co" value="<?php echo $var_instance->title_co ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_co, 'ymc_text_states_map_co', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_co',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_co" value="<?php echo $var_instance->link_co; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ct" class="state ct connecticut">
                            <a class="tab" href="#"><?php echo esc_html__('Connecticut','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ct" value="<?php echo $var_instance->title_ct; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ct, 'ymc_text_states_map_ct', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ct',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ct" value="<?php echo $var_instance->link_ct; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="de" class="state de delaware">
                            <a class="tab" href="#"><?php echo esc_html__('Delaware','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_de" value="<?php echo $var_instance->title_de; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_de, 'ymc_text_states_map_de', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_de',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_de" value="<?php echo $var_instance->link_de; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="dc" class="state dc district-columbia">
                            <a class="tab" href="#"><?php echo esc_html__('District of Columbia','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_dc" value="<?php echo $var_instance->title_dc; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_dc, 'ymc_text_states_map_dc', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_dc',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_dc" value="<?php echo $var_instance->link_dc; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="fl" class="state fl florida">
                            <a class="tab" href="#"><?php echo esc_html__('Florida','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_fl" value="<?php echo $var_instance->title_fl; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_fl, 'ymc_text_states_map_fl', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_fl',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_fl" value="<?php echo $var_instance->link_fl; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ga" class="state ga georgia">
                            <a class="tab" href="#"><?php echo esc_html__('Georgia','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ga" value="<?php echo $var_instance->title_ga; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ga, 'ymc_text_states_map_ga', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ga',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ga" value="<?php echo $var_instance->link_ga; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="hi" class="state hi hawaii">
                            <a class="tab" href="#"><?php echo esc_html__('Hawaii','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_hi" value="<?php echo $var_instance->title_hi ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_hi, 'ymc_text_states_map_hi', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_hi',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_hi" value="<?php echo $var_instance->link_hi; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="il" class="state il illinois">
                            <a class="tab" href="#"><?php echo esc_html__('Illinois','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_il" value="<?php echo $var_instance->title_il; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_il, 'ymc_text_states_map_il', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_il',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_il" value="<?php echo $var_instance->link_il; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="id" class="state id idaho">
                            <a class="tab" href="#"><?php echo esc_html__('Idaho','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_id" value="<?php echo $var_instance->title_id ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_id, 'ymc_text_states_map_id', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_id',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_id" value="<?php echo $var_instance->link_id; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ia" class="state ia iowa">
                            <a class="tab" href="#"><?php echo esc_html__('Iowa','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ia" value="<?php echo $var_instance->title_ia; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ia, 'ymc_text_states_map_ia', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ia',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ia" value="<?php echo $var_instance->link_ia; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="in" class="state in indiana">
                            <a class="tab" href="#"><?php echo esc_html__('Indiana','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_in" value="<?php echo $var_instance->title_in; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_in, 'ymc_text_states_map_in', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_in',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_in" value="<?php echo $var_instance->link_in; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ky" class="state ky kentucky">
                            <a class="tab" href="#"><?php echo esc_html__('Kentucky','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ky" value="<?php echo $var_instance->title_ky; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ky, 'ymc_text_states_map_ky', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ky',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ky" value="<?php echo $var_instance->link_ky; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ks" class="state ks kansas">
                            <a class="tab" href="#"><?php echo esc_html__('Kansas','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ks" value="<?php echo $var_instance->title_ks; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ks, 'ymc_text_states_map_ks', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ks',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ks" value="<?php echo $var_instance->link_ks; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="la" class="state la louisiana">
                            <a class="tab" href="#"><?php echo esc_html__('Louisiana','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_la" value="<?php echo $var_instance->title_la; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_la, 'ymc_text_states_map_la', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_la',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_la" value="<?php echo $var_instance->link_la; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="me" class="state me maine">
                            <a class="tab" href="#"><?php echo esc_html__('Maine','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_me" value="<?php echo $var_instance->title_me; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_me, 'ymc_text_states_map_me', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_me',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_me" value="<?php echo $var_instance->link_me; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="mi" class="state mi michigan">
                            <a class="tab" href="#"><?php echo esc_html__('Michigan','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_mi" value="<?php echo $var_instance->title_mi; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_mi, 'ymc_text_states_map_mi', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_mi',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_mi" value="<?php echo $var_instance->link_mi; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ma" class="state ma massachusetts">
                            <a  class="tab" href="#"><?php echo esc_html__('Massachusetts','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ma" value="<?php echo $var_instance->title_ma; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ma, 'ymc_text_states_map_ma', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ma',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ma" value="<?php echo $var_instance->link_ma; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="mn" class="state mn minnesota">
                            <a class="tab" href="#"><?php echo esc_html__('Minnesota','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_mn" value="<?php echo $var_instance->title_mn ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_mn, 'ymc_text_states_map_mn', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_mn',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_mn" value="<?php echo $var_instance->link_mn; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="mt" class="state mt montana">
                            <a class="tab" href="#"><?php echo esc_html__('Montana','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_mt" value="<?php echo $var_instance->title_mt ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
	                                <?php
	                                wp_editor($var_instance->text_mt, 'ymc_text_states_map_mt', array(
		                                'wpautop' => true,
		                                'tinymce' => true,
		                                'textarea_rows' => 10,
		                                'textarea_name' => 'ymc_text_states_map_mt',
	                                )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_mt" value="<?php echo $var_instance->link_mt; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="mo" class="state mo missouri">
                            <a class="tab" href="#"><?php echo esc_html__('Missouri','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_mo" value="<?php echo $var_instance->title_mo; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_mo, 'ymc_text_states_map_mo', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_mo',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_mo" value="<?php echo $var_instance->link_mo; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ms" class="state ms mississippi">
                            <a class="tab" href="#"><?php echo esc_html__('Mississippi','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ms" value="<?php echo $var_instance->title_ms; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ms, 'ymc_text_states_map_ms', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ms',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ms" value="<?php echo $var_instance->link_ms; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="md" class="state md maryland">
                            <a class="tab" href="#"><?php echo esc_html__('Maryland','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_md" value="<?php echo $var_instance->title_md; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_md, 'ymc_text_states_map_md', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_md',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_md" value="<?php echo $var_instance->link_md; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="nv" class="state nv nevada">
                            <a class="tab" href="#"><?php echo esc_html__('Nevada','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_nv" value="<?php echo $var_instance->title_nv ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_nv, 'ymc_text_states_map_nv', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_nv',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_nv" value="<?php echo $var_instance->link_nv; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="nm" class="state nm new-mexico">
                            <a class="tab" href="#"><?php echo esc_html__('New Mexico','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_nm" value="<?php echo $var_instance->title_nm ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_nm, 'ymc_text_states_map_nm', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_nm',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_nm" value="<?php echo $var_instance->link_nm; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ne" class="state ne nebraska">
                            <a class="tab" href="#"><?php echo esc_html__('Nebraska','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ne" value="<?php echo $var_instance->title_ne; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ne, 'ymc_text_states_map_ne', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ne',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ne" value="<?php echo $var_instance->link_ne; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="nh" class="state nh new-hampshire">
                            <a class="tab" href="#"><?php echo esc_html__('New Hampshire','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_nh" value="<?php echo $var_instance->title_nh; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_nh, 'ymc_text_states_map_nh', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_nh',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_nh" value="<?php echo $var_instance->link_nh; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="nc" class="state nc north-carolina">
                            <a class="tab" href="#"><?php echo esc_html__('North Carolina','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_nc" value="<?php echo $var_instance->title_nc; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_nc, 'ymc_text_states_map_nc', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_nc',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_nc" value="<?php echo $var_instance->link_nc; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="nd" class="state mt north-dakota">
                            <a class="tab" href="#"><?php echo esc_html__('North Dakota','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_nd" value="<?php echo $var_instance->title_nd ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_nd, 'ymc_text_states_map_nd', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_nd',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_nd" value="<?php echo $var_instance->link_nd; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="nj" class="state nj new-jersey">
                            <a class="tab" href="#"><?php echo esc_html__('New Jersey','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_nj" value="<?php echo $var_instance->title_nj; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_nj, 'ymc_text_states_map_nj', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_nj',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_nj" value="<?php echo $var_instance->link_nj; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ny" class="state ny new-york">
                            <a class="tab" href="#"><?php echo esc_html__('New York','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ny" value="<?php echo $var_instance->title_ny; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ny, 'ymc_text_states_map_ny', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ny',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ny" value="<?php echo $var_instance->link_ny; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="or" class="state or oregon">
                            <a class="tab" href="#"><?php echo esc_html__('Oregon','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_or" value="<?php echo $var_instance->title_or ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_or, 'ymc_text_states_map_or', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_or',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_or" value="<?php echo $var_instance->link_or; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ok" class="state ok oklahoma">
                            <a class="tab" href="#"><?php echo esc_html__('Oklahoma','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ok" value="<?php echo $var_instance->title_ok; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ok, 'ymc_text_states_map_ok', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ok',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ok" value="<?php echo $var_instance->link_ok; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="oh" class="state oh ohio">
                            <a class="tab" href="#"><?php echo esc_html__('Ohio','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_oh" value="<?php echo $var_instance->title_oh; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_oh, 'ymc_text_states_map_oh', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_oh',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_oh" value="<?php echo $var_instance->link_oh; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="pa" class="state pa pennsylvania">
                            <a class="tab" href="#"><?php echo esc_html__('Pennsylvania','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_pa" value="<?php echo $var_instance->title_pa; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_pa, 'ymc_text_states_map_pa', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_pa',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_pa" value="<?php echo $var_instance->link_pa; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ri" class="state ri rhode-island">
                            <a class="tab" href="#"><?php echo esc_html__('Rhode Island','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ri" value="<?php echo $var_instance->title_ri; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ri, 'ymc_text_states_map_ri', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ri',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ri" value="<?php echo $var_instance->link_ri; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="sd" class="state sd south-dakota">
                            <a class="tab" href="#"><?php echo esc_html__('South Dakota','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_sd" value="<?php echo $var_instance->title_sd; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_sd, 'ymc_text_states_map_sd', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_sd',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_sd" value="<?php echo $var_instance->link_sd; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="sc" class="state sc south-carolina">
                            <a class="tab" href="#"><?php echo esc_html__('South Carolina','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_sc" value="<?php echo $var_instance->title_sc; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_sc, 'ymc_text_states_map_sc', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_sc',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_sc" value="<?php echo $var_instance->link_sc; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="tx" class="state tx texas">
                            <a class="tab" href="#"><?php echo esc_html__('Texas','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_tx" value="<?php echo $var_instance->title_tx; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_tx, 'ymc_text_states_map_tx', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_tx',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_tx" value="<?php echo $var_instance->link_tx; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="tn" class="state tn tennessee">
                            <a class="tab" href="#"><?php echo esc_html__('Tennessee','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_tn" value="<?php echo $var_instance->title_tn; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_tn, 'ymc_text_states_map_tn', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_tn',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_tn" value="<?php echo $var_instance->link_tn; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ut" class="state ut utah">
                            <a class="tab" href="#"><?php echo esc_html__('Utah','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ut" value="<?php echo $var_instance->title_ut; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ut, 'ymc_text_states_map_ut', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ut',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ut" value="<?php echo $var_instance->link_ut; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="vt" class="state vt vermont">
                            <a class="tab" href="#"><?php echo esc_html__('Vermont','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_vt" value="<?php echo $var_instance->title_vt; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_vt, 'ymc_text_states_map_vt', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_vt',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_vt" value="<?php echo $var_instance->link_vt; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="va" class="state va virginia">
                            <a class="tab" href="#"><?php echo esc_html__('Virginia','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_va" value="<?php echo $var_instance->title_va; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_va, 'ymc_text_states_map_va', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_va',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_va" value="<?php echo $var_instance->link_va; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="wa" class="state wa washington">
                            <a class="tab" href="#"><?php echo esc_html__('Washington','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_wa" value="<?php echo $var_instance->title_wa ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_wa, 'ymc_text_states_map_wa', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_wa',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_wa" value="<?php echo $var_instance->link_wa; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="wy" class="state wy wyoming">
                            <a class="tab" href="#"><?php echo esc_html__('Wyoming','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_wy" value="<?php echo $var_instance->title_wy; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_wy, 'ymc_text_states_map_wy', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_wy',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_wy" value="<?php echo $var_instance->link_wy; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="ar" class="state ar wyoming">
                            <a class="tab" href="#"><?php echo esc_html__('Arkansas','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_ar" value="<?php echo $var_instance->title_ar; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_ar, 'ymc_text_states_map_ar', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_ar',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_ar" value="<?php echo $var_instance->link_ar; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="wi" class="state wi wisconsin">
                            <a class="tab" href="#"><?php echo esc_html__('Wisconsin','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_wi" value="<?php echo $var_instance->title_wi; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_wi, 'ymc_text_states_map_wi', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_wi',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_wi" value="<?php echo $var_instance->link_wi; ?>">
                                </li>
                            </ul>
                        </li>
                        <li id="wv" class="state wv west-virginia">
                            <a class="tab" href="#"><?php echo esc_html__('West Virginia','ymc-states-map'); ?> <i class="arrow"></i></a>
                            <ul class="state-info">
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Title State','ymc-states-map'); ?></label>
                                    <input class="input-field" type="text" name="ymc_title_states_map_wv" value="<?php echo $var_instance->title_wv; ?>">
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter State Description','ymc-states-map'); ?></label>
				                    <?php
				                    wp_editor($var_instance->text_wv, 'ymc_text_states_map_wv', array(
					                    'wpautop' => true,
					                    'tinymce' => true,
					                    'textarea_rows' => 10,
					                    'textarea_name' => 'ymc_text_states_map_wv',
				                    )); ?>
                                </li>
                                <li class="form-element">
                                    <label class="label-state"><?php echo esc_html__('Enter link page','ymc-states-map'); ?></label>
                                    <input class="input-field" type="url" name="ymc_link_states_map_wv" value="<?php echo $var_instance->link_wv; ?>">
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
			</div>

            <div class="header">
                <span class="icon-theme dashicons dashicons-admin-site"></span>
				<?php echo esc_html__('Map Options', 'ymc-states-map'); ?>
                <span class="dashicons dashicons-arrow-down-alt2"></span>
            </div>

            <div class="content content-colors">
                <div class="form-group color-picker">
                    <label for="ymc-state" class="form-label">
						<?php echo esc_html__('Choose background of state','ymc-states-map'); ?>
                        <span class="information">
                        <?php echo esc_html__('Set background of state','ymc-states-map'); ?>
                    </span>
                    </label>
                    <input class="input-field custom-color-map" type="text" name="bg-color-state" value="<?php echo esc_attr($var_instance->get_bg_state($post_id)); ?>">
                </div>
                <div class="form-group color-picker">
                    <label for="ymc-state" class="form-label">
						<?php echo esc_html__('Choose hover background of state','ymc-states-map'); ?>
                        <span class="information">
                        <?php echo esc_html__('Set background of state','ymc-states-map'); ?>
                    </span>
                    </label>
                    <input class="input-field custom-color-map" type="text" name="bg-hover-color-state" value="<?php echo esc_attr($var_instance->get_bg_hover_state($post_id)); ?>">
                </div>
                <div class="form-group color-picker">
                    <label for="ymc-state" class="form-label">
						<?php echo esc_html__('Choose background for tooltip','ymc-states-map'); ?>
                        <span class="information">
                        <?php echo esc_html__('Set background for tooltip','ymc-states-map'); ?>
                    </span>
                    </label>
                    <input class="input-field custom-color-map" type="text" name="bg-color-tooltip" value="<?php echo esc_attr($var_instance->get_bg_tooltip($post_id)); ?>">
                </div>
                <div class="form-group color-picker">
                    <label for="ymc-state" class="form-label">
						<?php echo esc_html__('Choose color text for tooltip','ymc-states-map'); ?>
                        <span class="information">
                        <?php echo esc_html__('Set color text for tooltip','ymc-states-map'); ?>
                    </span>
                    </label>
                    <input class="input-field custom-color-map" type="text" name="text-color-tooltip" value="<?php echo esc_attr($var_instance->get_text_color_tooltip($post_id)); ?>">
                </div>
            </div>

            <div class="header">
                <span class="icon-theme dashicons dashicons-visibility"></span>
				<?php echo esc_html__('Popup Options', 'ymc-states-map'); ?>
                <span class="dashicons dashicons-arrow-down-alt2"></span>
            </div>

            <div class="content content-popup">
                <div class="form-group">
                    <label for="ymc-state" class="form-label">
						<?php echo esc_html__('Change button name','ymc-states-map'); ?>
                        <span class="information">
                        <?php echo esc_html__('Set button name','ymc-states-map'); ?>
                    </span>
                    </label>
                    <input class="input-field" type="text" name="button_read_more" value="<?php echo esc_attr($var_instance->get_button($post_id)); ?>">

                    <label for="btn-status" class="form-label">
		                <?php echo esc_html__('Enable/Disabled button Read More','ymc-states-map'); ?>
                        <span class="information">
                        <?php echo esc_html__('Set status button Read More','ymc-states-map'); ?>
                    </span>
                    </label>

	                <?php $sel_btn = ( $var_instance->get_status_button($post_id) === "on" ) ? 'checked' : '';  ?>
                    <input type="hidden" name="status_button_read_more" value="off">
                    <input id="btn-status" class="input-field" type="checkbox" <?php echo esc_attr($sel_btn); ?> name="status_button_read_more" value="on">

                </div>
            </div>

            <div class="ymc-sm-overflow active">
                <img class="preloader" src="<?php echo YMC_STATES_URL.'includes/assets/images/Loading_icon.gif';?>">
            </div>

		</div>

	<?php }

	public function side_meta_box() { ?>
		<article>
			<?php
			echo esc_html__('States Map US plugin allows you to display information about each state on a map. 
			A beautiful pop-up window interface will display information about the selected state. 
			Simplicity and convenience will allow you to integrate this map anywhere on your page on the site.','ymc-states-map');

            echo '<hr/>';
            echo '<img width="100%" src="'.YMC_STATES_URL . 'includes/assets/images/map_usa.png">';
			?>
			<hr/>
			<strong style="color: #000; font-weight: 700; line-height: 1.2; font-size: 16px; background: #098ab821; display: block; padding: 7px 5px;">
				Did you like or find our plugin helpful? To support the plugin, you can make a <a target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=B2MHM5LM29UGW">Donation</a>
			</strong>.

		</article>
	<?php }


}