<?php

require_once "../connection.php";
require_once '../vendor/autoload.php';

use Acme\admin\AdminController;
use Acme\admin\AdminModel;

$admin = new AdminController();
$db = new AdminModel();



if(!isset($_GET['id'])){
    header('location:admin-currently-shipped.php');
    exit;
}


if($_GET['id'] == ''){
    header('location:admin-currently-shipped.php');
    exit;
}

$id = htmlentities(trim($_GET['id']));

$result = $admin->getPastLocations($id,$db,$con);
