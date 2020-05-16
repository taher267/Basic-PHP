<?php 
if(isset($_COOKIE["comMer"])){
	header("location:profile_in.php");
}

 ?>
<?php
if(isset($_COOKIE["currentUser"])){
	header("location:profile_in.php");
}?>
<?php require_once("header.php"); ?>

<div class="container">
	<div class="row signForm">
		<h2>LOGIN FORM</h2>
		<form action="login_core.php" method="POST">
			<input type="email" placeholder="Mail Address" name="lMailAdr">
			<input type="password" placeholder="Password" name="lPwd">
			<input type="submit" value="LOG IN">
			<?php 
			if(isset($_REQUEST["wrong_info"])){ ?>
				<span id="log_wrong_mg">Mail Address or Password Incorrect</span>
			<?php 
				}elseif(isset($_REQUEST["more_usr"])){
					echo '<span id="log_wrong_mg">Contact with Support!</span>';
				}



			?>


			 
		</form>
	</div>
</div>































<?php require_once("footer.php") ?>
