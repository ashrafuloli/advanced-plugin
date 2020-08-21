<?php

/**
 * Fired during plugin deactivation
 *
 * @link       ashrafuloli.com
 * @since      1.0.0
 *
 * @package    Advanced_Plugin
 * @subpackage Advanced_Plugin/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Advanced_Plugin
 * @subpackage Advanced_Plugin/includes
 * @author     Ashraful Islam Oli <rock.ashraful@gmail.com>
 */
class Advanced_Plugin_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */

	private $table_activator;

	public function __construct( $activator ) {
		$this->table_activator = $activator;
	}

	public function deactivate() {
		global $wpdb;
		$wpdb->query( "DROP TABLE IF EXISTS " . $this->table_activator->book_table_prefix() );
		$wpdb->query( "DROP TABLE IF EXISTS " . $this->table_activator->book_table_shelf_prefix() );
	}

}
