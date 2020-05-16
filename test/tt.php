<?php
require_once("connect.php");
if(isset($_REQUEST["sUerName"]) && isset($_FILES["upPic"]) && isset($_REQUEST["sUsrPwd"])){
	$snUsrName=$_REQUEST["sUerName"];
	$snPwd=$_REQUEST["sUsrPwd"];	
	$avatarName=$_FILES["upPic"]["name"];
	$temp_name=$_FILES["upPic"]["tmp_name"];
	$loks="avatar/";

	move_uploaded_file($temp_name,$loks."$avatarName");
	$newUrSign="INSERT INTO myuser (usrName, pass,avatar) VALUES ('$snUsrName','$snPwd','$avatarName')";
	$newUsrQry=mysqli_query($connect,$newUrSign);
	
	
			if($newUsrQry==true){
				$getRecSign="SELECT * FROM myuser WHERE usrName='$snUsrName'";
				$recSignQry=mysqli_query($connect,$getRecSign);
			if($recSignQry==true){
			
			while ($myData=mysqli_fetch_array($recSignQry)) {
				$getId= $myData["id"];
				header("location:profile.php?pro_id=$getId");
			}
			}
			}
			}
				
