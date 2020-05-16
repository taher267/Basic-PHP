<?php require_once("connect.php"); ?>
<?php

 if(isset($_COOKIE["comMer"])){
		setcookie("comMer","",time()-(86400*8));
		header("location:login.php");
	}else{
	header("location:index.php");
}


 ?>