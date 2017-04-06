<?php
/*
 * Plugin Name: Students Ask
 * Description: An example of how to use the WP_List_Table class to display data in your WordPress Admin area
 * Plugin URI: http://www.infinisystem.com
 * Author: Infini Systems
 * Author URI: http://www.infinisystem.com
 * Version: 1.0
 * License: GPL2
 */
error_reporting(0);
if (is_admin()) {
    new StudentsAsk();
}

/**
 * StudentsAsk class will create the page to load the table
 */
class StudentsAsk {

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
        add_menu_page('Students Ask', 'Students Ask', 'manage_options', 'students-ask.php', array($this, 'list_table_page'), 'dashicons-welcome-learn-more', 1);
    }

    /**
     * Display the list table page
     *
     * @return Void
     */
    public function list_table_page() {
        $exampleListTable = new Example_List_Table();
        $exampleListTable->prepare_items();
        // echo "<pre>"; print_r($exampleListTable);
        ?>

        <input type="hidden" id="basePluginUrl" value="<?= get_site_url(); ?>" />
        <div class="wrap">
            <div id="icon-users" class="icon32"></div>
            <h2>All Questions</h2>

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
class Example_List_Table extends WP_List_Table {

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
            'qn' => 'Question',
            'uid' => 'Asked By',
            'cid' => 'Course',
            'ctid' => 'Chapter',
            'tid' => 'Topic',
            'ans' => 'Answer',
            'answered_by' => 'Answered By',
            'asked_at' => 'Asked On',
            'answered_at' => 'Answered On',
            'turn_around_time' => 'Turn Around Time',
            'action' => ''
        );

        return $columns;
    }

    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data() {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        if (isset($startDate) && isset($endDate)): //start and end date
            $whereM .= " AND bet_at BETWEEN '" . $startDate . "' AND '" . $endDate . "' ";
        endif;
        $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'id';
        $order = isset($_GET['order']) ? $_GET['order'] : 'desc';
        $getTName = trim($_POST['tName']);
        $getMName = trim($_POST['matchTitle']);
        $getTitleId = get_page_by_title($getTName, OBJECT, 'tournaments');
        $getId = $getTitleId->ID;
        $where = isset($getId) ? " AND tid=" . $getId : "";
        if ($getMName != ""):
            $getMTitleId = get_page_by_title($_POST['matchTitle'], OBJECT, 'matches');
            $getMId = $getMTitleId->ID;
            if ($getMId != ""):
                $whereM = " AND mid=" . $getMId;
            endif;
        endif;
        global $wpdb;
        $data = $wpdb->get_results("SELECT * FROM wp_students_ask WHERE id IS NOT NULL  $where $whereM   order by $orderby $order  ", ARRAY_A);
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
             case 'qn':
                return $item[$column_name];
                break;
            case 'uid':
                $getUsername = get_userdata($item[$column_name]);
                return $getUsername->data->display_name;
                break;
            case 'tid':
                return get_the_title($item[$column_name]);
                break;
            case 'cid':
                return get_the_title($item[$column_name]);
                break;
            case 'ctid':
                return get_the_title($item[$column_name]);
                break;
            case 'answered_by':
                $getUsername = get_userdata($item[$column_name]);
                return $item[$column_name] == NULL ? '-' : $getUsername->data->display_name;
                break;
            case 'ans':
                return $item[$column_name] == NULL ? 'Unasnwered' : $item[$column_name];
                break;
            case 'answered_at':
                return $item['answered_at'] == NULL ? '-' : date('d M, Y h:i a', strtotime($item[$column_name]));
            case 'asked_at':
                return date('d M, Y h:i a', strtotime($item[$column_name]));
            case 'turn_around_time' :
                $date1 = new DateTime($item['answered_at'] == NULL ? date('Y-m-d H:i:s') : $item['answered_at']);
                $date2 = new DateTime($item['asked_at']);
                $diff = $date2->diff($date1)->format("%a");
                return $diff > 0 ? $diff . " Days" : '-';
            case 'action' :
                return '<div class="row-actions"><span class="edit"><a href="http://localhost:8025/wp-admin/post.php?post=99&amp;action=edit" aria-label="Answer this Question">Answer</a>  </span></div>';
            default:
                return print_r($item, true);
        }
    }

}
?>