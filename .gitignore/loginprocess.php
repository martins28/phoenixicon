<?php
require 'security.php';

require_once 'connxn.php';

if(isset($_POST['username']) && isset($_POST['password'] )){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($password)){
        $db = new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
        if($db->connect_error)die($db->connect_error);
        //echo "Success1"."<br>";
        $logquery = "SELECT * FROM user WHERE username='$username' AND confirm=1 ";
        $login=$db->query($logquery);
       
       while ($row=mysqli_fetch_assoc($login)) {
    $confirmaccount=$row['confirm'];
}
if ($confirmaccount>0) {
   

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
//      $sql = "SELECT * FROM test";

        if($result = $db->query($sql)){
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
                 session_start();
                $_SESSION['username']=$username;

                header('location: account.php');
                }
        elseif ($num_of_row==0) {
           header('location: signin.php');
           // header('location:login/login.html');
        }
            }
        }

}
}elseif ($confirmaccount<1) {
    header('location: confirmfirst.php');
}


?>