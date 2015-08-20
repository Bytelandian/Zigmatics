<?php
include 'config.php';
include'questions.php';
include 'times.php';
$a=$_GET['name'];
$b=$_GET['email'];
$c=0;
$result=pg_query($con,"SELECT count(*) as c FROM login WHERE name='" .$a."' and emailid='" .$b."'") or die("Failed"."SELECT count(*) as c FROM login WHERE name='" .$a."' and emailid='" .$b."'");
$result=pg_fetch_array($result);
if ($result['c']==0)
{
//	echo "INSERT INTO login(name, emailid, level) VALUES ('" .$a."','" .$b."',$c)";
	pg_query($con,"INSERT INTO login(name, emailid, level,lastsolve) VALUES ('" .$a."','" .$b."',$c,$TIS)");
}
else
{
	$result=pg_query($con,"SELECT * FROM login WHERE name='" .$a."' and emailid='" .$b."'");
	$result=pg_fetch_array($result);
	$c=$result['level'];
}
if ($TIS>=0)
echo $Qu[$c];
else
echo "Nice Try";
?>