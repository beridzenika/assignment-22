<?php

require 'Libs/PHPMailer/src/Exception.php';
require 'Libs/PHPMailer/src/PHPMailer.php';
require 'Libs/PHPMailer/src/SMTP.php';

include 'Helpers/Session.php';
include 'Helpers/Paging.php';
include 'Models/Database.php';
include 'Models/HomeModel.php';
include 'Models/CategoriesModel.php';
include 'Models/AboutModel.php';
include 'Models/UserModel.php';
include 'Models/MainModel.php';
include 'Models/NewsModel.php';

include 'Pages/PageInterface.php';
include 'Pages/Page.php';
include 'Pages/Admin/Page.php';


$type = isset($_GET['type']) && $_GET['type'] == 'admin' ? $_GET['type'] : null;
$page = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 'home';
$action = isset($_GET['action']) && $_GET['action'] ? $_GET['action'] : 'index';

$page = ucfirst(strtolower($page));
$action = strtolower($action);


$className = 'Pages/'.  $page . '.php';
if ($type) {
    
    $className = 'Pages/Admin/'.$page . '.php';
}
include $className;


if ($type) {
    $page = 'Admin\\' .$page; 
}
$page = 'Pages\\' . $page;

if (class_exists($page)) {
    $p = new $page ();
    if (method_exists($page, $action)) {
        $p->$action();
    } else {
        echo 'method not found';
    }
} else {
    echo 'error 404';
}