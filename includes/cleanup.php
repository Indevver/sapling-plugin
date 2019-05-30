<?php
add_action('init', function() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'wp_generator');
});

function sapling_remove_version($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}

remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
add_filter('the_generator', '__return_empty_string');
add_filter('style_loader_src', 'sapling_remove_version', 10);
add_filter('script_loader_src', 'sapling_remove_version', 10);