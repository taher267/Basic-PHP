<?php 
if(isset($_COOKIE["comMer"])){
	header("location:profile_in.php");
}else{
	header("location:index.php");
}

 ?>
<?php require_once("connect.php"); ?>
<?php

 if(isset($_REQUEST["lMailAdr"]) && isset($_REQUEST["lPwd"])){
 	$logMail=htmlentities($_REQUEST["lMailAdr"]);
	$logPwd=htmlentities($_REQUEST["lPwd"]);

	$authQy=htmlentities(md5(sha1($logMail.$logPwd)));           //Login Mail & Pass
	$lgMatchQry="SELECT * FROM myuser WHERE mailAdr='$logMail' AND auth='$authQy'";
	$runLgMthQy=mysqli_query($connect,$lgMatchQry);
	$chackRow=mysqli_num_rows($runLgMthQy);
	if($runLgMthQy==true){
		if ($chackRow>1) {
			header("location:login.php?more_usr");
	}elseif($chackRow===1){
		setcookie("comMer",$authQy,time()+(86400*7));
		header("location:profile_in.php");
	}
	}else{
		header("location:login.php?wrong_info");
	}



	
}





 ?>