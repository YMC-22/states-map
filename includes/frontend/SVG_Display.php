<?php

namespace includes\frontend;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class SVG_Display {

	public function __construct() {

		$this->svg_display();
	}

	public function svg_display() {

		$file_path =  YMC_STATES_DIR . 'includes/svg_files/us_map.svg';

		$file_svg = file_get_contents($file_path);

		if( $file_svg !== false ) {
			return  $file_svg;
		}
		return null;

	}

}