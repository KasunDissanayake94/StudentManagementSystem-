<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
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
<p>
	you are logged as   <?php echo $_SESSION['username'] ?> 
	</br>
	<a href="../index.php?op=logout">Logout</a>
</p>

<div id="modify">
	<h2 class="animated infinite bounce">Delete User Details</h2>
	<?php if(@$_GET['err']==1){ ?>
		<div class ="error-text">Login incorrect</div>
	<?php } ?>
	
	<form method="POST" action="../controller/admin_controller.php">
		<p>Username: <br>
		<input  type="text" name="user">
		</p>
		
		<input class="button"  type="submit" name="op" value="Search" /><br>		
		
		
	</form>
</div>

</body>
</html>

