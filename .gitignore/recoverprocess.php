<?php
require 'security.php';

require_once 'connxn.php';

if(isset($_POST['username']) && isset($_POST['email'] )){
    $username = $_POST['username'];
    $password = $_POST['email'];
    if(!empty($username) && !empty($email)){
        $db = new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
        if($db->connect_error)die($db->connect_error);
        //echo "Success1"."<br>";
        $passquery = "SELECT * FROM user WHERE username='$username' AND email='$email'";
        $passcon=$db->query($passquery);
       
      
//      $sql = "SELECT * FROM test";

        if($result = $db->query($passcon)){
//            echo "Success2"."<br>";
            $num_of_row = $result->num_rows;
            
           /* echo "Success3"."<br>";
            echo "Your username is:".$username."<br>";
            echo "Your password is:".$password."<br>";
            echo "The number of rosw is:".$num_of_row."<br>";*/
            /*if($num_of_row == 0){
                echo "incorrect username or password";
            }*/
        if($num_of_row==1){
                 $newpass=rand();
        $newpassquery= "UPDATE user SET password='$newpass' WHERE username='$username'";
        $recoverymessage="Your password was reset for you at phoenixicon.com. This is your new password:"
       .$newpass;
        mail($email, "Password reset", $recoverymessage, "From:DoNotReply@phoenixicon.com");
        header('location: passrecoversucess.php');
                }

        elseif ($num_of_row==0) {
           header('location: passrecovererror.php');
           // header('location:login/login.html');
        }
            }
        }

}



?>