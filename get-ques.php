<?php
include 'config.php';
include'questions.php';
include 'times.php';
$a=$_GET['name'];
$b=$_GET['email'];
$c=0;
$result=mysqli_query($con,"SELECT count(*) as c FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'") or die("Failed"."SELECT count(*) as c FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'");
$result=mysqli_fetch_array($result);
if ($result['c']==0)
{
//	echo "INSERT INTO `login`(`NaMe`, `EmAiL iD`, `LeVeL`) VALUES ('" .$a."','" .$b."',$c)";
	mysqli_query($con,"INSERT INTO `login`(`NaMe`, `EmAiL iD`, `LeVeL`,`LaStSoLvE`) VALUES ('" .$a."','" .$b."',$c,$TIS)");
}
else
{
	$result=mysqli_query($con,"SELECT * FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'");
	$result=mysqli_fetch_array($result);
	$c=$result['LeVeL'];
}
if ($TIS>=0)
echo $Qu[$c];
else
echo "Nice Try";
?>