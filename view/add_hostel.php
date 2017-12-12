<?php
session_start();
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
                <a href="home.html"><img src="../view/images/caa.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                    <img src="../view/images/caa.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                </a>
            </div>
            <div class="navi">
                <ul>
                   <li ><a href="../controller/caa_academic_controller.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                   <li><a href="../controller/caa_academic_controller.php?op=caa_profile"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">CAA Profile</span></a></li> 
                   <li><a href="../controller/caa_academic_controller.php?op=view_student"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Student Details</span></a></li>
                  <!--  <li><a href="../controller/caa_academic_controller.php?op=view_events"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Events</span></a></li> -->
                   <li><a href="../controller/caa_academic_controller.php?op=view_scholarships"><i class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Scholarships</span></a></li>
                   <li><a href="../controller/caa_academic_controller.php?op=view_timetable"><i class="fa fa-calendar-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Time Table</span></a></li>
                   <li class="active"><a href="../controller/caa_academic_controller.php?op=view_hostel"><i class="fa fa-h-square" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Hostel facilities</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
                <header>
                    <div class="col-md-7">


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
                <div class="modal-content">
                    <div class="modal-header login-header">
                        <h4 class="modal-title">Add Hostel </h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="../controller/caa_academic_controller.php" method="post">

                            <div class="form-group">
                                <label class="control-label col-sm-2">Name :</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" id="name" type="text" name="name" placeholder="Student name here" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Index Number :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="indexno" type="text" name="indexno" placeholder="Student index No here" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="radio">Course:</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label><input type="radio" name="course" value="IS" required>Information Systems</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="course" value="CS" required>Computer Science</label>
                                    </div>


                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2"  for="radio">Accept/Decline  :</label>
                                <div class="col-sm-10">
                                    <div class="radio"><label><input type="radio" id="stype" name="stype" value="accept" required>Accept </label></div>
                                    <div class="radio"><label><input type="radio" id="stype" name="stype" value="decline" required>Decline </label></div>


                            <div class="modal-footer">
                                <button type="submit" class="add-project" data-dismiss="modal" name="op" value="add_hostel">
                                    Add Student</button>
                                <button type="reset" class="add-project" data-dismiss="modal" value="Cancel">
                                    Cancel</button>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>