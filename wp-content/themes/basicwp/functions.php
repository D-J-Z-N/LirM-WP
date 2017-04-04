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
