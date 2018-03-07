<?php
require 'security.php';
$db=mysqli_connect('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
error_reporting(0);
session_start();
$username=$_SESSION['username'];

		if (isset($_SESSION['username'])) {
			
			require 'connxn.php';


} 


else {
	
	header('location:index.php');
	exit();
}

				$Full_Name= mysqli_real_escape_string($db, $_POST['Full_name']);
				$email= mysqli_real_escape_string($db, $_POST['email']);
	        	$mtcn= mysqli_real_escape_string($db, $_POST['mtcn']);
	        	$refnumber= mysqli_real_escape_string($db, $_POST['refnumber']);
	        	$batchnumber= mysqli_real_escape_string($db, $_POST['batchnumber']);
	        	$fullsendernumber= mysqli_real_escape_string($db, $_POST['fullsendernumber']);
	        	$sendercountry= mysqli_real_escape_string($db, $_POST['sendercountry']);
	        	$sendercity= mysqli_real_escape_string($db, $_POST['sendercity']);
	        	$username= mysqli_real_escape_string($db, $_POST['Username']);
	        	
	        	



	 
		 	
	 	require_once 'connxn.php';
	  	$db= new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
    	if($db->connect_error)die($db->connect_error);


		 {
		 	$sql = "INSERT INTO deposit_requests VALUES ('null','$Full_Name','$username','$email',
	        	'$mtcn','$refnumber','$batchnumber','$fullsendernumber',
				'$sendercountry','$sendercity')";
		    $result = $db->query($sql);
			    if(!$result)die($db->error);
			   


		 }

		 header('location:actionpagedeposit.php');
		

?>