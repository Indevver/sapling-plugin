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
require_once __DIR__.'/includes/customizr.php';
require_once __DIR__.'/includes/login-styles.php';
require_once __DIR__.'/includes/timber.php';
require_once __DIR__.'/includes/admin-bar.php';
require_once __DIR__.'/shortcodes/date.php';
require_once __DIR__.'/shortcodes/social.php';


add_filter('timber/loader/paths', function($paths){
    array_unshift($paths, get_stylesheet_directory().'/templates');
    array_push($paths, __DIR__.'/templates');

    return $paths;
});

add_action('acf/init', function()
{
    if(function_exists('acf_register_block')){
        $blocks = apply_filters('gutenblock_blocks', []);
        /** @var \gutenblock\IGutenBlock $block */
        foreach($blocks as $block)
        {
            acf_register_block(array(
                'name'				=> $block->getName(),
                'title'				=> $block->getTitle(),
                'description'		=> $block->getDescription(),
                'render_callback'	=> $block->getRenderCallback(),
                'category'			=> $block->getCategory(),
                'icon'				=> $block->getIcon(),
                'keywords'			=> $block->getKeywords(),
            ));
            $builder = $block->getFields();
            $builder->setLocation('block', '==', 'acf/'.$block->getName());
            acf_add_local_field_group($builder->build());
        }
    }
});