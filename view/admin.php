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
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../view/css/style1.css">
	<script type="text/javascript" src="../view/js/main.js"></script>
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


<div class="header" id="header">
		<div id="btn" class="toggle-btn" onclick="togglesidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<span id="logout"><a href="">log out</a></span>
		<span id="login"><h3>you are logged as   <?php echo $_SESSION['username'] ?></h3></span>
		<span id="head_name"><h3>UCSC Student Management System</h3></span>

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



</body>
</html>