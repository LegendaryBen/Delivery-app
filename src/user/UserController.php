<?php

namespace Acme\user;


class UserController{

    
    public function submit_form($sendername,$senderadd,$senderpnone,$receivername,$receiveradd,$receiverphone,$itemweight,$itemvalue,$itemname,$con,$db){

        $this->check_input($sendername,$senderadd,$senderpnone,$receivername,$receiveradd,$receiverphone,$itemweight,$itemvalue,$itemname);

        $this->submit($sendername,$senderadd,$senderpnone,$receivername,$receiveradd,$receiverphone,$itemweight,$itemvalue,$itemname,$con,$db);
        
    }

    private function check_input($sendername,$senderadd,$senderpnone,$receivername,$receiveradd,$receiverphone,$itemweight,$itemvalue,$itemname){

        if($sendername == ""||$senderadd == ""|| $senderpnone == ""||$receivername == ""||$receiveradd == ""||$receiverphone == ""||$itemweight==""||$itemvalue==""||$itemname ==""){
            header('location:ship.php?error=Input fields should not be empty!!!');
            exit;
        }


    }


    private function submit($sendername,$senderadd,$senderpnone,$receivername,$receiveradd,$receiverphone,$itemweight,$itemvalue,$itemname,$con,$db){

        $db->create($sendername,$senderadd,$senderpnone,$receivername,$receiveradd,$receiverphone,$itemweight,$itemvalue,$itemname,$con);

    }



}