<?php


namespace Acme\user;
use PDO;

class UserModel{

    public function create($sendername,$senderadd,$senderpnone,$receivername,$receiveradd,$receiverphone,$itemweight,$itemvalue,$itemname,$con){

        $sql = 'insert into Submitted(`sender-name`,`sender-address`,`sender-phone`,`receiver-name`,`receiver-address`,`receiver-phone`,`item-name`,`item-weight`,`item-value`)
         values(:sendername,:senderaddress,:senderphone,:receivername,:receiveraddress,:receiverphone,:itemname,:itemweight,:itemvalue)';

        $stmt = $con->prepare($sql);

        $stmt->bindParam(':sendername',$sendername);
        $stmt->bindParam(':senderaddress',$senderadd);
        $stmt->bindParam(':senderphone',$senderpnone);
        $stmt->bindParam(':receivername',$receivername);
        $stmt->bindParam(':receiveraddress',$receiveradd);
        $stmt->bindParam(':receiverphone',$receiverphone);
        $stmt->bindParam(':itemname',$itemname);
        $stmt->bindParam(':itemweight',$itemweight);
        $stmt->bindParam(':itemvalue',$itemvalue);

        $stmt->execute();

        if(!$stmt){

            header("location:ship.php?error=Internal server error!");
            exit;

        }else{

            header('location:success.php');
            exit;

        }


    }
    
}