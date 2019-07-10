<?php
/**
 * Plugin Name: Sapling
 * Description: Plugin to use with sapling theme
 * Version: 1.0
 * Author: Robert Parker
 */

use Timber\Timber;

require_once __DIR__.'/vendor/autoload.php';

require_once __DIR__.'/includes/check-requirements.php';
require_once __DIR__.'/includes/acf.php';
require_once __DIR__.'/includes/cleanup.php';
require_once __DIR__.'/includes/gravity-forms.php';
require_once __DIR__.'/includes/loggout-out-class.php';
require_once __DIR__.'/includes/yoast.php';
require_once __DIR__.'/shortcodes/date.php';
require_once __DIR__.'/shortcodes/social.php';


add_filter('timber/loader/paths', function($paths){
    array_unshift($paths, get_stylesheet_directory().'/templates');
    array_push($paths, __DIR__.'/templates');

    return $paths;
});
