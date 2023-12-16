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

        header('location:admin-currently-shipped.php');
        exit;

    }else{

        $result = $admin->getSearchAccepted($con,$db,$search);

    }

    

}else{

    $result = $admin->getAccepted($con,$db);


}

