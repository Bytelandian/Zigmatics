<?php
include 'config.php';
include 'times.php';
$a=$_GET['name'];
$b=$_GET['email'];
$c=0;
$first=0;
//echo $a;
//echo "SELECT count(*) as c FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'";
$result=mysqli_query($con,"SELECT count(*) as c FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'") or die("Failed"."SELECT count(*) as c FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'");
$result=mysqli_fetch_array($result);
if ($result['c']==0)
{
//	echo "INSERT INTO `login`(`NaMe`, `EmAiL iD`, `LeVeL`) VALUES ('" .$a."','" .$b."',$c)";
	mysqli_query($con,"INSERT INTO `login`(`NaMe`, `EmAiL iD`, `LeVeL`,`LaStSoLvE`) VALUES ('" .$a."','" .$b."',$c,$TIS)");
	$first=1;
}
else
{
	$result=mysqli_query($con,"SELECT * FROM `login` WHERE `NaMe`='" .$a."' and `EmAiL iD`='" .$b."'");
	$result=mysqli_fetch_array($result);
	$c=$result['LeVeL'];
}
$result=mysqli_query($con,"SELECT count(*) as c FROM `login`");
$result=mysqli_fetch_array($result);
$n=$result['c'];
$result=mysqli_query($con,"SELECT * FROM `login` ORDER by `LeVeL` DESC , `LaStSoLvE` ASC") or die("Failed");
for ($x=1; $x<=$n; $x++) {
	$results=mysqli_fetch_array($result);
	if ($results['NaMe']==$a and $results['EmAiL iD']==$b)
	{
		$rank=$x;
	}
}

echo json_encode(array("a" => $c , "b" => $rank,"c" =>$first));
return $c;
?>