<?php 
session_start();
 ?>
<?php 
$uname='';
$data='';
$type='';
if(isset($_SESSION['details'])){

foreach ($_SESSION['details'] as $user) {
        
		$uname=$user['username'];
        $type=$user['type'];
        unset($_SESSION['value']);
    }
}

 ?>
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
<p>
	you are logged as   <?php echo $_SESSION['username'] ?> .
	</br>
	<a href="../index.php?op=logout">Logout</a>
</p>

<div id="modify">
<h2 class="animated infinite bounce">User Details</h2>	
 <form class="modify" method="POST" action="../controller/admin_controller.php">

 	<p>Username: <br>
		<input  type="text" name="uname" <?php echo 'value="' . $uname . '"'; ?> disabled>
		<input  type="hidden" name="uname">
		</p>
	<p>Type: <br>
		<input  type="text" name="type" <?php echo 'value="' . $type . '"'; ?>>
		</p>	
	<p>Password: <br>
		<span>******</span> | <a href="change_password.php?user_id=<?php echo $user_id; ?>">Change Password</a>
		</p>
	<p>
		<input class="button"  type="submit" name="op" value="Save User Details">
				
		</p>		
 </form>
</div>

</body>
</html>

