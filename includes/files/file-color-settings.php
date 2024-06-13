<?php

class Contact_Form_Settings {
    public function __construct() {
        // Hook into the admin menu to add a settings page
        add_action( 'admin_menu', array( $this, 'add_settings_page' ) );
        // Hook into admin initialization to register settings
        add_action( 'admin_init', array( $this, 'register_settings' ) );
        // Hook into wp_head to apply settings to the front-end form
        add_action( 'wp_head', array( $this, 'apply_settings_to_form' ) );
    }

    // Function to add the settings page to the admin menu
    public function add_settings_page() {
        add_menu_page(
            'Agency Settings',
            'Agency Settings',
            'manage_options',
            'imjol-contact-form-settings',
            array( $this, 'render_settings_page' )
        );
    }

    // Function to render the settings page
    public function render_settings_page() {
        // Retrieve the shortcode option
        $shortcode = get_option( 'agency_form_shortcode', '' );

        ?>
        <div class="wrap">
            <h2>Agency Settings</h2>
            <form method="post" action="options.php">
                <?php
                // Output nonce, action, and option_page fields for a settings page
                settings_fields( 'imjol_contact_form_settings_group' );
                // Print out all settings sections added to a particular settings page
                do_settings_sections( 'imjol-contact-form-settings' );
                // Output save settings button
                submit_button();
                ?>
            </form>
        </div>

        <script>
            // Function to copy the shortcode to the clipboard
            function copyShortcode() {
                var shortcodeField = document.getElementById("agency_form_shortcode");
                shortcodeField.select();
                document.execCommand("copy");
                alert("Shortcode copied!");
            }
        </script>
        <?php
    }

    // Function to register settings and fields
    public function register_settings() {
        // Register settings
        register_setting( 'imjol_contact_form_settings_group', 'imjol_primary_color' );
        register_setting( 'imjol_contact_form_settings_group', 'imjol_privacy_policy_url' );
        register_setting( 'imjol_contact_form_settings_group', 'imjol_privacy_policy_name', 'sanitize_text_field' );
        register_setting( 'imjol_contact_form_settings_group', 'imjol_terms_of_use_url' );
        register_setting( 'imjol_contact_form_settings_group', 'imjol_terms_of_use_name', 'sanitize_text_field' );
        register_setting( 'imjol_contact_form_settings_group', 'agency_form_shortcode' );

        // Add settings section
        add_settings_section(
            'imjol_contact_form_settings_section',
            'Color Settings',
            array( $this, 'render_settings_section' ),
            'imjol-contact-form-settings'
        );

        // Add settings fields
        add_settings_field(
            'imjol_primary_color',
            'Primary Color',
            array( $this, 'render_primary_color_field' ),
            'imjol-contact-form-settings',
            'imjol_contact_form_settings_section'
        );
        add_settings_field(
            'imjol_privacy_policy_settings',
            'Privacy Policy',
            array( $this, 'render_privacy_policy_settings' ),
            'imjol-contact-form-settings',
            'imjol_contact_form_settings_section'
        );
        add_settings_field(
            'imjol_terms_of_use_settings',
            'Terms of Use',
            array( $this, 'render_terms_of_use_settings' ),
            'imjol-contact-form-settings',
            'imjol_contact_form_settings_section'
        );
        add_settings_field(
            'agency_form_shortcode',
            'Contact Form Shortcode',
            array( $this, 'render_shortcode_field' ),
            'imjol-contact-form-settings',
            'imjol_contact_form_settings_section'
        );
    }

    // Function to render the settings section description
    public function render_settings_section() {
        echo 'Customize the colors for your contact form.';
    }

    // Function to render the primary color field
    public function render_primary_color_field() {
        // Retrieve the primary color option
        $color = get_option( 'imjol_primary_color', '#0073aa' );
        echo "<input type='text' name='imjol_primary_color' value='$color' />";
    }

