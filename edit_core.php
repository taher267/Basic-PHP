<?php 
	require_once("connect.php");
	if(isset($_REQUEST["uptBtn"])){
		$upUsrNm=$_REQUEST["upUsrNam"];
		$upPass=md5(sha1($_REQUEST["upUrPwd"]));
		$getID=$_REQUEST["editing"];
		$upInfo="UPDATE myuser SET usrName='$upUsrNm', pass='$upPass' WHERE id='$getID'";
		$runUpQry=mysqli_query($connect,$upInfo);
		if($runUpQry==true){
			header("location:index.php?Updated");
		}else{
			header("location:index.php?hasn't_updated");
		}
	}


 ?>