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
	<title>lecturers</title>
	<link rel="stylesheet" type="text/css" href="../view/css/style1.css">
	<script type="text/javascript" src="../view/js/main.js"></script>
</head>
<body>
	<div class="header" id="header">
		<div id="btn" class="toggle-btn" onclick="togglesidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<span id="logout"><a href="../index.php?op=logout">log out</a></span>
		<span id="head_name"><h3>UCSC STUDENT MANAGEMENT SYSTEM</h3></span>
		<span id="user_status"><p style="float: right;padding: 15px;font-weight: bold;font-size: 15px;text-decoration: none;">You logged as <?php echo $_SESSION['username'] ?></p></span>
		
	</div>

	<div class="side-nav" id="sidebar">
		
		<nav>
			<div class="profile_info">
					<div class="pic"><img src="../view/images/icon.png"></div>
					<div class="name"><?php echo $_SESSION['username'] ?></div>
			</div>
			<ul>
				<li>
					<a href="../controller/lecturer_controller.php">
						<span  class="active_page">Home</span>
					</a>
				</li>

				<li>
					<a href="../controller/lecturer_controller.php?op=view_lecturer">
						<span>Profile</span>
					</a>
				</li>

				<li>
					<a href="../controller/lecturer_controller.php?op=view_student">
						<span>View Student Details</span>
					</a>
				</li>

				<li>
					<a href="../controller/lecturer_controller.php?op=view_subjects">
						<span>Subjects</span>
					</a>
				</li>

				<li>
					<a href="../controller/lecturer_controller.php?op=view_exams">
						<span>Exams and Results</span>
					</a>
				</li>

				<li>
					<a href="../controller/lecturer_controller.php?op=view_report">
						<span>Generate reports</span>
					</a>
				</li>
			</ul>
		</nav>
		
	</div>

	<div 
	id="content">
		
		
	</div>
</body>
</html>
