<?php
require 'connxn.php';
$username=$_GET['username'];
$code=$_GET['code'];
$firstquery= "SELECT * FROM user WHERE username='$username'";
$res1=$db->query($firstquery);
$secondquery="UPDATE user SET confirm=1";
$thirdquery="UPDATE user SET confirmcode=0";
$reply1 = $db->query($firstquery);
if(!$reply1)die($db->error);
while ($row=mysqli_fetch_assoc($res1)) {
	$dbcode=$row['confirmcode'];
}
if ($code==$dbcode) {
	$reply2 = $db->query($secondquery);
	if(!$reply2)die($db->error);
	$reply3 = $db->query($thirdquery);
	if(!$reply3)die($db->error);
}
header('location:signin.php');

?>