<?php
require_once("connect.php");

$getId=$_REQUEST["edit_id"];

$usrSec="DELETE FROM myuser WHERE id='$getId'"; //before id was usrName
$runDelQry=mysqli_query($connect,$usrSec);
if($runDelQry==true){
	header("location:index.php?deleted");
}



?>