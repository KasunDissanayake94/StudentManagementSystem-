<?php 
session_start();
 ?>

 <?php 
$user_list='';
                 
if(isset($_SESSION['student_list'])){

foreach ($_SESSION['student_list'] as $user) {
        $user_list .= "<tr>";
		$user_list .= "<td>{$user['s_id']}</td>";
        // $user_list .= "<td><input type='text' name='".$user['s_id']."' value='".$user['exam_grade']."'/></td>";
        $user_list .= "<td><SELECT type='text' name='".$user['s_id']."' value='".$user['exam_grade']."'>
        <option>".$user['exam_grade']."</option>
        <option>A+</option>
        <option>A</option>
        <option>A-</option>
        <option>B+</option>
        <option>B</option>
        <option>B-</option>
        <option>C+</option>
        <option>C</option>
        <option>C-</option>
        <option>D+</option>
        <option>W</option>
        			</SELECT></td>";
		$user_list .= "</tr>";
		$_SESSION['s_id']=$user['s_id'];
        // unset($_SESSION['student_list']);
    }
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../view/css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="test/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body class="container">
	<div class="col-md-6">
		<div class="panel-heading">
	        <h3>
	        <b>Student Final Result Sheet</b>
	        </h3>
	        <h4>
	        	Academic Year : <?php echo $_SESSION['year'] ?>
	        </h4>
	        <h4>
	        	Subject : <?php echo $_SESSION['subject'] ?>
	        </h4>
	        <label><input type="text" name="search_text" id="search_text" placeholder="Search by Student Details" class="form-control" /></label>
        </div>
		<form action="../controller/lecturer_controller.php" method="post">
			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">Index No</th>
			      <th scope="col">Final Results</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php echo $user_list; ?>	
				
			  </tbody> 
			</table>
			<div class="modal-footer">
	        	<button type="submit" class="cancel" name="op" value="view_academic">Close</button>
	            <button type="submit" class="add-project" name="op" value="update_final_results">Update</button>
	           <!--  <button type="submit" class="add-project" name="op" value="update_final_results">Update</button> -->
	        </div>
		</form>
	</div>
	

</body>
</html>




<!-- other method -->
<!-- <?php
			$year=$_SESSION['year'];
			$subject=$_SESSION['subject'];
			$connect = mysqli_connect("localhost", "root", "", "sms");

			$query = "SELECT s_id,exam_grade FROM student_course where year=$year AND course_id=$subject ORDER BY s_id";
			$result = mysqli_query($connect, $query);



			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>
						<td><input type='text' name='".$row['s_id']."' disabled value='".$row['s_id']."'/></td>
						 <td><input type='text' name='".$row['s_id']."' value='".$row['exam_grade']."'/></td>
					  </tr>";
			}
			?> -->