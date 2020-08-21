<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       ashrafuloli.com
 * @since      1.0.0
 *
 * @package    Advanced_Plugin
 * @subpackage Advanced_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Advanced_Plugin
 * @subpackage Advanced_Plugin/admin
 * @author     Ashraful Islam Oli <rock.ashraful@gmail.com>
 */
class Advanced_Plugin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version The version of this plugin.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Advanced_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Advanced_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/advanced-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Advanced_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Advanced_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/advanced-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

	// https://developer.wordpress.org/reference/functions/add_menu_page/
	// https://developer.wordpress.org/reference/functions/add_submenu_page/
	public function advanced_menu() {

		add_menu_page(
			__( 'Book Management', 'advanced-plugin' ),
			__( 'Book Management', 'advanced-plugin' ),
			'manage_options',
			'book-management',
			array( $this, 'book_management_dashboard' )
		);

		add_submenu_page(
			'book-management',
			__( 'Dashboard', 'advanced-plugin' ),
			__( 'Dashboard', 'advanced-plugin' ),
			'manage_options',
			'book-management',
			array( $this, 'book_management_dashboard' )
		);

		add_submenu_page(
			'book-management',
			__( 'Create Book', 'advanced-plugin' ),
			__( 'Create Book', 'advanced-plugin' ),
			'manage_options',
			'create-book',
			array( $this, 'callback_create_book' )
		);

		add_submenu_page(
			'book-management',
			__( 'List Book', 'advanced-plugin' ),
			__( 'List Book', 'advanced-plugin' ),
			'manage_options',
			'list-book',
			array( $this, 'callback_list_book' )
		);


	}

	// https://developer.wordpress.org/reference/classes/wpdb/
	public function book_management_dashboard() {
		echo "<h2>Book Dashboard</h2>";

		global $wpdb;

//		$user_email = $wpdb->get_var("SELECT user_email FROM wp_users WHERE ID = 1");
//		echo $user_email;


//		$user_data = $wpdb->get_row("SELECT * FROM wp_users WHERE ID = 1");
//		echo "<pre>";
//		print_r($user_data);
//		echo "</pre>";


//		$post_title = $wpdb->get_col("SELECT post_title FROM wp_posts WHERE");
//		$post_title = $wpdb->get_col("SELECT post_title FROM wp_posts WHERE post_status = 'publish'");
//		echo "<pre>";
//		print_r($post_title);
//		echo "</pre>";


//		$all_posts = $wpdb->get_results("SELECT * FROM wp_posts");
//		$all_posts = $wpdb->get_results("SELECT * FROM wp_posts", 'ARRAY_A');
//		echo "<pre>";
//		print_r($all_posts);
//		echo "</pre>";

		$post_title = $wpdb->get_row(
			$wpdb->prepare("SELECT * FROM wp_posts WHERE ID = %d",1)
		);
		echo "<pre>";
		print_r($post_title);
		echo "</pre>";
	}

	public function callback_create_book() {
		echo "<h2>Create Book</h2>";
	}

	public function callback_list_book() {
		echo "<h2>List Book</h2>";
	}

}
