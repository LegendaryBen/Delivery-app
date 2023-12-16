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

    public function details($con,$db,$id){
        $result = $db->detail($con,$id);
        return $result;
    }

    public function delete($con,$db,$id){
        $db->delete($con,$id);
    }
    
}