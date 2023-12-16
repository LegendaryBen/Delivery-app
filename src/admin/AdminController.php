<?php

namespace Acme\admin;

class AdminController{

    public function getSubmitted($con,$db){
        $result = $db->fetch($con);
        return $result;
    }

    public function getAccepted($con,$db){
        $result = $db->fetchAccepted($con);
        return $result;
    }

    public function getSearchSubmitted($con,$db,$seacrh){
        $result = $db->fetchSearch($con,$seacrh);
        return $result;
    }

    public function getSearchAccepted($con,$db,$seacrh){
        $result = $db->fetchSearchAccepted($con,$seacrh);
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

    public function addLocation($location,$date,$time,$shipping,$con,$db){

        $this->checkEmptyValues($location,$date,$time,$shipping);

        $db->addLocation($location,$date,$time,$shipping,$con);
    }

    private function checkEmptyValues($location,$date,$time,$shipping){

        if($location == ''||$date == ''|| $time == '' || $shipping == ''){
            header("location:update-location.php?id=$shipping&error=Input fields should not be empty!&change=pop");
            exit;
        }

    }
    
}