<?php 
session_start();
 ?>
<?php 
$student_id='';
$fname='';
$lname='';
$area='';
if(isset($_SESSION['details'])){

foreach ($_SESSION['details'] as $user) {
        
		$student_id=$user['s_id'];
        $fname=$user['first_name'];
        $lname=$user['last_name'];
        $area=$user['area'];
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
		#login-controls {
			margin: 0 auto;
			border: 1px solod #cc;
			padding: 50px;
			width: 300px;
			float: right;
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

<div id="modify">
<h2 class="animated infinite bounce">User Details</h2>	
 <form class="modify" action="admin_controller.php">

 	<p>Student ID: <br>
		<input  type="text" name="id" <?php echo 'value="' . $student_id . '"'; ?> >
		</p>
	<p>First Name: <br>
		<input  type="text" name="firstname" <?php echo 'value="' . $fname . '"'; ?>>
		</p>
	<p>Last Name: <br>
		<input  type="text" name="lastname" <?php echo 'value="' . $lname . '"'; ?>>
		</p>
	<p>Area: <br>
		<input  type="text" name="area" <?php echo 'value="' . $area . '"'; ?>>
		</p>			
	
	<p>
		<label for="">&nbsp;</label>
		<button class="button" type="op" name="submit">Save</button>
		<button class="button" type="op" name="submit">Delete</button>
		</p>		
 </form>
</div>

</body>
</html>

