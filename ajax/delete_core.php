<?php
require_once("../connect.php");

$getId=$_REQUEST["id"];

$usrSec="DELETE FROM myuser WHERE id='$getId'"; //before id was usrName
$runDelQry=mysqli_query($connect,$usrSec);
if($runDelQry==true){
	echo "1";
}



?>