<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Creating a Acadamic Timetable </title>
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../view/css/style1.css">
	<script type="text/javascript" src="../view/js/main.js"></script>
</head>
<body>
	<h1>Creating an Acadamic Timetable</h1>
	<div class="header" id="header">
		<div id="btn" class="toggle-btn" onclick="togglesidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<span id="logout"><a href="">log out</a></span>
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
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div>Click and drag a class to timetable.</div>
	</div>
	<div class="con">
		<div style="width:700px;">
		<div class="left">
			<table>
				<tr>
					<td><div class="item">English</div></td>
				</tr>
				<tr>
					<td><div class="item">Science</div></td>
				</tr>
				<tr>
					<td><div class="item">Music</div></td>
				</tr>
				<tr>
					<td><div class="item">History</div></td>
				</tr>
				<tr>
					<td><div class="item">Computer</div></td>
				</tr>
				<tr>
					<td><div class="item">Mathematics</div></td>
				</tr>
				<tr>
					<td><div class="item">Arts</div></td>
				</tr>
				<tr>
					<td><div class="item">Ethics</div></td>
				</tr>
			</table>
		</div>
		<div class="right">
			<table>
				<tr>
					<td class="blank"></td>
					<td class="title">Monday</td>
					<td class="title">Tuesday</td>
					<td class="title">Wednesday</td>
					<td class="title">Thursday</td>
					<td class="title">Friday</td>
				</tr>
				<tr>
					<td class="time">08:00</td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
				</tr>
				<tr>
					<td class="time">09:00</td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
				</tr>
				<tr>
					<td class="time">10:00</td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
				</tr>
				<tr>
					<td class="time">11:00</td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
				</tr>
				<tr>
					<td class="time">12:00</td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
				</tr>
				<tr>
					<td class="time">13:00</td>
					<td class="lunch" colspan="5">Lunch</td>
				</tr>
				<tr>
					<td class="time">14:00</td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
				</tr>
				<tr>
					<td class="time">15:00</td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
				</tr>
				<tr>
					<td class="time">16:00</td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
					<td class="drop"></td>
				</tr>
			</table>
		</div>
	</div>
	</div>
	
	<style type="text/css">
	h1{
		text-align: center;
	}
		.con{
			margin-top: 60px;
			margin-left: 300px;
		}
		.left{
			width:120px;
			float:left;
		}
		.left table{
			background:#E0ECFF;
		}
		.left td{
			background:#eee;
		}
		.right{
			float:right;
			width:570px;
		}
		.right table{
			background:#E0ECFF;
			width:100%;
		}
		.right td{
			background:#fafafa;
			color:#444;
			text-align:center;
			padding:2px;
		}
		.right td{
			background:#E0ECFF;
		}
		.right td.drop{
			background:#fafafa;
			width:100px;
		}
		.right td.over{
			background:#FBEC88;
		}
		.item{
			text-align:center;
			border:1px solid #499B33;
			background:#fafafa;
			color:#444;
			width:100px;
		}
		.assigned{
			border:1px solid #BC2A4D;
		}
		.trash{
			background-color:red;
		}
		
	</style>
	<script>
		$(function(){
			$('.left .item').draggable({
				revert:true,
				proxy:'clone'
			});
			$('.right td.drop').droppable({
				onDragEnter:function(){
					$(this).addClass('over');
				},
				onDragLeave:function(){
					$(this).removeClass('over');
				},
				onDrop:function(e,source){
					$(this).removeClass('over');
					if ($(source).hasClass('assigned')){
						$(this).append(source);
					} else {
						var c = $(source).clone().addClass('assigned');
						$(this).empty().append(c);
						c.draggable({
							revert:true
						});
					}
				}
			});
			$('.left').droppable({
				accept:'.assigned',
				onDragEnter:function(e,source){
					$(source).addClass('trash');
				},
				onDragLeave:function(e,source){
					$(source).removeClass('trash');
				},
				onDrop:function(e,source){
					$(source).remove();
				}
			});
		});
	</script>
</body>
</html>