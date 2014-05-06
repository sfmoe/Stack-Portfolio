<?php
add_action('admin_menu', 'stack_create_menu');

function stack_create_menu(){
add_menu_page('Stack Theme Settings', 'Stack Settings', 'administrator', __FILE__, 'stack_settings_page');
add_action( 'admin_init', 'register_mysettings' );
add_filter( 'admin_init' , 'register_fields' );
}

function register_mysettings(){
	register_setting('stack-settings-group','site_description');
}

function stack_settings_page(){
	include 'theme-options-page.php';
}

    function register_fields() {
        register_setting( 'stack-settings-group', 'site_description', 'esc_attr' );
        add_settings_field('site_description', '<label for="site_description">'.__('Website Description?' , 'site_description' ).'</label>' , 'fields_html' , 'stack-settings-group' );
    }
    function fields_html() {
        $value = get_option( 'site_description', '' );
        echo '<input type="text" id="site_description" name="site_description" value="' . $value . '"  class="regular-text ltr" />';
    }
