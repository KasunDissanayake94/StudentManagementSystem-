<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Modify User</title>
	<link rel="stylesheet" type="text/css" href="../view/css/style1.css">
	<script type="text/javascript" src="../view/js/main.js"></script>
	<style>
		#modify{
			margin: 0 auto;
			border: 1px solod #cc;
			padding: 50px;
			margin-top: 60px;
			width: 600px;
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

	<div class="header" id="header">
			<div id="btn" class="toggle-btn" onclick="togglesidebar()">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<span id="logout"><a href="">log out</a></span>
			<span id="head_name"><h3>UCSC Student Management System</h3></span>
			<span id="user_status"><p style="float: right;padding: 15px;font-weight: bold;font-size: 15px;text-decoration: none;">You logged as <?php echo $_SESSION['username'] ?></p></span>
			
	</div>


	<div class="side-nav" id="sidebar">

		<nav>
			<div class="profile_info">
					<div class="pic"><img src="../view/images/icon.png"></div>
					<div class="name">Admin</div>
			</div>
			<ul>
				<li>
					<a href="lecturer.php">
						<span  class="active_page">Profile</span>
					</a>
				</li>

				<li>
					<a href="../controller/admin_controller.php?op=Add User">
						<span>Add User</span>
					</a>
				</li>

				<li>
					<a href="../controller/admin_controller.php?op=Search User">
						<span>Search User</span>
					</a>
				</li>

				<li>
					<a href="../controller/admin_controller.php?op=Update User">
						<span>Update User</span>
					</a>
				</li>

				<li>
					<a href="../controller/admin_controller.php?op=Manage Students">
						<span>Manage Students</span>
					</a>
				</li>
				<li>
					<a href="../controller/admin_controller.php?op=Add Time Table">
						<span>Add Time Table</span>
					</a>
				</li>
			</ul>
		</nav>

	</div>


	<div id="content">
		<div id="modify">
			<h2>MODIFY USER DETAILS</h2>
			<?php if(@$_GET['err']==1){ ?>
				<div class ="error-text">Login incorrect</div>
			<?php } ?>
			
			<form method="POST" action="../controller/admin_controller.php">
				<p>User Name:  <br>
				<input  type="text" name="uname">
				</p>
				
				<input class="button"  type="submit" name="op" value="Search User Now" /><br>		
				
				
			</form>
		</div>
	</div>



</body>
</html>
