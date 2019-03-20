<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_new.css">
	<title></title>
</head>
<body>
<h2 align="center" style="font-size: 58px;" > <i> Users </i></h2>
</body>
</html>


<?php

//if(isset($_POST['status']))
//{
//$eid = $_POST['eid'];
$mysqli = new mysqli('localhost','root','','cb');
$result = $mysqli->query("SELECT * FROM users;");

	

//if($result->num_rows != 0){
 echo "<table > 
 
<tr>
<th>Username</th>
<th>Email-ID</th>
</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$rows['username']."</td>";
		echo "<td>".$rows['email']."</td>";
		
		echo "</tr>";
		echo "<br />";
		//echo "<p>ID: $cid <br />Name: $cname <br /> City: $city<br />Commission: $commission<br />Salesman Id: $sid </p>";
	}
	echo "</table>";
//}

//}
//else{
	//echo "No Rows Selected";
//}
?>

