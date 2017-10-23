<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Student Details</title>
	<link rel="stylesheet" href="../view/css/jquery-ui.css">
<script src="../view/js/jquery.min.js"></script>
<script src="../view/js/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../view/css/style1.css">
	<script type="text/javascript" src="../view/js/main.js"></script>
	<style>
		form{
		margin-top: 60px;
	}
	   .elegant-aero {
		    margin-left:auto;
		    margin-right:auto;
		    
		    max-width: 1000px;
		    background: #b784e3;
		    padding: 20px 20px 20px 20px;
		    font: 12px Arial, Helvetica, sans-serif;
		    color: #666;
		}
		.elegant-aero h1 {
		    font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
		    padding: 10px 10px 10px 20px;
		    display: block;
		   
		    background: #f7ff74;
		    border-bottom: 1px solid #B8DDFF;
		    margin: -20px -20px 15px;
		}
		.elegant-aero h1>span {
		    display: block;
		    font-size: 11px;
		    
		}

		.elegant-aero label>span {
		    float: left;
		    margin-top: 10px;
		    color: #5E5E5E;
		}
		.elegant-aero label {
		    display: block;
		    margin: 0px 0px 5px;
		}
		.elegant-aero label>span {
		    float: left;
		    width: 20%;
		    text-align: right;
		    padding-right: 15px;
		    margin-top: 10px;
		    font-weight: bold;
		}
		.elegant-aero input[type="text"], .elegant-aero input[type="email"], .elegant-aero textarea, .elegant-aero select {
		    color: #888;
		    width: 70%;
		    padding: 0px 0px 0px 5px;
		    border: 1px solid #C5E2FF;
		    background: #FBFBFB;
		    outline: 0;
		    -webkit-box-shadow:inset 0px 1px 6px #ECF3F5;
		    box-shadow: inset 0px 1px 6px #ECF3F5;
		    font: 200 12px/25px Arial, Helvetica, sans-serif;
		    height: 30px;
		    line-height:15px;
		    margin: 2px 6px 16px 0px;
		}
		.elegant-aero textarea{
		    height:100px;
		    padding: 5px 0px 0px 5px;
		    width: 70%;
		}
		.elegant-aero select {
		    background: #fbfbfb url('down-arrow.png') no-repeat right;
		    background: #fbfbfb url('down-arrow.png') no-repeat right;
		   appearance:none;
		    -webkit-appearance:none; 
		   -moz-appearance: none;
		    text-indent: 0.01px;
		    text-overflow: '';
		    width: 70%;
		}
		.elegant-aero .button{
		    padding: 10px 30px 10px 30px;
		    background: #9044e7;
		    border: none;
		    color: #FFF;
		    box-shadow: 1px 1px 1px #4C6E91;
		    -webkit-box-shadow: 1px 1px 1px #4C6E91;
		    -moz-box-shadow: 1px 1px 1px #4C6E91;
		    text-shadow: 1px 1px 1px #5079A3;
		    
		}
		.elegant-aero .button:hover{
		    background: #460b5a;
		}
	</style>
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
			<span id="logout"><a href="../index.php?op=logout">log out</a></span>
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
		<form action="../controller/admin_controller.php" method="post" class="elegant-aero">
		    <h1>ADD STUDENT FORM 
		        <span>Please fill all the texts in the fields.</span>
		    </h1>
		    <label>
		        <span>First Name :</span>
		        <input id="name" type="text" name="firstname" placeholder="Student First Name" />
		    </label>
		    
		    <label>
		        <span>Last Name :</span>
		        <input id="email" type="text" name="lastname" placeholder="Student Last Name" />
		    </label>
		    <label>
		        <span>Email :</span>
		        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
		    </label>
		    <label>
		        <span>School :</span>
		        <input id="email" type="text" name="school" placeholder="School" />
		    </label>
		    <label>
		        <span>Birthday :</span>
		        <input id="datepicker1" type="text" name="birthday" placeholder="Birthdate" />
		    </label>
		    <label>
		        <span>Race :</span>
		        <input id="email" type="text" name="race" placeholder="Race" />
		    </label>
		    <label>
		        <span>Religion :</span>
		        <input id="email" type="text" name="religion" placeholder="Religion" />
		    </label>
		    <label>	
		        <span>Registered Date :</span>
		        <input id="datepicker2" type="text" name="regdate" placeholder="Date" />
		    </label>
		    <label>
		        <span>Pass Out Date :</span>
		        <input id="datepicker3" type="text" name="passdate" placeholder="Date" />
		    </label>
		     
		     <label>	
		        <span>Gender :</span><select name="gender">
		        <option   value="male">MALE</option>
		        <option    value="female">FEMALE</option>	
		        </select>
		    </label>    
		     <label>
		        <span>&nbsp;</span> 
		        <input type="submit" class="button" name="op" value="Add Student" /> 
		    </label>    
		</form>
	</div>



</body>
</html>
<script>
  $(document).ready(function() {
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    $("#datepicker3").datepicker();
  });
  </script>



        
