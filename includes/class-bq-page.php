<?php
/**
 * BSF Queries Submenu Page File.
 *
 * PHP version 7
 *
 * @category PHP
 * @package  BSF Queries
 * @author   Display Name <username@rajkiranb.com>
 * @license  http://brainstormforce.com
 * @link     http://brainstormforce.com
 */

if ( ! class_exists( 'BQ_Page' ) ) :
	/**
	 * BSF Queries Submenu Page File.
	 *
	 * PHP version 7
	 *
	 * @category PHP
	 * @package  BSF Queries
	 * @author   Display Name <username@rajkiranb.com>
	 * @license  http://brainstormforce.com
	 * @link     http://brainstormforce.com
	 */
	class BQ_Page {

		/**
		 * Member Variable
		 *
		 * @var instance
		 */
		private static $instance;
		/**
		 *  Initiator
		 */
		public static function get_instance() {

			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
		/**
		 * Constructor
		 */
		public function __construct() {

			add_action( 'admin_menu', array( $this, 'bq_options_page' ) );
		}
		/**
		 * Plugin Submenu Page hook function.
		 *
		 * @since  1.0.0
		 * @return void
		 */
		public function bq_options_page() {

			add_submenu_page(
				'tools.php',
				'BSF Queries',
				'BSF Queries',
				'manage_options',
				'bq',
				array( $this, 'bq_page' )
			);
		}
		/**
		 * Plugin Submenu Page.
		 *
		 * @since  1.0.0
		 * @return void
		 */
		public function bq_page() {

			include_once CM_ABSPATH . 'includes/bq-main-frontend.php';
		}
	}
	BQ_Page::get_instance();
endif;
