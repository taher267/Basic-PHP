<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PhP Tutorial</title>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	
</head>
<body>
	<div id="delMg" style="color: red; font-size: 18px;"></div>
	<table border="1px">
		<thead>
			<tr>
				<th>S.N</th>
				<th>ID</th>
				<th>User Name</th>
				<th>Password</th>
				<th>Avatar</th>
				<th>Actions</th>
		</thead>
		<?php 

			require_once("../connect.php");
		
			$srcQuary="SELECT * FROM myuser";
			$runQry=mysqli_query($connect,$srcQuary);
			
			$slCount=01;
			if($runQry==true){
				while ($myData=mysqli_fetch_array($runQry)) { ?>
					<tbody id="tbdy<?php echo $myData["id"];?> ">
						<tr>
							<td><?php echo sprintf('%02d', $slCount); $slCount++  ?></td>
							<td><?php echo $myData["id"]; ?></td>
							<td><?php echo $myData["usrName"]; ?></td>
							<td><?php echo $myData["pass"]; ?></td>
							<td><img width="60px" src="../avatar/<?php echo $myData["avatar"]; ?>"></td>

							<td> <a href="edit.php?edit_id=<?php echo $myData["id"];?>">Edit</a> || <a href="" onclick=" return confirm('Are You Sure?');" id="deleteID" data-mydata="<?php echo $myData["id"];?>">Delete</a>  </td>
						</tr>
					</tbody>	
		<?php	}
			}


		 ?>
		
		<a href="signup.php">Sign UP</a>
		
	</table>




	<script type="text/javascript">
		$(document).ready(function(){

			$("a#deleteID").click(function(){
				var myHrefData= $(this).data("mydata");
				$.post("delete_core.php",{id : myHrefData},function(returnData){
					if (returnData==="1") {
						
						$("#delMg").html("The user has been deleted!");
					};
					
				});
				//var getRow="tbdy"+myHrefData;
				//$("getRow").remove;
				$("a#deleteID").parent().parent().parent().remove;
				//$(this).parent().parent().parent().remove;


			});
		});


	</script>
</body>
</html>