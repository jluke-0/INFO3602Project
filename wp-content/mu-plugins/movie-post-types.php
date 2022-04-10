<?php 
function movie_post_types(){
        register_post_type('event',array(
            'supports' => array('title', 'editor','excerpt'),
            'rewrite'=> array('slug' => 'events' ),
            'has_archive' => true,
            'public' => true, 
            'labels' => array(
                'name' => "Events",
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => "Event"
            ),
            'menu_icon' => 'dashicons-calendar'
        ));
        register_post_type('food',array(
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite'=> array('slug' => 'food' ),
            'has_archive' => true,
            'public' => true, 
            'labels' => array(
                'name' => "Food and Drinks",
                'add_new_item' => 'Add New Food and Drink',
                'edit_item' => 'Edit Food and Drink',
                'all_items' => 'All Food and Drinks',
                'singular_name' => "Food and Drink"
            ),
            'menu_icon' => 'dashicons-food'
        ));

        register_post_type('staff',array(
            'supports' => array('title', 'editor','thumbnail'),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array('slug' => 'staff' ),
            'labels' => array(
            'name' => "Staff Member",
            'add_new_item' => 'Add New Staff Member',
            'edit_item' => 'Edit Staff Member',
            'all_items' => 'All Staff Members',
            'singular_name' => "Staff Member"
            ),
            'menu_icon' => 'dashicons-admin-users'
            ));

}
 add_action('init', 'movie_post_types');
?>