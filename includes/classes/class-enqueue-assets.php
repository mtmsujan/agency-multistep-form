<?php

class Enqueue_Assets {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_css' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_css' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_js' ] );
    }

    public function enqueue_css() {
        // Enqueue CSS
        wp_enqueue_style( 'imjol-bootstrap', AGENCY_FORM_PLUGIN_URL . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'imjol-all', AGENCY_FORM_PLUGIN_URL . '/assets/css/all.min.css' );
        wp_enqueue_style( 'imjol-fontawesome', AGENCY_FORM_PLUGIN_URL . '/assets/css/fontawesome.min.css' );
        wp_enqueue_style( 'imjol-jquery-classycountdown', AGENCY_FORM_PLUGIN_URL . '/assets/css/jquery.classycountdown.min.css' );
        wp_enqueue_style( 'imjol-nice-select', AGENCY_FORM_PLUGIN_URL . '/assets/css/nice-select.min.css' );
        // wp_enqueue_style( 'imjol-reset', AGENCY_FORM_PLUGIN_URL . '/assets/css/imjol-reset.css' );
        wp_enqueue_style( 'imjol-style', AGENCY_FORM_PLUGIN_URL . '/assets/css/imjol-style.css' );

    }
    public function enqueue_js() {
        // Enqueue JS
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'imjol-bootstrap', AGENCY_FORM_PLUGIN_URL . '/assets/js/bootstrap.min.js', [], null, true );
        wp_enqueue_script( 'final-countdown', AGENCY_FORM_PLUGIN_URL . '/assets/js/final-countdown.min.js', [ 'jquery' ], null, true );
        wp_enqueue_script( 'nice-select', AGENCY_FORM_PLUGIN_URL . '/assets/js/nice-select.min.js', [ 'jquery' ], null, true );
        wp_enqueue_script( 'custom-js-functions', AGENCY_FORM_PLUGIN_URL . '/assets/js/custom-js-functions.js', [], null, true );
        wp_enqueue_script( 'imjol-main', AGENCY_FORM_PLUGIN_URL . '/assets/js/imjol-main.js', [ 'jquery', 'imjol-bootstrap', 'final-countdown', 'nice-select', 'custom-js-functions' ], null, true );
        wp_enqueue_script( 'imjol-api', 'https://www.google.com/recaptcha/api.js' );

    }

    public function enqueue_admin_css() {
        // enqueue bootstrap admin css
        wp_enqueue_style( 'bootstrap-admin', AGENCY_FORM_PLUGIN_URL . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'admin-custom-css', AGENCY_FORM_PLUGIN_URL . '/assets/css/admin-css.css' );
    }

}

// Initialize the class
$enqueue_assets = new Enqueue_Assets();