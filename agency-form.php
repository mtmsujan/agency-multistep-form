<?php

/*
 * Plugin Name:       Agency Forms
 * Plugin URI:        https://imjol.com/plugins/agency-form
 * Description:       AgencyForms Form is a powerful form builder plugin for WordPress that allows you to create multi-step forms with ease.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sujan
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * * Text Domain:     agency-form
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
defined( "ABSPATH" ) || exit( "Direct Access Not Allowed" );

// Define plugin path
if ( !defined( 'AGENCY_FORM_PLUGIN_PATH' ) ) {
    define( 'AGENCY_FORM_PLUGIN_PATH', untrailingslashit( dirname( __FILE__ ) ) );
}

// Define plugin url
if ( !defined( 'AGENCY_FORM_PLUGIN_URL' ) ) {
    define( 'AGENCY_FORM_PLUGIN_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
}

/**
 * Load plugin text domain for internationalization.
 */
function agency_form_plugin_load_textdomain() {
    load_plugin_textdomain( 'agency-form', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'agency_form_plugin_load_textdomain' );

// Require load file
require_once AGENCY_FORM_PLUGIN_PATH . '/load.php';

// db table create when plugin activate
register_activation_hook( __FILE__, 'imjol_db_table_create' );


