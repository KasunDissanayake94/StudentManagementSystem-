
<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>View Student Profile</title>
 	<link rel="stylesheet" type="text/css" href="../view/css/style1.css">
	<script type="text/javascript" src="../view/js/main.js"></script>
 	
 </head>
<body>






	
	<?php if(@$_GET['err']==1){ ?>
		<div class ="error-text">Login incorrect</div>
	<?php } ?>
	<div class="header" id="header">
		<div id="btn" class="toggle-btn" onclick="togglesidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>



		<span id="logout"><a href="../index.php?op=logout">Log out</a></span>
		<span id="head_name"><h3>Student Management System </h3></span>
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
					<a href="../controller/admin_controller.php?op=Home">	
						<span>Home</span>
					</a>
				</li>

				<li>
					<a href="../controller/admin_controller.php?op=Modify Students">
						<span>Modify Students</span>
					</a>
				</li>

				<li>
					<a href="../controller/admin_controller.php?op=Search Students">
						<span>Search Students</span>
					</a>
				</li>

				<li>
					<a href="../controller/admin_controller.php?op=Add Student Details">
						<span>Add Student Details</span>
					</a>
				</li>
				
			</ul>
		</nav>
		
	</div>
	


</body>
 </html>