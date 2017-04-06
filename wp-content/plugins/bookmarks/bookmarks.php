<?php
/*
 * Plugin Name: Bookmarks
 * Description: An example of how to use the WP_List_Table class to display data in your WordPress Admin area
 * Plugin URI: http://www.infinisystem.com
 * Author: Infini Systems
 * Author URI: http://www.infinisystem.com
 * Version: 1.0
 * License: GPL2
 */
error_reporting(0);
if (is_admin()) {
    new Bookmarks();
}

/**
 * StudentsAsk class will create the page to load the table
 */
class Bookmarks {

    /**
     * Constructor will create the menu item
     */
    public function __construct() {
        add_action('admin_menu', array($this, 'add_menu_example_list_table_page'));
//        if (strpos($_SERVER['REQUEST_URI'], 'example-list-table') > 0 || strpos($_SERVER['REQUEST_URI'], 'pointsDistribution') > 0):
//            wp_enqueue_style('datepicker', get_template_directory_uri() . '/css/datepicker.css');
//            wp_enqueue_script('jquery10', get_template_directory_uri() . '/js/jquery10.js');
//            wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js');
//            wp_enqueue_style('jquery-ui-min', get_template_directory_uri() . '/css/jquery-ui.min.css');
//            wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js');
//        endif;
    }

    /**
     * Menu item will allow us to load the page to display the table
     */
    public function add_menu_example_list_table_page() {
        add_menu_page('Bookmarks ', 'Bookmarks', 'manage_options', 'bookmarks.php', array($this, 'list_table_page'), 'dashicons-yes', 1);
    }

    /**
     * Display the list table page
     *
     * @return Void
     */
    public function list_table_page() {
        $exampleListTable = new Bookmark_Topic();
        $exampleListTable->prepare_items();
        // echo "<pre>"; print_r($exampleListTable);
        ?>

        <input type="hidden" id="basePluginUrl" value="<?= get_site_url(); ?>" />
        <div class="wrap">
            <div id="icon-users" class="icon32"></div>
            <h2>All Notes</h2>

            <?php $exampleListTable->display(); ?>
        </div>
        <?php
    }

}

// WP_List_Table is not loaded automatically so we need to load it in our application
if (!class_exists('WP_List_Table')) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

/**
 * Create a new table class that will extend the WP_List_Table
 */
class Bookmark_Topic extends WP_List_Table {

    /**
     * Prepare the items for the table to process
     *
     * @return Void
     */
    public function get_sortable_columns() {
        $sortable_columns = array(
            'id' => array('id', true)
        );
        return $sortable_columns;
    }

    public function prepare_items() {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();
        $data = $this->table_data();
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }

    /**
     * Override the parent columns method. Defines the columns to use in your listing table
     *
     * @return Array
     */
    public function get_columns() {
        $columns = array(
            'id' => 'ID',
            'cid' => 'Course',
            'ctid' => 'Chapter',
            'tid' => 'Topic',
            'uid' => 'Bookmark By',
        );

        return $columns;
    }

    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data() {

        global $wpdb;
        $data = $wpdb->get_results("SELECT * FROM wp_bookmarks  ", ARRAY_A);
        $this->getCsv($data);
        return $data;
    }

    public function getCsv($query) {
        $combineRes[] = ['id', 'Users', 'Tournaments', 'Matches', 'Teams', 'Points', 'Bet At'];
        $combineRes[] = ['', '', '', '', '', '', ''];
        foreach ($query as $getResult):
            //echo $getResult->id;echo "<br>";
            $getUsername = get_userdata($getResult['uid']);
            $userName = $getUsername->data->display_name;
            $tourName = get_the_title($getResult['tid']);
            $matchTitle = !empty($getResult['mid']) ? get_the_title($getResult['mid']) : '-';
            $teamTitle = get_the_title($getResult['team_id']);
            $combineRes[] = array($getResult['id'], $userName, $tourName, $matchTitle, $teamTitle, $getResult['pts'], $getResult['bet_at']);
        endforeach;
        $fp = fopen('csv/file.csv', 'w');
        foreach ($combineRes as $fields) {
            fputcsv($fp, $fields);
        }
        fclose($fp);
    }

    public function column_default($item, $column_name) {
        switch ($column_name) {
            case 'id':
                return $item[$column_name];
                break;
            case 'tid':
                return $item[$column_name];
                break;
          
            case 'uid':
                $getUsername = get_userdata($item[$column_name]);
                return $getUsername->data->display_name;

                break;
            case 'cid':
                return get_the_title($item[$column_name]);
                break;
            case 'ctid':
                return get_the_title($item[$column_name]);
                break;
            case 'action' :
                return '<div class="row-actions"><span class="edit"><a href="http://localhost:8025/wp-admin/post.php?post=99&amp;action=edit" aria-label="Answer this Question">Answer</a>  </span></div>';
            default:
                return print_r($item, true);
        }
    }

}
?>