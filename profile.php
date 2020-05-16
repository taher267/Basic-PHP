<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Profile</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


		<?php 
			require_once("connect.php");
			if(isset($_REQUEST["pro_id"])){
				$getID=$_REQUEST["pro_id"];
			$usrInfo="SELECT * FROM myuser WHERE accID='$getID'";
			$runProQry=mysqli_query($connect,$usrInfo);
			if($runProQry==true){
				while ($proData=mysqli_fetch_array($runProQry)) { ?>
				<table border="1px">
					<thead>
						<tr>
							<th>id</th>
							<th>Fast</th>
							<th>Last</th>
							<th>Avatar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <?php echo $proData["id"]; ?> </td>
							<td><?php echo $proData["usrName"]; ?> </td>
							<td> <?php echo $proData["pass"]; ?></td>
							<td><img src="avatar/<?php echo $proData["avatar"]; ?>"></td>
						</tr>
					</tbody>	
				</table>
				<?php }}}?>	
 	

</body>
</html>