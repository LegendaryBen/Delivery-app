<?php

require_once "../connection.php";
require_once '../vendor/autoload.php';

use Acme\admin\AdminController;
use Acme\admin\AdminModel;

$admin = new AdminController();
$db = new AdminModel();


if(!isset($_GET['id'])){

    header('location:admin-completed.php');
    exit;

}else{

    $id = htmlentities(trim($_GET['id']));

    if($id == ''){
        header('location:admin-completed.php');
        exit;
    }


    $admin->deleteComplete($con,$db,$id);

}