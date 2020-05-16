<?php
require_once("connect.php");
if(isset($_REQUEST["sUerName"]) && isset($_REQUEST["sUsrPwd"]) && isset($_FILES["upPic"])){
	$snUsrName=$_REQUEST["sUerName"];
	$avatarName=$_FILES["upPic"]["name"];
	$loation="avatar/";
	$tempName=$_FILES["upPic"]["tmp_name"];
	$nameForDB=uniqid().".jpg";
	$snPwd=md5(sha1($_REQUEST["sUsrPwd"]));
	$acuntID="ID-".rand(0,99999);
	// cheack existing user name
	$ckUsrExist="SELECT * FROM myuser WHERE usrName= '$snUsrName'"; // Privious User Name Chack
	$runNamExistQy=mysqli_query($connect,$ckUsrExist);				// Connect for mySQL Database
	$mailRowCont=mysqli_num_rows($runNamExistQy);      // Row coun. Is there any User Name row in mySQL database
	// cheack existing password
	$ckPwdExist="SELECT * FROM myuser WHERE pass= '$snPwd'";	// Privious password Chack
	$runPwdExstQy=mysqli_query($connect,$ckPwdExist);			// Connect for mySQL Database
	 $pwdRowCont=mysqli_num_rows($runPwdExstQy); // Row coun. Is there any password row in mySQL database
	 // cheack existing password
	$ckAccExist="SELECT * FROM myuser WHERE pass= '$acuntID'";	// Privious password Chack
	$runAccExstQy=mysqli_query($connect,$ckAccExist);			// Connect for mySQL Database
	 $accRowCont=mysqli_num_rows($runAccExstQy); // Row coun. Is there any password row in mySQL database


	if($mailRowCont !=0 || $pwdRowCont !=0 || $accRowCont !=0){		
		header("location:wel.php?dataexised");
	}elseif($mailRowCont===0 && $pwdRowCont===0 && $accRowCont ===0){
		$picUploaded=move_uploaded_file($tempName, $loation."$nameForDB");
		$newUrSign="INSERT INTO myuser (accID,usrName,pass,avatar) VALUES ('$acuntID','$snUsrName','$snPwd','$nameForDB')"; // For Create New user
		$runConfQy=mysqli_query($connect,$newUrSign);
		if($runConfQy===true && $picUploaded===true){
			$newUsrInfo="SELECT * FROM myuser WHERE usrName='$snUsrName'";
		$nwUrQry=mysqli_query($connect,$newUsrInfo);
		if($nwUrQry==true){
			while ($myPro=mysqli_fetch_array($nwUrQry)) {
			$newID= $myPro["accID"];
			header("location:login.php?pro_id=$newID");
		}
		}
		}	
		}
		}