    // Function to render the shortcode field
    public function render_shortcode_field() {
        ?>
        <input type="text" id="agency_form_shortcode" name="agency_form_shortcode"
            value="<?php echo esc_attr( '[agency_form_shortcode]' ); ?>" readonly />
        <button type="button" class="button button-primary" onclick="copyShortcode()">Copy</button>
        <?php
    }

    // Function to render the privacy policy settings
    public function render_privacy_policy_settings() {
        // Retrieve privacy policy options
        $privacy_policy_url  = get_option( 'imjol_privacy_policy_url' );
        $privacy_policy_name = get_option( 'imjol_privacy_policy_name' );
        ?>
        <p>
            <input type="url" name="imjol_privacy_policy_url" placeholder="https://example.com"
                value="<?php echo esc_url( $privacy_policy_url === '#' ? '' : $privacy_policy_url ); ?>" />
        </p>
        <p>
            <input type="text" name="imjol_privacy_policy_name" value="<?php echo esc_attr( $privacy_policy_name ); ?>" />
        </p>
        <?php
    }

    // Function to render the terms of use settings
    public function render_terms_of_use_settings() {
        // Retrieve terms of use options
        $terms_of_use_url  = get_option( 'imjol_terms_of_use_url', '#' );
        $terms_of_use_name = get_option( 'imjol_terms_of_use_name', 'Terms of Use' );
        ?>
        <p>
            <input type="url" name="imjol_terms_of_use_url" placeholder="https://example.com"
                value="<?php echo esc_url( $terms_of_use_url === '#' ? '' : $terms_of_use_url ); ?>" />
        </p>
        <p>
            <input type="text" name="imjol_terms_of_use_name" value="<?php echo esc_attr( $terms_of_use_name ); ?>" />
        </p>
        <?php
    }

    // Function to apply the settings to the front-end form
    public function apply_settings_to_form() {
        // Retrieve the primary color option
        $primary_color = get_option( 'imjol_primary_color', '#0073aa' );

        // Output the styles with the primary color applied
        echo "<style>
            .imjol-form__quiz-banner { background-color: $primary_color; }
            .add_but { background-color: $primary_color !important; }
            .required { background-color: $primary_color !important; }
            .budget-dropdown-button { background-color: $primary_color !important; }
            .time-dropdown-button { background-color: $primary_color !important; }
            .imjol-form__nav a.list-group-item.active, .imjol-form__nav a.list-group-item:hover { background-color: $primary_color; }
            .contact-form { color: $primary_color; }
            .contact-form a { color: $primary_color; }
            .imjol-forms__button .imjol-btn { background-color: $primary_color; }
            .contact-form-button { background-color: $primary_color; }
            .contact-form a { color: $primary_color; }
            .imjol-forms__quiz-form--v5 .imjol-forms__checkbox .privacy a { color: $primary_color; }
            .imjol-forms__quiz-form--v5 .imjol-forms__checkbox .privacy a { font-weight: bold; }
            .imjol-btn:hover { border: 1px solid $primary_color !important; }
            .add_but:hover { border: 1px solid $primary_color !important; }
            .imjol-forms .form-group input:hover { border: 1px solid $primary_color !important; }
            .imjol-forms__quiz--v5 .imjol-forms__quiz-form input:checked + .imjol-forms__input--quiz-label { border: 1px solid $primary_color !important; }

            .icr .budget-dropdown-content a:active, .icr .budget-dropdown-content a:hover, .icr .budget-dropdown-content a:focus { color: $primary_color !important; }
            .time-dropdown-content a:active, .time-dropdown-content a:hover, .time-dropdown-content a:focus { color: $primary_color !important; }
            .imjol-forms__quiz-check::after, .imjol-forms__quiz-check--role::after { border : solid $primary_color; }
            .imjol-forms__quiz-check::after, .imjol-forms__quiz-check--role::after { border-width : 7px; }
        </style>";
    }
}

// Instantiate the class to apply the hooks and functionalities
new Contact_Form_Settings();