<?php require_once("header.php") ?>
<div class="container">
	<div class="row userProfile">
		
				
		<div class="col-md-3"></div>
		<div id="profils">

		<?php 
			
			if(isset($_REQUEST["approved"])){
				$getID=$_REQUEST["approved"];
			$usrInfo="SELECT * FROM myuser WHERE accID='$getID'";
			$runProQry=mysqli_query($connect,$usrInfo);
			if($runProQry==true){
				while ($proData=mysqli_fetch_array($runProQry)) { ?>			
					<div class="col-md-6">
						<div class="col-md-12">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<?php 
									if (isset($_COOKIE["currentUser"])) {
										?>


									<h1><?php echo $proData["usrName"]; ?></h1>
										<?php

									 } ?>
								</div>
								<div class="col-md-4"></div>
							</div>

						<div class="profile_row col-md-12">
							<center>
								<img width="250px" src="avatar/<?php echo $proData["avatar"]; ?>">
							</center>
						</div>
						<div class="profile_info">
							
							<table id="profile_table" border="1px" class="col-md-12" width="100%">
								<tbody class="col-md-12">
									<tr>
										<td><strong>Account Name</strong></td>
										<td><?php echo $proData["usrName"]; ?></td>
									</tr>
									<tr>
										<td><strong>Genter</strong></td>
										<td></td>
									</tr>
									<tr>
										<td><strong>Account ID</strong></td>
										<td><?php echo $proData["accID"]; ?></td>
									</tr>
									<tr>
										<td><strong>Email</strong></td>
										<td></td>
									</tr>
									<tr>
										<td><strong>Phone No.</strong></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

<?php }}}?>


					<div class="col-md-3"></div>
				</div>
	</div>
</div>

	<?php require_once("footer.php") ?>	
 