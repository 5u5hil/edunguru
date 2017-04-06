<?php
$api = new API();
if (isset($_REQUEST['methodType']) && $_REQUEST['methodType'] == 'wcCart') {
    header("Content-Type: application/json");
    $output=WC()->cart->get_cart_contents_count();
    echo json_encode($output);
    die();
}
if (isset($_REQUEST['method'])) {
    $method = isset($_REQUEST['method']) ? $_REQUEST['method'] : '';
    $output = [];

    if (method_exists($api, $method)) {
        $output = $api->$method();
    } else {
        $output = ['error' => 'Method Does Not Exist'];
    }

    header("Content-Type: application/json");
    echo json_encode($output);
    die();
}