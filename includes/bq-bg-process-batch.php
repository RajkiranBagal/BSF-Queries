<?php
/**
 * BSF Queries Batch File.
 *
 * PHP version 7
 *
 * @category PHP
 * @package  BSF Queries
 * @author   Display Name <username@rajkiranb.com>
 * @license  http://brainstormforce.com
 * @link     http://brainstormforce.com
 */

if ( ! class_exists( 'BQ_Batch' ) ) :
	/**
	 * BSF Queries Batch File.
	 *
	 * PHP version 7
	 *
	 * @category PHP
	 * @package  BSF Queries
	 * @author   Display Name <username@rajkiranb.com>
	 * @license  http://brainstormforce.com
	 * @link     http://brainstormforce.com
	 */
	class BQ_Batch {

		/**
		 * Instance
		 *
		 * @since  1.0.0
		 * @var    object Class object.
		 * @access private
		 */
		private static $bq_instance;

		/**
		 * Process All
		 *
		 * @since  1.0.0
		 * @var    object Class object.
		 * @access public
		 */
		public $background_process;

		/**
		 * Initiator
		 *
		 * @since  1.0.0
		 * @return object initialized object of class.
		 */
		public static function get_instance() {
			if ( ! isset( self::$bq_instance ) ) {
				self::$bq_instance = new self();
			}
			return self::$bq_instance;
		}

		/**
		 * Constructor
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// Core Helpers - Batch Processing.
			require_once BQ_ABSPATH . 'classes/class-wp-async-request.php';
			require_once BQ_ABSPATH . 'classes/class-wp-background-process.php';
			require_once BQ_ABSPATH . 'classes/class-bq-bg-process.php';

            $this->background_process = new BQ_Background_Process();
		}

		/**
		 * Start Coupon or CPT Import
		 *
		 * @since 1.0.0
		 */
		public function bq_start_process() {

            global $wpdb;

            $test_query = "SELECT * FROM $wpdb->options";
            
            $this->background_process->push_to_queue($test_query);
            
            $this->background_process->save()->dispatch();
		}
	}
BQ_Batch::get_instance();
endif;
