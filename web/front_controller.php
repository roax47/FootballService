<?php
require_once '../dispatcher.php';
require_once '../routing.php';
require_once '../controllers.php';

session_start();


$action_url = $_GET['action'];
$_SESSION['url']=$action_url;
dispatch($routing, $action_url);


