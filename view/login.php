<?php 

if(isset($_SESSION['type']) && isset($_SESSION['user'])){

	$type = $_SESSION['type'];
	
	switch ($type) {
		case 'admin':
			header("Location:../controller/admin_controller.php");
			break;

		case 'student':
			header("Location:../controller/student_controller.php");
			break;

		case 'ar':
			
			header("Location:../controller/ar_controller.php");
			break;	
		default:
			header( 'location: ../index.php' ) ;
			break;
	}
	
 }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="css/animate.css">
	<!-- google sign in -->
	
	<meta name="google-signin-client_id" content="1052956449818-4kepfekionm9s1v2918rc4nf3ubp7n1n.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<!-- end -->
	<style>
		#login-controls {
			
			margin: 0 auto;
			border: 1px solod #cc;
			padding: 50px;
			width: 300px;
		}
		#uname_check{
			width:220px;
		}

		.error-text{
			color: #f00;
		}
		#google-btn {
			margin: 0 auto;
			border: 1px solod #cc;
			padding: 5px;
			width: 300px;
			align-items: center;
			
		}
		.button {
		    background-color: #4C0050; /* Purple */
		    border: none;
		    color: white;
		    padding: 5px 30px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		}

	</style>
	<script type="text/javascript" src = "js/login.js">
	
	</script>
</head>
<body onload="check()">

<div id="login-controls">
	<h2 class="">Login</h2>
	<?php if(@$_GET['err']==1){ ?>
		<div class ="error-text">Login incorrect</div>
	<?php } ?>
	<?php if(@$_GET['err']==2){ ?>
		<div class ="error-text">Password incorrect</div>
	<?php } ?>
	<form method="POST" action="../index.php">
		<table>
		
		<p>Username: 
		<th>
		<input  type="text" name="user" id="user_id" placeholder="exmaple@email.com">
		</th>
		<th>
		<div id = "uname_check"></div>
		</th>
		</table>
		</p>
		<p>Password: <br><br>
		<input type="Password" name="pass" placeholder="Password" required>
		</p>
		</br>
		<input class="button" type="submit" name="op" value="login" />
	     <a href="forgot_password.php">Forgot Password</a>
		
	</form>
</div>

    <div id = google-btn>
		<div class="g-signin2" data-onsuccess="onSignIn"></div>
	</div>

	


</body>
</html>