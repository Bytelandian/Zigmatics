<?php
$host="ec2-54-235-134-128.compute-1.amazonaws.com";
$dbname="d7la1ov0vbab27";
$user="zeiknggbiwhydk";
$password="faMkEdqbAmTw8-MN5e6IyeRlsC";
$con=pg_connect("host=$host dbname=$dbname user=$user password=$password sslmode=require")
    or die("Can't connect to database".pg_last_error());
?>
