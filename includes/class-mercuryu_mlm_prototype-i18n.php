<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.mercury-cm.com
 * @since      1.0.0
 *
 * @package    Mercuryu_mlm_prototype
 * @subpackage Mercuryu_mlm_prototype/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mercuryu_mlm_prototype
 * @subpackage Mercuryu_mlm_prototype/includes
 * @author     Mercury <support@mercury-cm.com>
 */
class Mercuryu_mlm_prototype_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mercuryu_mlm_prototype',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
