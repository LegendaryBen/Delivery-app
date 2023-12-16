<?php


require_once "../connection.php";
require_once '../vendor/autoload.php';

use Acme\admin\AdminController;
use Acme\admin\AdminModel;

$admin = new AdminController();
$db = new AdminModel();


if(!isset($_GET['id']) && !isset($_GET['ship'])){

    header("location:admin-currently-shipped.php");
    exit;

}else{
    
    $id = htmlentities(trim($_GET['id']));
    $ship = htmlentities(trim($_GET['ship']));

    if($id == ''|| $ship == ''){
        header("location:admin-currently-shipped.php");
        exit;
    }

    $admin->deletePast2($db,$con,$id,$ship);

}