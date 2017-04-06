<?php

function coursecategories() {
    // create a new taxonomy

    $labels = ['name' => _x('Course Category', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Course Category', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Course Categories', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Course Category', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Course Category', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Course Category', 'your-plugin-textdomain'),
        'new_item' => __('New Course Category', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Course Category', 'your-plugin-textdomain'),
        'view_item' => __('View Course Category', 'your-plugin-textdomain'),
        'all_items' => __('All Course Categories', 'your-plugin-textdomain'),
        'search_items' => __('Search Course Category', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Course Category:', 'your-plugin-textdomain'),
        'not_found' => __('No Course Category found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Course Categories found in Trash.', 'your-plugin-textdomain')
    ];

    register_taxonomy(
            'course-categories', ['courses', 'topics', 'chapters', 'tests','questions'], array(
        'labels' => $labels,
        'meta_box_cb' => 'drop_cat',
        'rewrite' => array('slug' => 'course-categories'),
        'hierarchical' => true
    ));
}

function drop_cat($post, $box) {
    $defaults = array('taxonomy' => 'course-categories');
    if (!isset($box['args']) || !is_array($box['args']))
        $args = array();
    else
        $args = $box['args'];
    extract(wp_parse_args($args, $defaults), EXTR_SKIP);
    $tax = get_taxonomy($taxonomy);
    ?>
    <div id="taxonomy-<?php echo $taxonomy; ?>" class="acf-taxonomy-field categorydiv">

    <?php
    $name = ( $taxonomy == 'course-categories' ) ? 'tax_input[' . $taxonomy . ']' : 'tax_input[' . $taxonomy . ']';
    echo "<input type='hidden' name='{$name}[]' value='0' />";
    ?>
        <?php $term_obj = wp_get_object_terms($post->ID, $taxonomy); ?>


        <ul id="<?php echo $taxonomy; ?>checklist" data-wp-lists="list:<?php echo $taxonomy ?>" class="categorychecklist form-no-clear">
        </ul>

    <?php wp_dropdown_categories(array('taxonomy' => $taxonomy, 'hide_empty' => false, 'name' => "{$name}[]", 'selected' => $term_obj[0]->term_id, 'orderby' => 'name', 'hierarchical' => true, 'show_option_none' => 'Please Select Course Category')); ?>

    </div>
    <?php
}

add_action('init', 'coursecategories');

function variants() {
    // create a new taxonomy

    $labels = ['name' => _x('Variant', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Variant', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Variants', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Variant', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Variant', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Variant', 'your-plugin-textdomain'),
        'new_item' => __('New Variant', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Variant', 'your-plugin-textdomain'),
        'view_item' => __('View Variant', 'your-plugin-textdomain'),
        'all_items' => __('All Variants', 'your-plugin-textdomain'),
        'search_items' => __('Search Variant', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Variant:', 'your-plugin-textdomain'),
        'not_found' => __('No Variant found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Variants found in Trash.', 'your-plugin-textdomain')
    ];

    register_taxonomy(
            'variant', ['courses'], array(
        'labels' => $labels,
        'rewrite' => array('slug' => 'course-variants'),
        'hierarchical' => true
            )
    );
}

add_action('init', 'variants');

function duration() {
    // create a new taxonomy

    $labels = ['name' => _x('Duration', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Duration', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name' => _x('Durations', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Duration', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Add New Duration', 'opinion', 'your-plugin-textdomain'),
        'add_new_item' => __('Add New Duration', 'your-plugin-textdomain'),
        'new_item' => __('New Duration', 'your-plugin-textdomain'),
        'edit_item' => __('Edit Duration', 'your-plugin-textdomain'),
        'view_item' => __('View Duration', 'your-plugin-textdomain'),
        'all_items' => __('All Durations', 'your-plugin-textdomain'),
        'search_items' => __('Search Duration', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Parent Duration:', 'your-plugin-textdomain'),
        'not_found' => __('No Duration found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Durations found in Trash.', 'your-plugin-textdomain')
    ];

    register_taxonomy(
            'duration', ['courses'], array(
        'labels' => $labels,
        'rewrite' => array('slug' => 'course-duration'),
        'hierarchical' => true
            )
    );
}

add_action('init', 'duration');
