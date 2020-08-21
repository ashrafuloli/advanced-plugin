<?php

/**
 * Fired during plugin activation
 *
 * @link       ashrafuloli.com
 * @since      1.0.0
 *
 * @package    Advanced_Plugin
 * @subpackage Advanced_Plugin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Advanced_Plugin
 * @subpackage Advanced_Plugin/includes
 * @author     Ashraful Islam Oli <rock.ashraful@gmail.com>
 */
class Advanced_Plugin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function activate() {
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		// sql ->  show create TABLE wp_book_table
		$table_query = "CREATE TABLE `" . $this->book_table_prefix() . "` (
		 `id` int(11) NOT NULL AUTO_INCREMENT,
		 `name` varchar(200) DEFAULT NULL,
		 `amount` int(11) DEFAULT NULL,
		 `description` text DEFAULT NULL,
		 `book_image` varchar(250) DEFAULT NULL,
		 `language` varchar(200) DEFAULT NULL,
		 `shelf_id` int(11) DEFAULT NULL,
		 `status` int(11) NOT NULL DEFAULT 1,
		 `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
		 PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		dbDelta( $table_query );

		// sql ->  show create TABLE wp_book_table_shelf
		$shelf_query = "CREATE TABLE `" . $this->book_table_shelf_prefix() . "` (
		 `id` int(11) NOT NULL AUTO_INCREMENT,
		 `shelf_name` varchar(200) DEFAULT NULL,
		 `capacity` int(11) DEFAULT NULL,
		 `shelf_location` varchar(200) DEFAULT NULL,
		 `status` int(11) NOT NULL DEFAULT 1,
		 `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
		 PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		dbDelta( $shelf_query );

		global $wpdb;
		$insert_query = "INSERT INTO " . $this->book_table_shelf_prefix() . "
		(shelf_name,capacity,shelf_location,status) VALUES ('Shelf 1',230,'Corner',1), 
		('Shelf 2',250,'Center',1), ('Shelf 3',230,'Right Corner',1)";
		$wpdb->query( $insert_query );
	}

	public function book_table_prefix() {
		global $wpdb;

		return $wpdb->prefix . "book_table";
	}

	public function book_table_shelf_prefix() {
		global $wpdb;

		return $wpdb->prefix . "book_table_shelf";
	}

}
