<?php


require_once "../connection.php";
require_once '../vendor/autoload.php';

use Acme\admin\AdminController;
use Acme\admin\AdminModel;

$admin = new AdminController();
$db = new AdminModel();


if(isset($_GET['id'])){

    $id = htmlentities($_GET['id']);

    if(preg_match('/[1-9]+/',$_GET['id'])){

       $admin->delete($con,$db,$id);

    }else{

        header('location:admin-home.php');
        exit;
    
    }

}else{
    header('location:admin-home.php');
    exit;
}