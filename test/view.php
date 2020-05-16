
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view pro</title>
</head>
<body>
<?php
require_once("connect.php");
		$getRecSign="SELECT * FROM myuser";
		$recSignQry=mysqli_query($connect,$getRecSign);
		if($recSignQry==true){
			while ($myData=mysqli_fetch_array($recSignQry)) {
			echo $myData["usrName"];
		}}
		

		// $srcQuary="SELECT * FROM myuser";
		// $recSignQry=mysqli_query($connect,$srcQuary);
		// if($recSignQry==true){
		// 	while ($myData=mysqli_fetch_array($recSignQry)) { 
		// 	echo $myData["usrName"]; 
		// }}
	





?>	
</body>
</html>