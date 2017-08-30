
<!DOCTYPE html>
<html>
<head>
	<title>Modify User Now</title>
	<style>
		#modify{
			margin: 0 auto;
			border: 1px solod #cc;
			padding: 50px;
			width: 300px;
		}
		.error-text{
			color: #f00;
		}
		.button {
		    background-color: #4C0050; /* Purple */
		    border: none;
		    color: white;
		    padding: 10px 20px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		}
		

	</style>
</head>
<body>


<div id="modify">
<h2 class="animated infinite bounce">Forgot Password</h2>	
 <form class="modify" action="admin_controller.php">

 	<p>Username: <br>
		<input  type="text" name="user" >
		</p>
	<p>New Password: <br>
		<input  type="password" name="type" >
		</p>
	<p>Confirm Password: <br>
		<input  type="password" name="type" >
		</p>	
	<p>
		<label for="">&nbsp;</label>
		<button class="button" type="op" name="submit">Change</button>		
		</p>		
 </form>
</div>

</body>
</html>

