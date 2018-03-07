<?php
//require dbase connxn
require 'connxn.php';

session_start();
unset($_SESSION["username"]);
session_destroy();

header('location:index.html');



?>