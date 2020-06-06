<?php
/**
 * BSF Queries Loder File.
 *
 * PHP version 7
 *
 * @category PHP
 * @package  BSF Queries
 * @author   Display Name <username@rajkiranb.com>
 * @license  http://brainstormforce.com
 * @link     http://brainstormforce.com
 */

if ( ! class_exists( 'BQ_Loader' ) ) :
	/**
	 * BSF Queries Loader Doc comment
	 *
	 * PHP version 7
	 *
	 * @category PHP
	 * @package  BSF Queries
	 * @author   Display Name <username@rajkiranb.com>
	 * @license  http://brainstormforce.com
	 * @link     http://brainstormforce.com
	 */
	class BQ_Loader {

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
			
			add_action( 'plugins_loaded', array( $this, 'bq_includes' ) );	
		}
		/**
		 * Include required files.
		 */
		public function bq_includes() {

			require_once BQ_ABSPATH . 'includes/class-bq-page.php';
			require_once BQ_ABSPATH . 'includes/bq-bg-process-batch.php';
			if ( defined( 'WP_CLI' ) ) {
				require BQ_ABSPATH . 'classes/class-bq-wp-cli.php';
			}
		}
	}
	BQ_Loader::get_instance();
endif;
