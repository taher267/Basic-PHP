<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
</head>
<body>
	<form onsubmit="return false">
		<input type="text" id="usrName" name="userName">
		<input type="password" id="usrPwd" name="userPwd">
		<input type="submit" id="submitBtn" value="Login">
		<input type="readonly" id="readonlyid">
	</form>
	<div id="spinner">
		
	</div>
<script>
	$(document).ready(function(){
		
		$("#submitBtn").on("click",function(){
			var signName=$("input#usrName").val();
		var signPwd=$("input#usrPwd").val();

		$("#spinner").html('<img src="spinner.gif" alt="" />');
		setTimeout(function(){
			$.post("ajax_core.php",{uName:signName, uPwd:signPwd},function(mydata){
				$("#readonlyid").val("some");
				$("#spinner img").remove();
		});
		},2000);

		})
	});
</script>


</body>
</html>