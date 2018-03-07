<?php
session_start();
$username=$_SESSION['username'];
require 'security.php';

require_once 'connxn.php';

if(isset($_POST['oldpassword']) && isset($_POST['newpassword'] )){
    $old = $_POST['oldpassword'];
    $new = $_POST['newpassword'];
    if(!empty($old) && !empty($new)){
        $db = new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
        if($db->connect_error)die($db->connect_error);
        //echo "Success1"."<br>";
        $passrecquery = "SELECT * FROM user WHERE username='$username'";
        $passconfirm=$db->query($passrecquery);
        $getpass= mysqli_fetch_assoc($passconfirm);
        $oldpass= $getpass['password'];
       
      
//      $sql = "SELECT * FROM test";

        if($old==$oldpass){
//            echo "Success2"."<br>";
            
            $newpasswordquery= "UPDATE user SET password='$new' WHERE username='$username'";
            $passchange=$db->query($newpasswordquery);
            header("location:changesuccess.php");
          }
        

        else{
        	header("location:passchangeerror.php");
        }
        }

}



?>