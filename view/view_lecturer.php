<?php 
session_start();
 ?>

 <?php
 	if(isset($_SESSION['value'])){

	foreach ($_SESSION['value'] as $lecturer) {
			$first_name=$lecturer['first_name'];
			$last_name=$lecturer['last_name'];
			$gender=$lecturer['gender'];
			$dob=$lecturer['dob'];
			$telephone=$lecturer['telephone'];
			$email=$lecturer['email'];
			$education=$lecturer['education'];
			$research=$lecturer['research'];
			$courses=$lecturer['courses'];
			$awards=$lecturer['awards'];
	    }
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<div class="header" id="header">
		<div id="btn" class="toggle-btn" onclick="togglesidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<span id="logout"><a href="../index.php?op=logout">log out</a></span>
		<span id="head_name"><h3>UCSC Student Management System</h3></span>
		<span id="user_status"><p style="float: right;padding: 15px;font-weight: bold;font-size: 15px;text-decoration: none;">You logged as <?php echo $_SESSION['username'] ?></p></span>
		
	</div>

	<div class="side-nav" id="sidebar">
		
		<nav>
			<div class="profile_info">
					<div class="pic"><img src="images/icon.png"></div>
					<div class="name"><?php echo $first_name," ",$last_name?></div>
			</div>
			<ul>
				<li>
					<a href="../controller/lecturer_controller.php">
						<span>Home</span>
					</a>
				</li>

				<li>
					<a href="../controller/lecturer_controller.php?op=view_lecturer">
						<span class="active_page">Profile</span>
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

	<div id="content">
		<h3>Profile</h3>
		<div id="line"></div>

		<div id="table_lecturer">
			<table class="zui-table zui-table-horizontal">			
			    <tbody>
			        <tr>
			            <td><b>First Name</b></td>
			            <td><?php echo $first_name?></td>		     
			        </tr>
			        <tr>
			            <td><b>Last Name</b></td>
			            <td><?php echo $last_name?></td>		            
			        </tr>
			        <tr>
			            <td><b>Gender</b></td>
			            <td><?php echo $gender?></td>		            
			        </tr>
			        <tr>
			            <td><b>DOB</b></td>
			            <td><?php echo $dob?></td>		           
			        </tr>
			        <tr>
			            <td><b>Telephone</b></td>
			            <td><?php echo $telephone?></td>		            
			        </tr>
			        <tr>
			            <td><b>E-mail</b></td>
			            <td><?php echo $email?></td>		            
			        </tr>
			        <tr>
			            <td><b>Educational Details</b></td>
			            <td><?php echo $education?></td>		            
			        </tr>
			        <tr>
			            <td><b>Research Interests</b></td>
			            <td><?php echo $research?></td>		            
			        </tr>
			        <tr>
			            <td><b>Courses</b></td>
			            <td><?php echo $courses?></td>		            
			        </tr>
			        <tr>
			            <td><b>Awards</b></td>
			            <td><?php echo $awards?></td>		            
			        </tr>
			        
			    </tbody>
			</table>	
		</div>	

	</div>
</body>
</html>
