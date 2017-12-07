<?php 
session_start();
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
	<form action="../controller/lecturer_controller.php" method="post">
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">Index No</th>
		      <th scope="col">Final Results</th>
		    </tr>
		  </thead>
		  <tbody>
			<?php
			$year=$_SESSION['year'];
			$subject=$_SESSION['subject'];
			$connect = mysqli_connect("localhost", "root", "", "sms");

			$query = "SELECT s_id,exam_grade FROM student_course where year=$year AND course_id=$subject ORDER BY s_id";
			$result = mysqli_query($connect, $query);
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>
						<td><input type='text' name='".$row['s_id']."' disabled value='".$row['s_id']."'/></td>
						 <td><input type='text' name='final_result' value='".$row['exam_grade']."'/></td>
					  </tr>";
			}
			?>
		  </tbody> 
		</table>
		<div class="modal-footer">
        	<button type="button" class="cancel">Close</button>
            <button type="submit" class="add-project" name="op" value="update_final_results">Add</button>
           <!--  <button type="submit" class="add-project" name="op" value="update_final_results">Update</button> -->
        </div>
	</form>

</body>
</html>