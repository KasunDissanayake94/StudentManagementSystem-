<?php 
session_start();
 ?>

<?php 
$user_list='';
$count='';

$sizes=$_SESSION['size'];  
$list=$_SESSION['list'];          
if(isset($_SESSION['value'])){

foreach ($_SESSION['value'] as $user) {
	        		$user_list .= "<tr>";	    		
		    		$user_list .= "<td>{$user['first_name']}</td>";
		    		$user_list .= "<td>{$user['last_name']}</td>";
		    }	
		$user_list .= "</tr>";
        unset($_SESSION['value']);
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
				<?php 
				for ($i=1; $i < $sizes; $i++) { 
				
				if ($list[1][$i]==1) {
				
					if ($list[0][$i]=="first_name"){
							echo "<th>First Name</th>";
						}
						if ($list[0][$i]=="last_name"){
							echo "<th>Last Name</th>";
						}
						if ($list[0][$i]=="school"){
							echo "<th>School</th>";
						}
						if ($list[0][$i]=="birthdate"){
							echo "<th>Birthdate</th>";
						}
						if ($list[0][$i]=="religion"){
							echo "<th>Religion</th>";
						}
						if ($list[0][$i]=="gender"){
							echo "<th>Gender</th>";
						}
						if ($list[0][$i]=="reg_date"){
							echo "<th>Reg Date</th>";
						}
						if ($list[0][$i]=="out_date"){
							echo "<th>Out Date</th>";
						}
				}
				}				
			
					
							    			

	    			
				 ?>

			</tr>

			<?php echo $user_list; ?>

		</table>
</body>
</html>
