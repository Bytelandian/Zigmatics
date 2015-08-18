<html>
<head>
</head>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
include 'config.php';
$result=mysqli_query($con,"SELECT count(*) as c FROM `login`");
$result=mysqli_fetch_array($result);

$n=$result['c'];

$result=mysqli_query($con,"SELECT * FROM `login` ORDER by `LeVeL` DESC , `LaStSoLvE` ASC") or die("Failed");
//$result=mysqli_fetch_array($result);
//style="font-family: 'Trebuchet MS', sans-serif;font-size: 16px;font-weight: bold;line-height: 1.4em;font-style: normal;"

?>
<table  class="table1"width=100%>
<tr>
<th width="20%">Rank</th>
<th width="50%"> Name</th>
<th width="20%">Level</th>
<?php
for ($x=1; $x<=$n; $x++) {
	$results=mysqli_fetch_array($result);
	echo "<tr>";
	echo "<td>".$x."</td>";
	echo "<td>".$results['NaMe']."</td>";
	echo "<td>".$results['LeVeL']."</td>";
	echo "</tr>";
} 
?>
</table>
</body>
</html>