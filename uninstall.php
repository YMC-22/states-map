<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Uninstall plugin
 * Trigger Uninstall process only if WP_UNINSTALL_PLUGIN is defined
 */

if( ! defined('WP_UNINSTALL_PLUGIN') ) exit;

global $wpdb;

// Delete data from table wp_postmeta
$wpdb->get_results('DELETE FROM wp_postmeta WHERE meta_key IN (
                                  "button_read_more",
                                  "status_button_read_more",
                                  "bg_color_state",
                                  "bg_hover_color_state",
                                  "bg_color_tooltip",
                                  "text-color-tooltip",
                                  "ymc_title_states_map_ma",
                                  "ymc_text_states_map_ma",
                                  "ymc_link_states_map_ma",
                                  "ymc_title_states_map_mn",
                                  "ymc_text_states_map_mn",
                                  "ymc_link_states_map_mn",
                                  "ymc_title_states_map_mt",
                                  "ymc_text_states_map_mt",
                                  "ymc_link_states_map_mt",
                                  "ymc_title_states_map_nd",
                                  "ymc_text_states_map_nd",
                                  "ymc_link_states_map_nd",
                                  "ymc_title_states_map_hi",
                                  "ymc_link_states_map_hi",
                                  "ymc_text_states_map_hi",
                                  "ymc_title_states_map_id",
                                  "ymc_text_states_map_id",
                                  "ymc_link_states_map_id",  
                                  "ymc_title_states_map_wa",  
                                  "ymc_text_states_map_wa",  
                                  "ymc_link_states_map_wa",  
                                  "ymc_title_states_map_az",  
                                  "ymc_text_states_map_az",  
                                  "ymc_link_states_map_az",  
                                  "ymc_title_states_map_ca",  
                                  "ymc_text_states_map_ca",  
                                  "ymc_link_states_map_ca",  
                                  "ymc_title_states_map_co",  
                                  "ymc_text_states_map_co",  
                                  "ymc_link_states_map_co",  
                                  "ymc_title_states_map_nv",  
                                  "ymc_text_states_map_nv",  
                                  "ymc_link_states_map_nv",  
                                  "ymc_title_states_map_nm",  
                                  "ymc_text_states_map_nm",  
                                  "ymc_link_states_map_nm",  
                                  "ymc_title_states_map_or",  
                                  "ymc_text_states_map_or",  
                                  "ymc_link_states_map_or",  
                                  "ymc_title_states_map_ut",  
                                  "ymc_text_states_map_ut",  
                                  "ymc_link_states_map_ut",  
                                  "ymc_title_states_map_wy",  
                                  "ymc_text_states_map_wy",  
                                  "ymc_link_states_map_wy",  
                                  "ymc_title_states_map_ar",  
                                  "ymc_text_states_map_ar",  
                                  "ymc_link_states_map_ar",  
                                  "ymc_title_states_map_ia",  
                                  "ymc_text_states_map_ia",  
                                  "ymc_link_states_map_ia",  
                                  "ymc_title_states_map_ks",  
                                  "ymc_text_states_map_ks",  
                                  "ymc_link_states_map_ks",  
                                  "ymc_title_states_map_mo",  
                                  "ymc_text_states_map_mo",  
                                  "ymc_link_states_map_mo",  
                                  "ymc_title_states_map_ne",  
                                  "ymc_text_states_map_ne",  
                                  "ymc_link_states_map_ne",  
                                  "ymc_title_states_map_ok",  
                                  "ymc_text_states_map_ok",  
                                  "ymc_link_states_map_ok",  
                                  "ymc_title_states_map_sd",  
                                  "ymc_text_states_map_sd",  
                                  "ymc_title_states_map_la",  
                                  "ymc_text_states_map_la",  
                                  "ymc_link_states_map_la",  
                                  "ymc_title_states_map_tx",  
                                  "ymc_text_states_map_tx",  
                                  "ymc_link_states_map_tx",  
                                  "ymc_title_states_map_ct",  
                                  "ymc_text_states_map_ct",  
                                  "ymc_link_states_map_ct",  
                                  "ymc_title_states_map_nh",  
                                  "ymc_text_states_map_nh",  
                                  "ymc_link_states_map_nh",  
                                  "ymc_title_states_map_ri",  
                                  "ymc_text_states_map_ri",  
                                  "ymc_link_states_map_ri",  
                                  "ymc_title_states_map_vt",  
                                  "ymc_text_states_map_vt",  
                                  "ymc_link_states_map_vt",  
                                  "ymc_title_states_map_al",  
                                  "ymc_text_states_map_al",  
                                  "ymc_link_states_map_al",  
                                  "ymc_title_states_map_fl",  
                                  "ymc_text_states_map_fl",  
                                  "ymc_link_states_map_fl",  
                                  "ymc_title_states_map_ga",  
                                  "ymc_text_states_map_ga",  
                                  "ymc_link_states_map_ga",  
                                  "ymc_title_states_map_ms",  
                                  "ymc_text_states_map_ms",  
                                  "ymc_link_states_map_ms",  
                                  "ymc_title_states_map_sc",  
                                  "ymc_text_states_map_sc",  
                                  "ymc_link_states_map_sc",  
                                  "ymc_title_states_map_il",  
                                  "ymc_text_states_map_il",  
                                  "ymc_link_states_map_il",  
                                  "ymc_title_states_map_in",  
                                  "ymc_text_states_map_in",  
                                  "ymc_link_states_map_in",  
                                  "ymc_title_states_map_ky",  
                                  "ymc_text_states_map_ky",  
                                  "ymc_link_states_map_ky",  
                                  "ymc_title_states_map_nc",  
                                  "ymc_text_states_map_nc",  
                                  "ymc_link_states_map_nc",  
                                  "ymc_title_states_map_oh",  
                                  "ymc_text_states_map_oh",  
                                  "ymc_link_states_map_oh",  
                                  "ymc_title_states_map_tn",  
                                  "ymc_text_states_map_tn",  
                                  "ymc_link_states_map_tn",  
                                  "ymc_title_states_map_va",  
                                  "ymc_text_states_map_va",  
                                  "ymc_link_states_map_va",  
                                  "ymc_title_states_map_wi",  
                                  "ymc_text_states_map_wi",  
                                  "ymc_link_states_map_wi",  
                                  "ymc_title_states_map_wv",  
                                  "ymc_text_states_map_wv",  
                                  "ymc_link_states_map_wv",  
                                  "ymc_title_states_map_de",  
                                  "ymc_text_states_map_de",  
                                  "ymc_link_states_map_de",  
                                  "ymc_title_states_map_dc",  
                                  "ymc_text_states_map_dc",  
                                  "ymc_title_states_map_md",  
                                  "ymc_text_states_map_md",  
                                  "ymc_link_states_map_md",  
                                  "ymc_title_states_map_nj",  
                                  "ymc_text_states_map_nj",  
                                  "ymc_link_states_map_nj",  
                                  "ymc_title_states_map_ny",  
                                  "ymc_text_states_map_ny",  
                                  "ymc_link_states_map_ny",  
                                  "ymc_link_states_map_ny",  
                                  "ymc_text_states_map_pa",  
                                  "ymc_link_states_map_pa",  
                                  "ymc_title_states_map_me",  
                                  "ymc_text_states_map_me",  
                                  "ymc_link_states_map_me",  
                                  "ymc_title_states_map_mi",  
                                  "ymc_text_states_map_mi",  
                                  "ymc_link_states_map_mi",  
                                  "ymc_title_states_map_ak",  
                                  "ymc_text_states_map_ak",  
                                  "ymc_link_states_map_ak"                                          
                                )');


// Delete data from table wp_posts
$wpdb->get_results('DELETE FROM wp_posts WHERE post_type IN ("states_map")');












