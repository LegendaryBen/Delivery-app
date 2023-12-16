<?php

if(!isset($_GET['id'])){
    header('location:admin-currently-shipped.php');
    exit;
}


if($_GET['id'] == ''){
    header('location:admin-currently-shipped.php');
    exit;
}

$id = htmlentities(trim($_GET['id']));