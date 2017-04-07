<?php

function courses() {
    $labels = ['name' => _x('Courses', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Course', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Courses', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Course', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Course', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Course', 'your-plugin-textdomain'),
        'new_item' => __('New Course', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Course', 'your-plugin-textdomain'),
        'view_item' => __('View Course', 'your-plugin-textdomain'),
        'all_items' => __('All Courses', 'your-plugin-textdomain'),
        'search_items' => __('Search Course', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Course:', 'your-plugin-textdomain'),
        'not_found' => __('No Course found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Courses found in Trash.', 'your-plugin-textdomain')
    ];

    $args = ['labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'course'],
        'query_var' => true,
        'menu_icon' => 'dashicons-album',
        'show_ui' => true,
        'show_in_menu' => true, // This tells it to show up in your admin menu
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'capability_type' => 'post',
        'supports' => [
            'title', 'editor',
            'thumbnail',
            'author', 'page-attributes']
    ];
    register_post_type('courses', $args);
}

add_action('init', 'courses');

function chapters() {
    $labels = ['name' => _x('Chapters', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Chapter', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Chapters', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Chapter', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Chapter', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Chapter', 'your-plugin-textdomain'),
        'new_item' => __('New Chapter', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Chapter', 'your-plugin-textdomain'),
        'view_item' => __('View Chapter', 'your-plugin-textdomain'),
        'all_items' => __('All Chapters', 'your-plugin-textdomain'),
        'search_items' => __('Search Chapter', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Chapter:', 'your-plugin-textdomain'),
        'not_found' => __('No Chapter found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Chapters found in Trash.', 'your-plugin-textdomain')
    ];

    $args = ['labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'chapter'],
        'query_var' => true,
        'menu_icon' => 'dashicons-book-alt',
        'show_ui' => true,
        'show_in_menu' => true, // This tells it to show up in your admin menu
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'capability_type' => 'post',
        'supports' => [
            'title', 'editor',
            'thumbnail',
            'author', 'page-attributes']
    ];
    register_post_type('chapters', $args);
}

add_action('init', 'chapters');

function topics() {
    $labels = ['name' => _x('Topics', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Topic', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Topics', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Topic', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Topic', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Topic', 'your-plugin-textdomain'),
        'new_item' => __('New Topic', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Topic', 'your-plugin-textdomain'),
        'view_item' => __('View Topic', 'your-plugin-textdomain'),
        'all_items' => __('All Topics', 'your-plugin-textdomain'),
        'search_items' => __('Search Topic', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Topic:', 'your-plugin-textdomain'),
        'not_found' => __('No Topic found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Topics found in Trash.', 'your-plugin-textdomain')
    ];

    $args = ['labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'topic'],
        'query_var' => true,
        'menu_icon' => 'dashicons-translation',
        'show_ui' => true,
        'show_in_menu' => true, // This tells it to show up in your admin menu
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'capability_type' => 'post',
        'supports' => [
            'title', 'editor',
            'thumbnail',
            'author', 'page-attributes']
    ];
    register_post_type('topics', $args);
}

add_action('init', 'topics');

function questions() {
    $labels = ['name' => _x('Questions', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Question', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Questions', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Question', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Question', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Question', 'your-plugin-textdomain'),
        'new_item' => __('New Question', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Question', 'your-plugin-textdomain'),
        'view_item' => __('View Question', 'your-plugin-textdomain'),
        'all_items' => __('All Questions', 'your-plugin-textdomain'),
        'search_items' => __('Search Question', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Question:', 'your-plugin-textdomain'),
        'not_found' => __('No Question found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Questions found in Trash.', 'your-plugin-textdomain')
    ];

    $args = ['labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'questions'],
        'query_var' => true,
        'menu_icon' => 'dashicons-editor-spellcheck',
        'show_ui' => true,
        'show_in_menu' => true, // This tells it to show up in your admin menu
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'capability_type' => 'post',
        'supports' => [
            'author']
    ];
    register_post_type('questions', $args);
}

add_action('init', 'questions');

function notes() {
    $labels = ['name' => _x('Question Notes', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Question Notes', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Question Notes', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Question Notes', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Notes', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Test', 'your-plugin-textdomain'),
        'new_item' => __('New Notes', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Notes', 'your-plugin-textdomain'),
        'view_item' => __('View Notes', 'your-plugin-textdomain'),
        'all_items' => __('All Notes', 'your-plugin-textdomain'),
        'search_items' => __('Search Notes', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Notes:', 'your-plugin-textdomain'),
        'not_found' => __('No Test found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Tests found in Trash.', 'your-plugin-textdomain')
    ];

    $args = ['labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'notes'],
        'query_var' => true,
        'menu_icon' => 'dashicons-book',
        'show_ui' => true,
        'show_in_menu' => true, // This tells it to show up in your admin menu
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'capability_type' => 'post',
        'supports' => [
            'title',
            'author']
    ];
    register_post_type('notes', $args);
}

add_action('init', 'notes');

function tests() {
    $labels = ['name' => _x('Tests', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Test', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Tests', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Test', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Test', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Test', 'your-plugin-textdomain'),
        'new_item' => __('New Test', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Test', 'your-plugin-textdomain'),
        'view_item' => __('View Test', 'your-plugin-textdomain'),
        'all_items' => __('All Tests', 'your-plugin-textdomain'),
        'search_items' => __('Search Test', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Test:', 'your-plugin-textdomain'),
        'not_found' => __('No Test found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Tests found in Trash.', 'your-plugin-textdomain')
    ];

    $args = ['labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'test'],
        'query_var' => true,
        'menu_icon' => 'dashicons-hammer',
        'show_ui' => true,
        'show_in_menu' => true, // This tells it to show up in your admin menu
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'capability_type' => 'post',
        'supports' => [
            'title',
            'author']
    ];
    register_post_type('tests', $args);
}

add_action('init', 'tests');





