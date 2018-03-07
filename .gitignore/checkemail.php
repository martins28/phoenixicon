<?php
require 'security.php';
error_reporting(0);
require_once 'connxn.php';
	  	$db= new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
    	if($db->connect_error)die($db->connect_error);
$email= mysqli_real_escape_string($db, $_POST['email']);

$emailconfirm = "SELECT email FROM user WHERE email='$email' ";
//      $sql = "SELECT * FROM test";

        if($result = $db->query($emailconfirm)){
//            echo "Success2"."<br>";
          $num_of_row = $result->num_rows;
       }
         if ($email== NULL)
	echo "Choose an email address..."."<br/>";
if (strstr($email, "@")&&strstr($email, ".")){

    if ($num_of_row==0) {
	       		echo "Email is available";
	       
	       	}
	
	       	else {
	       		if ($num_of_row>0) {
	       		echo "That email is in use! Already registered? Login to begin";
	       	}

}
}else echo "Invalid email";	      
	       

?>