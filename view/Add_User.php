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

<div id="content">
	<form action="" method="post" class="elegant-aero">
    <h1>ADD USER FORM
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>UserID :</span>
        <input id="u_id" type="text" name="name" placeholder="User ID here" />
    </label>
    <label>
        <span>Username :</span>
        <input id="username" type="text" name="name" placeholder="User Name" />
    </label>
    <label>
        <span>NIC :</span>
        <input id="nic" type="text" name="name" placeholder="NIC" />
    </label>

    <label>
        <span>Email :</span>
        <input id="email" type="email" name="name" placeholder="Valid Email here" />
    </label>
    <label>
        <span>Type :</span>
        <input id="type" type="text" name="type" placeholder="User Type here" />
    </label>
    <label>
        <span>Password :</span>
        <input id="password" type="password" name="password" placeholder="Password here" />
    </label><br>
     <label>
        <span>&nbsp;</span>
        <input type="button" class="button" value="Add Student" />
    </label>
</form>
</div>

</body>
</html>