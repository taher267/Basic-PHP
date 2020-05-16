<?php
	$dbUsr="Taher";
	$dbPwd="1234";
	$usrNameAjx=$_REQUEST["uName"];
	$usrPwdAjx=$_REQUEST["uPwd"];
	if ($dbUsr==$usrNameAjx && $dbPwd==$dbPwd) {
		echo "LogedIn";
	}else{
		echo "User name or Password Wrong!";
	}
?>