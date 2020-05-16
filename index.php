
	<?php require_once("header.php") ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table border="1px">
					<thead>
						<tr>
							<th>S.N</th>
							<th>ID</th>
							<th>Account ID</th>
							<th>Fast & Last Name</th>
							<th>Password</th>
							<th>Avatar</th>
							<th>Actions</th>
					</thead>
					<?php require_once("connect.php");
			
					$srcQuary="SELECT * FROM myuser";
					$runQry=mysqli_query($connect,$srcQuary);
					
					$slCount=01;
					if($runQry==true){
						while ($myData=mysqli_fetch_array($runQry)) { ?>
							<tbody>
								<tr>
									<td><?php echo sprintf('%02d', $slCount); $slCount++  ?></td>
									<td><?php echo $myData["id"]; ?></td>
									<td><?php echo $myData["accID"]; ?></td>
									<td><?php echo $myData["fName"]." ".$myData["lName"]; ?></td>
									<td><?php echo $myData["pass"]; ?></td>
									<td><img src="avatar/<?php echo $myData["avatar"]; ?>"></td>

									<td> <a href="edit.php?edit_id=<?php echo $myData["id"];?>">Edit</a> || <a onclick="return confirm('Are You Sure?')"  href="delete_core.php?edit_id=<?php echo $myData["id"];?>" id="deleteId" data-mycata="Bismillah">Delete</a>  </td>
								</tr>
							</tbody>	
					<?php }} ?>
				</table>
			</div>
			<div class="col-md-2"></div>

		</div>
	</div>
	<?php require_once("footer.php") ?>

