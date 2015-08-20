<?php
include 'config.php';
include'questions.php';
include 'times.php';
$a=$_GET['name'];
$b=$_GET['email'];
$ans=$_GET['ans'];
$c=0;
$result=pg_query($con,"SELECT count(*) as c FROM login WHERE name='" .$a."' and emailid='" .$b."'") or die("Failed"."SELECT count(*) as c FROM login WHERE name='" .$a."' and emailid='" .$b."'");
$result=pg_fetch_array($result);
if ($result['c']==0)
{
//	echo "INSERT INTO login(name, emailid, level) VALUES ('" .$a."','" .$b."',$c)";
	pg_query($con,"INSERT INTO login(name, emailid, level,lastsolve) VALUES ( '" .$a."' , '" .$b."' , $c ,$TIS )");
}
else
{
	$result=pg_query($con,"SELECT * FROM login WHERE name='" .$a."' and emailid='" .$b."'");
	$result=pg_fetch_array($result);
	$c=$result['level'];
}
/////////    REMEMBER TO DELETE CHARACTERS FROM ANS
if (!preg_match('/^[0-9-]*$/',$ans))
{
echo "Try Again";
}
elseif ($ans==$AnS[$c])
{
	echo $c;
	pg_query($con,"UPDATE login SET level=$c+1 ,lastsolve=$TIS WHERE name='" .$a."' and emailid='" .$b."'")or die("Failed");
}
else 
{
	echo "Try Again";
}
?>