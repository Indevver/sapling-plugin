<?php

function admin_bar_color()
{
    switch($_ENV['APP_ENV'] ?? 'dev')
    {
        case 'dev':
            return 'ectoplasm';
        case 'stage':
            return 'sunrise';
        case 'prod':
            return 'fresh';
        case 'test':
            return 'midnight';
        default:
            return 'light';
    }
}

add_action('admin_bar_menu', function() {
    // add new message for staging/live/dev
    global $wp_admin_bar;
    $label = '';
    switch($_ENV['APP_ENV'] ?? 'dev')
    {
        case 'dev':
            $label = 'Development';
            break;
        case 'stage':
            $label = 'Staging';
            break;
        case 'prod':
            $label = 'Live';
            break;
        case 'test':
            $label = 'Testing';
            break;
        default:
            $label = 'Unknown, APP_ENV is an unknown value';
            break;
    }

    $wp_admin_bar->add_menu([
        'parent'	=> 'top-secondary',
        'id'		=> 'environment-notice',
        'title'		=> '<span>'.__($label).'</span>',
    ]);

    // replace howdy with username
    $my_account = $wp_admin_bar->get_node('my-account');
    $newtitle = trim(str_replace(__('Howdy,'), '', $my_account->title));
    $wp_admin_bar->add_node([
        'id' => 'my-account',
        'title' => $newtitle,
    ]);
});

add_action('admin_init', function() {
    // Override the user's admin color scheme.
    add_filter('get_user_option_admin_color', 'admin_bar_color');
    // Hide the Admin Color Scheme field
    add_action('admin_color_scheme_picker', function(){
        remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker');
    }, 8);
});

add_action('wp_enqueue_scripts', function () {
    if(admin_bar_color() != 'fresh') {
        wp_enqueue_style(
            'color-admin-bar',
            admin_url('/css/colors/' . admin_bar_color() . '/colors.min.css'),
            ['admin-bar']
        );
    }
});