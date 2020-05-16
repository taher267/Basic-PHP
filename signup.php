<?php 
if(isset($_COOKIE["comMer"])){
	header("location:profile_in.php");
}

 ?>
<?php require_once("header.php"); ?>
	<div class="container">
		<div class="row signForm">
			<h2>SIGN UP FORM</h2>
			<form action="signup_core.php" method="POST">
				<input type="text" name="sFName" placeholder="Fast Name">
				<input type="text" name="sLName" placeholder="Last Name">
				<input type="email" name="sMailAdr" placeholder="Mail Address">
				<input type="password" name="sPwd" placeholder="Password">
				<input type="submit" value="SIGN UP">
				<?php 
				if(isset($_REQUEST["mExist"])){
					
					echo "<br/>".'<span id="log_wrong_mg">Mail Already Exist!</span>';
				}elseif(isset($_REQUEST["more_usr"])){
								
								echo "<br/>".'<span id="log_wrong_mg">Contact with Support!</span>';
							}

				 ?>
			</form>
		</div>
	</div>

<?php require_once("footer.php"); ?>



