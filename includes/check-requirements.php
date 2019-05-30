<?php
add_action('plugins_loaded', function(){
    if (!class_exists('Timber\Timber'))
    {
        add_action('admin_notices', function() {
            echo '<div class="error"><p>Timber not installed. Make sure you run <code>composer install</code></p></div>';
        });

        add_filter('template_include', function($template) {
            return get_stylesheet_directory().'/static/no-timber.html';
        });

        return;
    }

    if (!function_exists('acf_add_options_page'))
    {
        add_action( 'admin_notices', function() {
            echo '<div class="error"><p>ACF not activated. Make sure you install and activate the plugin.</p></div>';
        });

        add_filter('template_include', function( $template ) {
            return get_stylesheet_directory().'/static/no-acf.html';
        });

        return;
    }
});