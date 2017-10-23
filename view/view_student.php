<?php 
session_start();
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
					<div class="name">Juan Ward</div>
			</div>
			<ul>
				<li>
					<a href="../controller/lecturer_controller.php">
						<span>Home</span>
					</a>
				</li>

				<li>
					<a href="../controller/lecturer_controller.php?op=view_lecturer">
						<span>Profile</span>
					</a>
				</li>

				<li>
					<a href="../controller/lecturer_controller.php?op=view_student">
						<span class="active_page">View Student Details</span>
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
		<h3>Student Details</h3>
		<div id="line"></div>
		<div class="search_bar">
			<h4>Search student</h4>
			<div class="wrap">
			   	<div class="search">
			      <input type="text" class="searchTerm" placeholder="search..">
			      <button type="submit" class="searchButton">
			        <i ></i>
			     </button>
			   </div>
			</div>	
		</div>

		<div id="student_table">
			<table class="stu-table stu-table-horizontal">
			    <thead>
			        <tr>
			            <th>Reg No</th>
			            <th>Index No</th>
			            <th>Name</th>
			            <th>Gender</th>
			            <th>Year</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>xxxxxx</td>
			            <td>xxxxxx</td>
			            <td>DeMarcus Cousins</td>
			            <td>Male</td>
			            <td>2015/2016</td>
			        </tr>
			        <tr>
			            <td>xxxxxx</td>
			            <td>xxxxxx</td>
			            <td>Isaiah Thomas</td>
			            <td>Female</td>
			            <td>2014/2015</td>
			        </tr>
			        <tr>
			            <td>xxxxxx</td>
			            <td>xxxxxx</td>
			            <td>Ben McLemore</td>
			            <td>Male</td>
			            <td>2015/2016</td>
			        </tr>
			        <tr>
			            <td>xxxxxx</td>
			            <td>xxxxxx</td>
			            <td>Marcus Thornton</td>
			            <td>Female</td>
			            <td>2014/2015</td>
			        </tr>
			        <tr>
			            <td>xxxxxx</td>
			            <td>xxxxxx</td>
			            <td>Jason Thompson</td>
			            <td>Male</td>
			            <td>2015/2016</td>
			        </tr>
			    </tbody>
			</table>
		</div>

		
		
	</div>
</body>
</html>
