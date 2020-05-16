<?php 
if(isset($_COOKIE["comMer"])){
	header("location:profile_in.php");
}else{
	header("location:index.php");
}

 ?>
<?php
require_once("connect.php");
if(isset($_REQUEST["sFName"]) && isset($_REQUEST["sLName"]) && isset($_REQUEST["sMailAdr"]) && isset($_REQUEST["sPwd"])){
	$snF_Name=htmlentities($_REQUEST["sFName"]);
	$snLst_Name=htmlentities($_REQUEST["sLName"]);
	$snMail_Adr=htmlentities($_REQUEST["sMailAdr"]);
	$sgnPwd=htmlentities($_REQUEST["sPwd"]);
	$acuntID="ID-".rand(0,99999);
	$autoAuth=htmlentities(md5(sha1($snMail_Adr.$sgnPwd))); //mail and pwd combind

	// // cheack existing Mail Addr
	$ckMailExist="SELECT * FROM myuser WHERE mailAdr= '$snMail_Adr' AND auth='$autoAuth'"; // Privious User Name Chack
	$runMilExistQy=mysqli_query($connect,$ckMailExist);				// Connect for mySQL Database
	$mailRowCont=mysqli_num_rows($runMilExistQy);      // Row coun. Is there any User Name row in mySQL database

	if($mailRowCont===1){
		header("location:signup.php?mExist");
	}
	elseif($mailRowCont>1){
		header("location:signup.php?more_usr");
	}
	elseif($mailRowCont===0){
	$newUrSign="INSERT INTO myuser (fName, lName, mailAdr, pass, accID,auth) VALUES ('$snF_Name','$snLst_Name','$snMail_Adr','$sgnPwd','$acuntID','$autoAuth')";
	$signQry=mysqli_query($connect,$newUrSign);
	if($signQry==true){
		header("location:wel.php?Alhamdulillah");
	}
	

		}
}

?>
