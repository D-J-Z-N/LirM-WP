<?php
function myFunction()
{
    if (isset($_POST['name'])) {
        $post_information = array(
            'post_title' => $_POST['name'],
            'post_type' => 'guest',
            'post_status' => 'publish'
        );

        $postID = wp_insert_post($post_information);
        if ($postID) {
            add_post_meta($postID, 'will_come', $_POST['will_come']);
        }
    }
}

add_action('wp_ajax_myFunction', 'myFunction');
add_action('wp_ajax_nopriv_myFunction', 'myFunction');

add_filter('manage_edit-guest_columns', 'my_columns');
function my_columns($columns) {
    $columns['will_come'] = 'Will come';
    return $columns;
}

add_action('manage_posts_custom_column',  'my_show_columns');
function my_show_columns($name) {
    global $post;
    switch ($name) {
        case 'will_come':
            if(get_post_meta($post->ID, 'will_come', true)) {
                $views = "Yes";
            } else {
                $views = "No";
            }
            echo $views;
    }
}