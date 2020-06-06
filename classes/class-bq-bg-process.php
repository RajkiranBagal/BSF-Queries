<?php
/**
 * BSF Queries Background process class.
 *
 * PHP version 7
 *
 * @category PHP
 * @package  BSF Queries
 * @author   Display Name <username@rajkiranb.com>
 * @license  http://brainstormforce.com
 * @link     http://brainstormforce.com
 */

/**
 * CLass to run the batch-process for the given batch
 *
 * @return Nothing
 * @param string $action some usage.
 */
class BQ_Background_Process extends WP_Background_Process {

	/**
	 * Member Variable
	 *
	 * @var action.
	 */
	protected $action = 'bq_background_process';

	/**
	 * Task
	 *
	 * Override this method to perform any actions required on each
	 * queue item. Return the modified item for further processing
	 * in the next pass through. Or, return false to remove the
	 * item from the queue.
	 *
	 * @param mixed $data Queue item to iterate over.
	 *
	 * @return mixed
	 */
	protected function task( $query ) {
		global $wpdb;
		$results = $wpdb->get_results( $query, ARRAY_A );
		
		$filepath = BQ_ABSPATH . 'includes/file.csv';
		
		$fd = fopen($filepath, 'w+');
		
		foreach($results as $record) {
			fputcsv($fd, $record);
		}
		rewind($fd);
		fclose($fd);
		
		$to = get_option( 'admin_email' );
		$subject = 'CSV Recieved';
		$message = 'Message';
		$attachment = $filepath;
		
		$sent = wp_mail($to, $subject, $message, '', $attachment);
error_log('here');
		return false;
	}

	/**
	 * Complete
	 *
	 * Override if applicable, but ensure that the below actions are
	 * performed, or, call parent::complete().
	 */
	protected function complete() {
		parent::complete();
	}
}
