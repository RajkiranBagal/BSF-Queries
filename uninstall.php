<?php
/**
 * Woo Coupon Manager Uninstall File.
 *
 * PHP version 7
 *
 * @category PHP
 * @package  Woo Woo Coupon Manager
 * @author   Display Name <username@rajkiranb.com>
 * @license  http://brainstormforce.com
 * @link     http://brainstormforce.com
 */

// if uninstall.php is not called by WordPress, die.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}
echo 'string';
delete_option( 'wcm-import-done' );
delete_option( 'coupon-generator-batch-process' );
delete_option( 'wcm-settings-saved' );
delete_option( 'importbool' );
delete_option( 'import-woo-coupon-file' );
