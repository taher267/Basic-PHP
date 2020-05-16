<?php 
if (!isset($_COOKIE["comMer"])) {
	header("location:index.php");
}

 ?>
<?php require_once("header.php") ?>
<div class="container">
	<div class="row userProfile">		
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>
				<?php 
					if(isset($_COOKIE["comMer"])){
						$comMerTargat=$_COOKIE["comMer"];
						$curUsrQry="SELECT * FROM myuser WHERE auth='$comMerTargat'";
						$runCurUsrQy=mysqli_query($connect,$curUsrQry);
						if($runCurUsrQy==true){
							while($myDetail=mysqli_fetch_array($runCurUsrQy)){
								echo $myDetail["fName"]." ".$myDetail["lName"];
								echo "</h1>";
								$avatarImg=$myDetail["avatar"];
								echo "<img class='avatar_img' src='avatar/$avatarImg' />";
								?>
							<p>This is Freelancer <?php echo $myDetail["mailAdr"]; ?> 's profile</p>
							<?php }}}?> 
					

			
			
				<div class="col-md-3"></div>
		</div>
	</div>
</div>

	<?php require_once("footer.php") ?>	
 