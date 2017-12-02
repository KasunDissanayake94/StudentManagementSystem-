<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="../view/css/style1.css">
	<script type="text/javascript" src="../view/js/main.js"></script>
	<style>
	form{
		margin-top: 60px;
	}
	   .elegant-aero {
		    margin-left:auto;
		    max-width: 1350px;
		    background: #b784e3;
		    padding: 80px 20px 20px 20px;
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
		<span id="logout"><a href="../index.php?op=logout">Logout</a></span>

		<span id="head_name"><h3>UCSC Student Management System</h3></span>
        <h3>ans</h3>


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



</div>
</body>
</html>