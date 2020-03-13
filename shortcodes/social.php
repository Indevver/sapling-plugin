<?php
use Timber\Timber;

add_shortcode('social', function() {
    $context = Timber::get_context();
    $context['facebook'] = get_theme_mod('social_facebook');
    $context['google_plus'] = get_theme_mod('social_google_plus');
    $context['houzz'] = get_theme_mod('social_houzz');
    $context['instagram'] = get_theme_mod('social_instagram');
    $context['linkedin'] = get_theme_mod('social_linkedin');
    $context['myspace'] = get_theme_mod('social_myspace');
    $context['pinterest'] = get_theme_mod('social_pinterest');
    $context['snapchat'] = get_theme_mod('social_snapchat');
    $context['twitter'] = get_theme_mod('social_twitter');
    $context['yelp'] = get_theme_mod('social_yelp');
    $context['youtube'] = get_theme_mod('social_youtube');

    return Timber::compile('partials/social.twig', $context);
});