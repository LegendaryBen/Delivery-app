<?php


require_once "../connection.php";
require_once '../vendor/autoload.php';

use Acme\admin\AdminController;
use Acme\admin\AdminModel;

$admin = new AdminController();
$db = new AdminModel();


if(!isset($_GET['id'])){

    header('location:admin-currently-ship.php');
    exit;

}else{
    
    $id = htmlentities(trim($_GET['id']));

    if($id == ''){

        header('location:admin-currently-ship.php');
        exit;
    
    }

    $admin->endShipping($con,$db,$id);

}