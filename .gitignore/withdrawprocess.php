<?php
$db= new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
$time= time();
$actual_time= date('H:i:s', $time);

$date= date('d m Y');


$dateandtime=$date.'/'.$actual_time;



error_reporting(0);
session_start();
$username=$_SESSION['username'];




$withdraw=mysqli_real_escape_string($db,$_POST['withdrawal_method']);
$amount=mysqli_real_escape_string($db,$_POST['Amount_to_withdraw']);
$beneficiary=mysqli_real_escape_string($db,$_POST['Beneficiary_name']);
$bitcoin=mysqli_real_escape_string($db,$_POST['bitcoin_address']);
$perfectmoney=mysqli_real_escape_string($db,$_POST['perfect_money_account']);
$user=$username;

		if (isset($_SESSION['username'])) {
		require 'connxn.php';
		$db= new mysqli('127.0.0.1', 'root', 'phagocyte', 'projectcyril');
    	if($db->connect_error)die($db->connect_error);


		 {
		 	$sql = "INSERT INTO withdrawal_request VALUES ('null','$dateandtime','$withdraw','$user',
		 		'$amount','$beneficiary',
		 		'$bitcoin',
	        	'$perfectmoney')";
		    $result = $db->query($sql);
			    if(!$result)die($db->error);
			   header('location: actionpagewithdraw.php');

		 }
		
		
		


} else {
	
	header('location:account.php');
}
	
?>


