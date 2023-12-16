<?php

namespace Acme\admin;

class AdminController{

    public function getSubmitted($con,$db){
        $result = $db->fetch($con);
        return $result;
    }

    public function getSearchSubmitted($con,$db,$seacrh){
        $result = $db->fetchSearch($con,$seacrh);
        return $result;
    }

    public function generate($con,$db,$id){
        $db->makeId($con,$id);
    }
    
}