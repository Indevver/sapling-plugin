<?php
// move yoast to bottom below acf
add_filter('wpseo_metabox_prio', function() {
    return 'low';
});