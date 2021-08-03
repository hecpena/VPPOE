<?php

    require_once('api_mt_include2.php');

    $ipRouterOS="192.168.88.1";  // IP tu RouterOS.
    $Username="secretppoe";
    $Pass="123456";
    $api_puerto=8728;


    $name = $_POST['nombre'];
    $password = $_POST['password'];
    $service = 'pppoe';
    $profile = $_POST['plan'];

    $data_post = array(
        "name" => $name,
        "password" => $password,
        "service" => $service,
        "profile" => $profile,
    );

    print_r($data_post);

    $API = new routeros_api();
    $API->debug = false;

    if ($API->connect($ipRouterOS, $Username, $Pass, $api_puerto)) {

        $API->comm("/ppp/secret/add", $data_post);

    }
?>
