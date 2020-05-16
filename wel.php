<?php require_once("header.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-6">
			<?php 
				if (isset($_REQUEST["Alhamdulillah"])) { ?>
				
				<h2 style="color:green; line-height: 1500%"> <?php echo "WELCOME HERE! SIGN UP COMPLITED!"; ?></h2>


			 <?php }elseif (isset($_REQUEST["dataexised"])) {?>
			 	<center><h2 style="color:red; line-height: 1500%"> <?php echo "WE ARE SORRY! PLEASE TRY ANOTHER ONE!" ?> <?php echo'<a href="signup.php" style="text-decoration:none;">||SIGNUP</a>'; ?> </h2></center>
			 	
			<?php  } ?>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
	
<?php require_once("footer.php"); ?>