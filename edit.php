<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
</head>
<body>
	<?php
     $chkCon=require_once("connect.php");
	if(isset($_REQUEST["edit_id"])){
    	$getId=$_REQUEST["edit_id"];
    	$usrInfo="SELECT * FROM myuser WHERE id='$getId'";
    	$runSltQry=mysqli_query($connect,$usrInfo);
    	if($runSltQry==true){
    		while($myData=mysqli_fetch_array($runSltQry)){ ?>
    		<form action="edit_core.php" method="POST">
				<input type="text" name="upUsrNam" value=" <?php echo $myData["usrName"]; ?> ">
				<input type="text" name="upUrPwd" value=" <?php echo $myData["pass"]; ?> ">
				<input type="hidden" name="editing" value=" <?php echo $getId; ?> ">
				<input type="submit" name="uptBtn" value="Update">
			</form>
    		
    <?php }}}?>


	
</body>
</html>