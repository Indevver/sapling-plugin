<?php
use Timber\Timber;

add_shortcode('date', function($atts){
    $atts = shortcode_atts( array(
        'time' => 'now',
        'format' => 'Y'
    ), $atts, 'date');
    $date = new DateTime($atts['time']);

    return $date->format($atts['format']);
});
