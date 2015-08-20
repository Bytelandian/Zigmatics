<?php
$IP="localhost";
$db="mathematica";
$user="username";
$pass="password";
$con=mysqli_connect($IP,$user,$pass,$db);
if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
?>
