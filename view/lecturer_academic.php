<?php 
session_start();
$result='';
if(isset($_GET['result'])){
    $result=$_GET['result'];
}
else{
    $result=null;
}
 ?>


<!DOCTYPE html>
<html>


<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../view/css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="test/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body class="home">
    <div class="display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="home.html"><img src="../view/images/002.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="../view/images/002.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="../controller/lecturer_controller.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="../controller/lecturer_controller.php?op=view_lecturer"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                        <li><a href="../controller/lecturer_controller.php?op=view_student"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Student Details</span></a></li>
                        <li class="active"><a href="../controller/lecturer_controller.php?op=view_academic"><i class="fa fa-book" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Academic</span></a></li>
                        <!-- <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li> -->
                        <li><a href="../controller/lecturer_controller.php?op=view_report"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reports</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
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
                <div class="user-dashboard">
                    <h1>Academic Details</h1>
                    <?php echo $result; ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 ">

                            <div class="sales">
                                <h2>Assignment Results</h2>
                                <div class="btn-group">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#add_assignment">
                                        Add Results
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="sales">
                                <h2>Final Results</h2>
                                <div class="btn-group">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#add_result">
                                        Add Results
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="sales">
                                <h2>Student results</h2>
                                <div class="btn-group">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#view_student_result">
                                        View Results
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Assignment Modal -->
    <div id="add_assignment" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Assignment Results</h4>
                </div>
                <form action="../controller/lecturer_controller.php" method="post" class="modal-body">
                    <div class="form-group">
                        <label>Academic year</label>
                        <select class="form-control" name="year">
                          <option value="2014">2015</option>
                          <option value="2015">2016</option>
                          <option value="2016">2017</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <select class="form-control" name="subject">
                            <option>select subject code
                                
                              <?php
                              $lect_username=$_SESSION['username'];
                              $connect = mysqli_connect("localhost", "root", "", "sms");

                              $query = "SELECT course_code FROM course where lect_username=$lect_username ORDER BY course_code";
                              $result = mysqli_query($connect, $query);
                              while($row = mysqli_fetch_array($result))
                              {
                               echo "<option>".$row['course_code']."</option>";
                              }
                             ?>
                             </option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Close</button>
                        <button type="submit" class="add-project" name="op" value="add_assignment_results">Add</button>
                    </div>
                </form>
                
                
            </div>

        </div>
    </div>

    <!-- Add result Modal -->
    <div id="add_result" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Final Results</h4>
                </div>
                <form action="../controller/lecturer_controller.php" method="post" class="modal-body">
                    <div class="form-group">
                        <label>Academic year</label>
                        <select class="form-control" name="year">
                          <option value="2014">2015</option>
                          <option value="2015">2016</option>
                          <option value="2016">2017</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <select class="form-control" name="subject">
                            <option>select subject code
                                
                              <?php
                              $lect_username=$_SESSION['username'];
                              $connect = mysqli_connect("localhost", "root", "", "sms");

                              $query = "SELECT course_code FROM course where lect_username=$lect_username ORDER BY course_code";
                              $result = mysqli_query($connect, $query);
                              while($row = mysqli_fetch_array($result))
                              {
                               echo "<option>".$row['course_code']."</option>";
                              }
                             ?>
                             </option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Close</button>
                        <button type="submit" class="add-project" name="op" value="add_final_results">Add</button>
                    </div>
                </form>
                
                
            </div>

        </div>
    </div>

    <!-- view student result Modal -->
    <div id="view_student_result" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">View Results</h4>
                </div>
                <form action="../controller/lecturer_controller.php" method="post" class="modal-body">
                    <div class="form-group">
                        <label>Academic year</label>
                        <select class="form-control" name="year">
                          <option value="2014">2015</option>
                          <option value="2015">2016</option>
                          <option value="2016">2017</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <select class="form-control" name="subject">
                            <option>select subject code
                                
                              <?php
                              $lect_username=$_SESSION['username'];
                              $connect = mysqli_connect("localhost", "root", "", "sms");

                              $query = "SELECT course_code FROM course where lect_username=$lect_username ORDER BY course_code";
                              $result = mysqli_query($connect, $query);
                              while($row = mysqli_fetch_array($result))
                              {
                               echo "<option>".$row['course_code']."</option>";
                              }
                             ?>
                             </option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Close</button>
                        <button type="submit" class="add-project" name="op" value="view_student_results">View</button>
                    </div>
                </form>
                
                
            </div>

        </div>
    </div>

</body>

</html>

