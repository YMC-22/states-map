<?php

namespace YMCStates;

class Autoloader {

	/**
	 * Run autoloader.
	 *
	 * Register a function as `__autoload()` implementation.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 */
	public static function run() {

		spl_autoload_register(function($class) {

			$filename = $class .  '.php';
			$filename =  YMC_STATES_DIR . str_replace('\\', '/', $filename);

			if ( is_readable( $filename ) ) {
				require $filename;
			}

		});

	}

}