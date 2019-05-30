<?php
namespace Sapling;

function flexible_content_layout_title($title, $field, $layout, $i)
{
    if(get_sub_field('Admin Label'))
    {
        $title = get_sub_field('Admin Label') . " - " . $title;
    }

    return $title;
}

add_filter('acf/fields/flexible_content/layout_title/name=Column 1', 'Sapling\flexible_content_layout_title', 10, 4);
add_filter('acf/fields/flexible_content/layout_title/name=Column 2', 'Sapling\flexible_content_layout_title', 10, 4);
add_filter('acf/fields/flexible_content/layout_title/name=Column 3', 'Sapling\flexible_content_layout_title', 10, 4);
add_filter('acf/fields/flexible_content/layout_title/name=Column 4', 'Sapling\flexible_content_layout_title', 10, 4);
