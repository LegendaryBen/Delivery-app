<?php

require_once "../connection.php";
require_once '../vendor/autoload.php';

use Acme\admin\AdminController;
use Acme\admin\AdminModel;

$admin = new AdminController();
$db = new AdminModel();

if(isset($_POST['submit'])){

    $location = htmlentities(trim($_POST['location']));
    $date = htmlentities(trim($_POST['date']));
    $time = htmlentities(trim($_POST['time']));
    $shipping_id = htmlentities(trim($_POST['id']));
    $message = htmlentities(trim($_POST['message']));

    $admin->addHoldLocation($location,$date,$time,$shipping_id,$message,$con,$db);

}else{
    header('location:admin-currently-shipped.php');
    exit;
}