<?php
/**
 * WP CLI Commands to manage BSF Queries.
 *
 * @package bsf-core
 */

/**
 * Class BQ_WP_CLI_Command
 */
class BQ_WP_CLI_Command extends WP_CLI_Command {

	/**
	 * BSF_License Manager instance.
	 *
	 * @var $license_manager
	 */
	private $license_manager = '';

	/**
	 * Initiator.
	 */
	public function __construct() {

        $this->bq_batch = BQ_Batch::get_instance();
	}

	/**
	 * WP CLI Command to execute queries.
	 *
	 * @param array $args Arguments.
	 * @param array $assoc_args Associative Arguments.
	 */
	public function query( $args, $assoc_args ) {
        
        if ( isset( $args[0] ) && 'test' === $args[0] ) {
            $this->bq_batch->bq_start_process();
        }
	}
}

if ( class_exists( 'WP_CLI' ) ) {
	WP_CLI::add_command( 'bsf', 'BQ_WP_CLI_Command' );
}
