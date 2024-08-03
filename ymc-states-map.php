<?php

/**
 *
 * Plugin Name:       States Map US
 * Description:       The interactive map will display information for each US state in a pop-up window.
 * Version:           2.4.1
 * Author:            YMC
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ymc-states-map
 * Domain Path:       /languages
 *
 * States Map US is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * States Map is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Password. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**-------------------------------------------------------------------------------
 *    DEFINES
 * -------------------------------------------------------------------------------*/

if ( ! defined('YMC_STATES_VERSION') ) {
	   define( 'YMC_STATES_VERSION', '2.4.1' );
}

if ( ! defined('YMC_STATES_DIR') ) {
	   define( 'YMC_STATES_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined('YMC_STATES_URL') ) {
	   define( 'YMC_STATES_URL', plugins_url( '/', __FILE__ ) );
}



require_once( YMC_STATES_DIR . 'includes/Plugin.php' );



