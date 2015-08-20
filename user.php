<?php
include 'config.php';
include 'times.php';
$a=$_GET['name'];
$b=$_GET['email'];
$c=0;
$first=0;
//echo $a;
//echo "SELECT count(*) as c FROM login WHERE name='" .$a."' and emailid='" .$b."'";
$result=pg_query($con,"SELECT count(*) as c FROM login WHERE name='" .$a."' and emailid='" .$b."'") or die("Failed"."SELECT count(*) as c FROM login WHERE name='" .$a."' and emailid='" .$b."'");
$result=pg_fetch_array($result);
if ($result['c']==0)
{
//	echo "INSERT INTO login(name, emailid, level) VALUES ('" .$a."','" .$b."',$c)";
	pg_query($con,"INSERT INTO login(name, emailid, level,lastsolve) VALUES ('" .$a."','" .$b."',$c,$TIS)");
	$first=1;
}
else
{
	$result=pg_query($con,"SELECT * FROM login WHERE name='" .$a."' and emailid='" .$b."'");
	$result=pg_fetch_array($result);
	$c=$result['level'];
}
$result=pg_query($con,"SELECT count(*) as c FROM login");
$result=pg_fetch_array($result);
$n=$result['c'];
$result=pg_query($con,"SELECT * FROM login ORDER by level DESC , lastsolve ASC") or die("Failed");
for ($x=1; $x<=$n; $x++) {
	$results=pg_fetch_array($result);
	if ($results['name']==$a and $results['emailid']==$b)
	{
		$rank=$x;
	}
}

echo json_encode(array("a" => $c , "b" => $rank,"c" =>$first));
return $c;
?>