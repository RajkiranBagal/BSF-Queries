<?php
/**
 * Plugin Name: BSF Queries
 * Plugin URI:  https://brainstormforce.com
 * Description: Execute Queries and Generate CSV files as result in one click.
 * Version:     1.0.0
 * Author:      Brainstorm Force.
 * Author URI:  https://brainstormforce.com
 * Text Domain: bsf-queries.
 * Main
 *
 * PHP version 7
 *
 * @category PHP
 * @package  BSF_Queries
 * @author   Display Name <username@rajkiranb.com>
 * @license  https://brainstormforce.com
 * @link     https://brainstormforce.com
 */

define( 'BQ_ABSPATH', plugin_dir_path( __FILE__ ) );
define( 'BQ_FILEPATH', __FILE__ );
define( 'BQ_VERSION', '1.0.0' );

require_once BQ_ABSPATH . 'classes/class-bq-loader.php';



