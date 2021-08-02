<?php

    require_once('api_mt_include2.php');

    $ipRouterOS="192.168.88.1";  // IP tu RouterOS.
    $Username="secretppoe";
    $Pass="123456";
    $api_puerto=8728;


    $name = $_POST['nombre'];
    $password = $_POST['password'];
    $service = 'PPPOE';
    $profile = $_POST['plan'];

    $API = new routeros_api();
    $API->debug = false;

	if ($API->connect($ipRouterOS, $Username, $Pass, $api_puerto)) {

    $API->comm("/ppp/secret/add", array(
            "name"     => "$name",
            "password" => "$password",
            "service"  => "$service",
            "profile"  => "$profile",
    ));

    }
?>
