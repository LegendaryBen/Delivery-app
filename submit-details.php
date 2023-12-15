<?php

require_once __DIR__."/connection.php";
require_once __DIR__.'/vendor/autoload.php';

use Acme\user\UserController;
use Acme\user\UserModel;

$user = new UserController();
$db = new UserModel();


if(isset($_POST['submit'])){

    $sendername = htmlentities(trim($_POST['sender-name']));
    $sendernadd =  htmlentities(trim($_POST['sender-address']));
    $sendernphone =  htmlentities(trim($_POST['sender-phone']));
    $receivername =  htmlentities(trim($_POST['receiver-name']));
    $receiveradd =  htmlentities(trim($_POST['receiver-address']));
    $receiverphone =  htmlentities(trim($_POST['receiver-phone']));
    $itemname =  htmlentities(trim($_POST['item-name']));
    $itemweight = htmlentities(trim($_POST['item-weight']));
    $itemvalue = htmlentities(trim($_POST['item-value']));

    $user->submit_form($sendername,$sendernadd,$sendernphone,$receivername,$receiveradd,$receiverphone,$itemweight,$itemvalue,$itemname,$con,$db);

}else{

    header('location:ship.php');
    exit;

}