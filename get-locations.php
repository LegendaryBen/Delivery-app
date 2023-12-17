<?php

require_once __DIR__."/connection.php";
require_once __DIR__.'/vendor/autoload.php';

use Acme\user\UserController;
use Acme\user\UserModel;

$user = new UserController();
$db = new UserModel();

if(isset($_POST['submit'])){

    $id = htmlentities(trim($_POST['track']));

    if($id == ''){
        header('location:index.php');
        exit; 
    }

    $result = $user->getLocations($con,$db,$id);


}else{
    header('location:index.php');
    exit;
}