<?php 


	   
	    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
	        /* 
	           Up to you which header to send, some prefer 404 even if 
	           the files does exist for security
	        */
	        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

	        /* choose the appropriate page to redirect users */
	        die( header( 'location: /error.php' ) );

	    }

		@session_start();
		if(!isset($_SESSION['user'])){
			header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Acadamic Registar</title>

	<style>
		#login-controls {
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
	<h2 class="animated infinite bounce">Acadamic Registar Page</h2>
	<?php if(@$_GET['err']==1){ ?>
		<div class ="error-text">Login incorrect</div>
	<?php } ?>
	<form method="POST" action="../controller/ar_controller.php">
		
		<input class="button"   type="submit" name="op" value="Scholarships" /><br>		
		<p>  
			<input class="button"  type="submit" name="op" value="TimeTable"><br>
		</p>
		<p> 
			<input class="button"  type="submit" name="op" value="Hostal Facility"><br>
		</p>
		<p> 
			<input class="button"  type="submit" name="op" value="Season Forms"><br>
		</p>
		<p> 
			<input class="button"  type="submit" name="op" value="Manage Students"><br>
		</p>
		
	</form>
</div>

</body>
</html>