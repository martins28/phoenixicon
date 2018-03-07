
<?php
require 'security.php';
error_reporting(0);
require_once 'connxn.php';
	  	$db= new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
    	if($db->connect_error)die($db->connect_error);
$username= mysqli_real_escape_string($db, $_POST['username']);

$sql = "SELECT username FROM user WHERE username='$username' ";
//      $sql = "SELECT * FROM test";

        if($result = $db->query($sql)){
//            echo "Success2"."<br>";
          $num_of_row = $result->num_rows;
       }

       if ($username== NULL)
	echo "Choose a Username Please";
	    elseif (strlen($username)<=3) {
	       	echo "too short";
	       } 

	       else{
	       	if ($num_of_row==0) {
	       		echo "Available";
	       
	       	}
	       	else if ($num_of_row==1) {
	       		echo "Unavailable";
	       	}
	      
	       } 

?>


