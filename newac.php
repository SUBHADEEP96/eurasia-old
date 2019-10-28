<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>Sign In - EURESIA DECOR</title>
</head>
<body>
<div class="container"><br><br>

<h1 class="text-center text-warning">Create Your Account Here</h1>
<div class="col-lg-8 m-auto d-block">

<form action="" method="post">

<div class="form-group">
<label for="user">Username:</label>
<input type="text" name="user" class="form-control"  id="user" autocomplete="off" required>
<h5 id="usercheck"></h5>
</div>

<div class="form-group">
<label for="password">Password:</label>
<input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
<h5 id="passcheck"></h5>
</div>

<div class="form-group">
<label for="conpassword">Confirm Password:</label>
<input type="password" name="password" class="form-control" id="conpassword" autocomplete="off" required>
<h5 id="conpasscheck"></h5>
</div>

<button type="submit" class="btn btn-success" id="submitbtn">Create Account</button>

</form>

</div>
</div>
<script>
$(document).ready(function(){
	
	$('#usercheck').hide();
	$('#passcheck').hide();
	$('#conpasscheck').hide();
	
	var user_err=true;
	var pass_err=true;
	var conpass_err=true;
	
	$('#user').keyup(function(){
		user_check();
	});
	
	function user_check(){
		
		var user_val=$('#user').val();
		
		if(user_val.length==''){
			
			$('#usercheck').show();
			$('#usercheck').html("**Please fill the user name ");
			$('#usercheck').focus();
			$('#usercheck').css("color","blue");
			
			user_err = false;
			return false;
			
		}
		else{
			$('#usercheck').hide();
		}
		
		if((user_val.length < 3)||(user_val.length > 25)){
			
			$('#usercheck').show();
			$('#usercheck').html("**username length must be between 3 and 12");
			$('#usercheck').focus();
			$('#usercheck').css("color","blue");
			
			user_err = false;
			return false;
			
		}
		else{
			$('#usercheck').hide();
		}
			
		}
		
		$('#password').keyup(function(){
			
			password_check();
			
		});
		
		function password_check(){
			var pass_val=$('#password').val();
			
			if(pass_val.length==''){
				$('#passcheck').show();
				$('#passcheck').html("**Please set your password");
				$('#passcheck').focus();
				$('#passcheck').css("color","blue");
				var pass_err = false;
				return false;
			}
			else{
				
				$('#passcheck').hide();
			}
			
			if((pass_val.length < 4) || (pass_val.length >8) ){
				$('#passcheck').show();
				$('#passcheck').html("**Password length must be between 4 to 8");
				$('#passcheck').focus();
				$('#passcheck').css("color","blue");
				var pass_err = false;
				return false;
			}
			else{
				
				$('#passcheck').hide();
			}
			
		}
		
		$('#conpassword').keyup(function(){
			
			con_password();
		});
		
		function con_password(){
			var conpass_val=$('#conpassword').val();
			var pass_val=$('#password').val();
			if(pass_val != conpass_val)
			{
				$('#conpasscheck').show();
				$('#conpasscheck').html("**Password is not matching");
				$('#conpasscheck').focus();
				$('#conpasscheck').css("color","blue");
				var conpass_err = false;
				return false;
				
			}
			else{
				$('#conpasscheck').hide();
				
			}
		}
		
		$('#submitbtn').click(function(){
			
		 user_err=true;
	      pass_err=true;
	     conpass_err=true;
			
			user_check();
			password_check();
			con_password();
			
			if((user_err==true)&&(pass_err==true)&&(conpass_err==true)){
				
				return true;
			}
			
			else{
				return false;
				
			}
		});
		
	
});


</script>

</body>
</html>