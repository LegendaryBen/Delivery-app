<?php

require_once "../connection.php";
require_once '../vendor/autoload.php';

use Acme\admin\AdminController;
use Acme\admin\AdminModel;

$admin = new AdminController();
$db = new AdminModel();


if(isset($_GET['search'])){

    $search = htmlentities($_GET['search']);

    if($search == ''){

        header('location:admin-home.php');
        exit;

    }else{

        $result = $admin->getSearchSubmitted($con,$db,$search);

    }

    

}else{

    $result = $admin->getSubmitted($con,$db);

}

