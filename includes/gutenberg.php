<?php
if(!function_exists('fix_no_editor_on_posts_page'))
{
    function fix_no_editor_on_posts_page($post_type, $post)
    {
        if(isset($post) && $post->ID != get_option('page_for_posts'))
        {
            return;
        }

        remove_action('edit_form_after_title', '_wp_posts_page_notice');
        add_post_type_support('page', 'editor');
    }

    add_action('add_meta_boxes', 'fix_no_editor_on_posts_page', 0, 2);

}

/**
 * Simulate non-empty content to enable Gutenberg editor
 *
 * @param bool    $replace Whether to replace the editor.
 * @param WP_Post $post    Post object.
 * @return bool
 */
add_filter('replace_editor', function($replace, $post)
{
    if (!$replace && absint(get_option('page_for_posts')) === $post->ID && empty($post->post_content))
    {
        // This comment will be removed by Gutenberg since it won't parse into block.
        $post->post_content = '<!--non-empty-content-->';
    }

    return $replace;
}, 10, 2 );
