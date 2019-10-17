<?php
add_filter('timber/context', function($context){
    $context['gtm'] = get_theme_mod('gtm');
    $context['menu_logo'] = get_theme_mod('menu_logo');
    $context['facebook'] = get_theme_mod('social_facebook');
    $context['google_plus'] = get_theme_mod('social_google_plus');
    $context['instagram'] = get_theme_mod('social_instagram');
    $context['linkedin'] = get_theme_mod('social_linkedin');
    $context['pinterest'] = get_theme_mod('social_pinterest');
    $context['snapchat'] = get_theme_mod('social_snapchat');
    $context['twitter'] = get_theme_mod('social_twitter');
    $context['myspace'] = get_theme_mod('social_myspace');
    $context['yelp'] = get_theme_mod('social_yelp');
    $context['youtube'] = get_theme_mod('social_youtube');
    $context['jquery'] = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';

    return $context;
});
