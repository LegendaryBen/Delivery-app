<?php

namespace Acme\admin;
use PDO;



class AdminModel{

    public function fetch($con){

        if(isset($_GET['num']) && preg_match('/[1-9]+/',$_GET['num'])){
            $num = (int) $_GET['num'];
        }else{
            $num = 1;
        }

        $perpage = 2;
        $start = ($num - 1) * $perpage;
        $pending = "panding";

        $sql1 = "select * from Submitted where status=:status limit $perpage offset $start";
        $stmt1 = $con->prepare($sql1);
        $stmt1->bindParam(':status',$pending);
        $stmt1->execute();

        if(!$stmt1){
            header('location:../index.php');
            exit;
        }

        $res1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        
        $sql2 = "select * from Submitted where status=:status";
        $stmt2 = $con->prepare($sql2);
        $stmt2->bindParam(':status',$pending);
        $stmt2->execute();

        
        if(!$stmt2){
            header('location:../index.php');
            exit;
        }

        $res2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        $num2 = count($res2)/$perpage;
        $num2 = ceil($num2);
        $final = ['num'=>$num2,'res'=>$res1,'check'=>$num,'count'=>1];

        return $final;

    }

    public function fetchAccepted($con){
        if(isset($_GET['num']) && preg_match('/[1-9]+/',$_GET['num'])){
            $num = (int) $_GET['num'];
        }else{
            $num = 1;
        }

        $perpage = 1;
        $start = ($num - 1) * $perpage;
        $pending = "accepted";

        $sql1 = "select * from Submitted where status=:status limit $perpage offset $start";
        $stmt1 = $con->prepare($sql1);
        $stmt1->bindParam(':status',$pending);
        $stmt1->execute();

        if(!$stmt1){
            header('location:../index.php');
            exit;
        }

        $res1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        
        $sql2 = "select * from Submitted where status=:status";
        $stmt2 = $con->prepare($sql2);
        $stmt2->bindParam(':status',$pending);
        $stmt2->execute();

        
        if(!$stmt2){
            header('location:../index.php');
            exit;
        }

        $res2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        $num2 = count($res2)/$perpage;
        $num2 = ceil($num2);
        $final = ['num'=>$num2,'res'=>$res1,'check'=>$num,'count'=>1];

        return $final;
    }


    public function fetchSearch($con,$search){

        if(isset($_GET['num']) && preg_match('/[1-9]+/',$_GET['num'])){
            $num = (int) $_GET['num'];
        }else{
            $num = 1;
        }

        $perpage = 2;
        $start = ($num - 1) * $perpage;
        $pending = "panding";

        $sql1 = "select * from Submitted where status=:status and (`sender-name` regexp :sendername or `receiver-name` regexp :receivername) limit $perpage offset $start";
        $stmt1 = $con->prepare($sql1);
        $stmt1->bindParam(':status',$pending);
        $stmt1->bindParam(':sendername',$search);
        $stmt1->bindParam(':receivername',$search);
        $stmt1->execute();

        if(!$stmt1){
            header('location:../index.php');
            exit;
        }

        $res1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        
        $sql2 = "select * from Submitted where status=:status and  (`sender-name` regexp :sendername or `receiver-name` regexp :receivername)";
        $stmt2 = $con->prepare($sql2);
        $stmt2->bindParam(':status',$pending);
        $stmt2->bindParam(':sendername',$search);
        $stmt2->bindParam(':receivername',$search);
        $stmt2->execute();

        
        if(!$stmt2){
            header('location:../index.php');
            exit;
        }

        $res2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        $num2 = count($res2)/$perpage;
        $num2 = ceil($num2);
        $final = ['num'=>$num2,'res'=>$res1,'check'=>$num,'count'=>1];

        return $final;



    }

    public function fetchSearchAccepted($con,$search){

        if(isset($_GET['num']) && preg_match('/[1-9]+/',$_GET['num'])){
            $num = (int) $_GET['num'];
        }else{
            $num = 1;
        }

        $perpage = 2;
        $start = ($num - 1) * $perpage;
        $pending = "accepted";

        $sql1 = "select * from Submitted where status=:status and (`sender-name` regexp :sendername or `receiver-name` regexp :receivername or `tracking-code` regexp :tracking) limit $perpage offset $start";
        $stmt1 = $con->prepare($sql1);
        $stmt1->bindParam(':status',$pending);
        $stmt1->bindParam(':sendername',$search);
        $stmt1->bindParam(':receivername',$search);
        $stmt1->bindParam(':tracking',$search);
        $stmt1->execute();

        if(!$stmt1){
            header('location:../index.php');
            exit;
        }

        $res1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        
        $sql2 = "select * from Submitted where status=:status and  (`sender-name` regexp :sendername or `receiver-name` regexp :receivername or `tracking-code` regexp :tracking)";
        $stmt2 = $con->prepare($sql2);
        $stmt2->bindParam(':status',$pending);
        $stmt2->bindParam(':sendername',$search);
        $stmt2->bindParam(':receivername',$search);
        $stmt2->bindParam(':tracking',$search);
        $stmt2->execute();

        
        if(!$stmt2){
            header('location:../index.php');
            exit;
        }

        $res2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        $num2 = count($res2)/$perpage;
        $num2 = ceil($num2);
        $final = ['num'=>$num2,'res'=>$res1,'check'=>$num,'count'=>1];

        return $final;

    }


    public function makeId($con,$id){

        $track = "surelink".time();
        $status = "accepted";

        $sql = "update Submitted set `tracking-code` = :track, `status` = :status where id=:id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':track',$track);
        $stmt->bindParam(':status',$status);
        $stmt->bindParam(':id',$id);

        $stmt->execute();

        if(!$stmt){
            header("location:admin-home.php");
            exit;
        }

        header("location:admin-home.php");
        exit;

    }

    public function detail($con,$id){


        $sql = "select * from Submitted where `id`=:id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":id",$id);

        $stmt->execute();

        if(!$stmt){
            header('location:admin-home.php');
            exit;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($result) == 0){
            header('location:admin-home.php');
            exit;
        }

        return $result;

    }


    public function delete($con,$id){

        $status = "panding";

        $sql = "delete from Submitted where `status` = :status and `id`= :id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':status',$status);
        $stmt->bindParam(":id",$id);

        $stmt->execute();

        if(!$stmt){
            header('location:admin-home.php');
            exit;
        }

        header('location:admin-home.php');
        exit;

    }

    public function addLocation($location,$date,$time,$shipping,$con){

      $sql = "insert into Tracking(`shipping-id`,`location`,`date`,`time`) 
       values(:shipping,:location,:date,:time)";

       $stmt = $con->prepare($sql);

       $stmt->bindParam(':shipping',$shipping);
       $stmt->bindParam(':location',$location);
       $stmt->bindParam(':date',$date);
       $stmt->bindParam(':time',$time);

       $stmt->execute();

       if(!$stmt){
            header("location:update-location.php?id=$shipping&error=Internal server error!&change=pop");
            exit;
       }

       header("location:update-location.php?id=$shipping&error=Location has been added!&change=success");
       exit;



    }
    
}