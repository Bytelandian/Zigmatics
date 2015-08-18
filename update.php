<?php
include 'config.php';
include'questions.php';
include 'times.php';
$a=$_GET['name'];
$b=$_GET['email'];
$ans=$_GET['ans'];
$c=0;
$result=mysqli_query($con,"SELECT count(*) as c FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'") or die("Failed"."SELECT count(*) as c FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'");
$result=mysqli_fetch_array($result);
if ($result['c']==0)
{
//	echo "INSERT INTO `login`(`NaMe`, `EmAiL iD`, `LeVeL`) VALUES ('" .$a."','" .$b."',$c)";
	mysqli_query($con,"INSERT INTO `login`(`NaMe`, `EmAiL iD`, `LeVeL`,`LaStSoLvE`) VALUES ( '" .$a."' , '" .$b."' , $c ,$TIS )");
}
else
{
	$result=mysqli_query($con,"SELECT * FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'");
	$result=mysqli_fetch_array($result);
	$c=$result['LeVeL'];
}
/////////    REMEMBER TO DELETE CHARACTERS FROM ANS
if (!preg_match('/^[0-9-]*$/',$ans))
{
echo "Try Again";
}
elseif ($ans==$AnS[$c])
{
	echo $c;
	mysqli_query($con,"UPDATE `login` SET `LeVeL`=$c+1 ,`LaStSoLvE`=$TIS WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'")or die("Failed");
}
else 
{
	echo "Try Again";
}
?>