<?php
require 'security.php';
	$db=mysqli_connect('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
		 			
				$account_balance='0.00';
				$name=mysqli_real_escape_string($db, $_POST['name']);
				
	        	$email=mysqli_real_escape_string($db, $_POST['email']);
	        	$account_currency=mysqli_real_escape_string($db, $_POST['account_currency']);
	        	$preffered_account=mysqli_real_escape_string($db, $_POST['preffered_account']);
	        	$address=mysqli_real_escape_string($db, $_POST['address']);
	        	$country=mysqli_real_escape_string($db, $_POST['country']);
	        	$username=mysqli_real_escape_string($db, $_POST['username']);
	        	$password=mysqli_real_escape_string($db, $_POST['password']);
	        	$mobile_number=mysqli_real_escape_string($db, $_POST['mobile_number']);
	        	$month=mysqli_real_escape_string($db, $_POST['month']);
	        	$day=mysqli_real_escape_string($db, $_POST['day']);
	        	$year=mysqli_real_escape_string($db, $_POST['year']);
	        	

	        	$date_of_birth=$day.'/'.$month.'/'.$year;




	 if (isset($_POST['name'], $_POST['day'],$_POST['year'],$_POST['month'],
	 				 $_POST['username'], $_POST['email'] 
	 				, $_POST['password'], $_POST['country'], 
	 				$_POST['address'], $_POST['mobile_number'],
	 	 			$_POST['preffered_account'],$_POST['account_currency']))
	 	
	  	$db= new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
    	if($db->connect_error)die($db->connect_error);


		 {
		 	$sql = "INSERT INTO user VALUES ('null','$name','$date_of_birth','$username','$email',
	        	'$password','$country','$address','$mobile_number',
				'$preffered_account','$account_currency', '$account_balance')";
		    $result = $db->query($sql);
			    if(!$result)die($db->error);
			   header('location: signin.php');

		 }

	        	/* {
	        		$sql = "INSERT INTO user VALUES ('null','$name','$date_of_birth','$username','$email',
	        	'$password','$country','$address','$mobile_number',
				'$preffered_account','$account_currency' )";
			    $result = $db_server->query($sql);
			    if(!$result)die($db_server->error);
				  }*/


?>