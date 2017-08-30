<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Scholarship</title>

	<style>
		#login-controls {
			margin: 0 auto;
			border: 1px solod #cc;
			padding: 50px;
			width: 300px;
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
		.button1{
			 background-color: grey;
			 padding: 15px;
		}

	</style>
</head>
<body>
<p>
	you are logged as   <?php echo $_SESSION['username'] ?> .
	</br>
	<a href="../index.php?op=logout">Logout</a>
</p>

<div id="login-controls">
	<h2 class="animated infinite bounce">SCHOLARSHIP PAGE</h2>
	<?php if(@$_GET['err']==1){ ?>
		<div class ="error-text">Login incorrect</div>
	<?php } ?>
	<form method="POST" action="../controller/ar_controller.php">
		
		<input class="button"   type="submit" name="op" value="Load Scholarship Form" /><br>		
		<p>  
			<input class="button"  type="submit" name="op" value="Submitted Forms"><br>
		</p>
		<p> 
			<input class="button"  type="submit" name="op" value="View Scholarship Details"><br>
		</p>
		<p> 
			<input class="button"  type="submit" name="op" value="Edit Scholarship Details"><br>
		</p>
		
		
	</form>
</div>

</body>
</html>