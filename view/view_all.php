<?php 
session_start();
 ?>

<?php 
$user_list='';
                 
if(isset($_SESSION['value'])){

foreach ($_SESSION['value'] as $user) {
        $user_list .= "<tr>";
		$user_list .= "<td>{$user['s_id']}</td>";
        $user_list .= "<td>{$user['first_name']}</td>";
		$user_list .= "<td>{$user['last_name']}</td>";
		$user_list .= "<td>{$user['last_login']}</td>";
		$user_list .= "<td>{$user['area']}</td>";
		$user_list .= "</tr>";
        unset($_SESSION['value']);
    }
}

 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>View All</title>	
	<style> 
		.masterlist {
			width: 100%;
			border-collapse: collapse;
        }

		.masterlist th {
			background: #aaa;
			text-align: left;
        }

		.masterlist th, .masterlist td {
			padding: 10px;
			border-bottom: 1px solid #aaa;
        }


	</style>
</head>
<body>
<p>
	you are logged as   <?php echo $_SESSION['username'] ?> .
	</br>
	<a href="../index.php?op=logout">Logout</a>
</p>
<h1>View All Students</h1>

 <table class="masterlist">
			<tr>
				<th>Student ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Last Login</th>
				<th>Area</th>
				
			</tr>

			<?php echo $user_list; ?>

		</table>
</body>
</html>
