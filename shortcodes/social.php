<?php
use Timber\Timber;

add_shortcode('social', function() {
    $context = Timber::get_context();

    return Timber::compile('leaves/social.twig', $context);
});