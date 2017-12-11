<?php 
session_start();
 ?>

 <?php 
$user_list='';
                 
if(isset($_SESSION['student_list'])){

foreach ($_SESSION['student_list'] as $user) {
        $user_list .= "<tr>";
		$user_list .= "<td>{$user['s_id']}</td>";
		$user_list .= "<td>{$user['assignment_grade']}</td>";
        $user_list .= "<td>{$user['exam_grade']}</td>";
		$user_list .= "</tr>";
		// $_SESSION['s_id']=$user['s_id'];
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
	<div class="row">
                    <header>
                        <div class="col-md-7">

                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>

                            <div class="title hidden-xs hidden-sm">
                                <h3>University of Colombo School of Computing</h3>
                            </div>

                            <!-- <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div> -->
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <!-- <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li> -->
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['type'] ?>
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?php echo $_SESSION['fname'] ?><?php echo $_SESSION['lname'] ?></span>
                                                    <p class="text-muted small">
                                                        <?php echo $_SESSION['username'] ?>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="../index.php?op=logout" class="view btn-sm active">log out</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
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
	        <h5>
	        	Final Marks last edited by  : <?php echo $_SESSION['edited_final'] ?>
	        </h5>
	        <h5>
	        	Assignment marks last edited by  : <?php echo $_SESSION['edited_assignment'] ?>
	        </h5>
	        <!-- <label><input type="text" name="search_text" id="search_text" placeholder="Search by Student Details" class="form-control" /></label> -->
        </div>
		<form action="../controller/lecturer_controller.php" method="post">
			<table class="table table-bordered">
				<div class="modal-footer">
	        	<button type="submit" class="cancel" name="op" value="view_academic">Close</button>
	            <!-- <button type="submit" class="add-project" name="op" value="update_final_results">Update</button> -->
	           <!--  <button type="submit" class="add-project" name="op" value="update_final_results">Update</button> -->
	        </div>
			  <thead>
			    <tr>
			      <th scope="col">Index No</th>
			      <th scope="col">Assignment Final Results</th>
			      <th scope="col">Final Results</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php echo $user_list; ?>	
				
			  </tbody> 
			</table>
			
		</form>
	</div>
	

</body>
</html>
