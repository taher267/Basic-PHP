<?php
require_once("../connect.php");
if(isset($_REQUEST["sFName"]) && isset($_REQUEST["sLName"]) && isset($_REQUEST["sMailAdr"]) && isset($_REQUEST["sPwd"]) ){
	$snF_name=$_REQUEST["sFName"];
	$snL_name=$_REQUEST["sLName"];
	$snMail_Adr=$_REQUEST["sMailAdr"];
	$snPwd=md5(sha1($_REQUEST["sPwd"]));
	
	//$snPwd=$_REQUEST["sUsrPwd"];
	// cheack existing user name
	$autoAcc="ID-".rand(0,99999);
	$ckUsrExist="SELECT * FROM myuser WHERE mailAdr='$snMail_Adr'"; // Privious User Name Chack
	$runNamExistQy=mysqli_query($connect,$ckUsrExist);				// Connect for mySQL Database
	$mailRowCont=mysqli_num_rows($runNamExistQy);      // Row coun. Is there any User Name row in mySQL database
	// cheack existing password
	// $ckPwdExist="SELECT * FROM myuser WHERE pass= '$snPwd'";	// Privious password Chack
	// $runPwdExstQy=mysqli_query($connect,$ckPwdExist);			// Connect for mySQL Database
	//  $pwdRowCont=mysqli_num_rows($runPwdExstQy); // Row coun. Is there any password row in mySQL database
	
	
	
	if($mailRowCont !=0){		
		echo"Data EXisted!"; //header("location:wel.php?dataexised");
	}elseif($mailRowCont==0){
		$newUrSign="INSERT INTO myuser (fName, lName, mailAdr, pass,accID) VALUES ('$snF_name','$snL_name','$snMail_Adr','$snPwd','$autoAcc')"; // For Create New user
		$newUsrSQry=mysqli_query($connect,$newUrSign);
		if($newUsrSQry==true){
		echo "Data inserted!";
			
		}else{echo "Not inserted!";}
		
		
	}
	}


// $newUrSec="INSERT INTO myuser (usrName, pass) VALUES ('$snUsrName','$snPwd')";
// 	$newUsrQry=mysqli_query($connect,$newUrSec);




?>