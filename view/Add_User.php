<?php 
session_start();
 ?>
 
<!DOCTYPE html>
<html>


<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../view/css/style2.css">
    <link rel="stylesheet" type="text/css" href="../view/css/style1.css">

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
                    <a href="home.html"><img src="../view/images/002.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="../view/images/002.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="../controller/admin_controller.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                        <li class="active"><a href="../controller/admin_controller.php?op=Add User"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add User</span></a></li>
                        <li><a href="../controller/admin_controller.php?op=Search User"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Search User</span></a></li>
                        <li><a href="../controller/admin_controller.php?op=Update User"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Update User</span></a></li>
                        <li><a href="../controller/admin_controller.php?op=Manage Students"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Manage Students</span></a></li>
                        <li><a href="../controller/admin_controller.php?op=Add Time Table"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Time table</span></a></li>
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
                                                    <span><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname'] ?></span>
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
                            <h4 class="modal-title">Add User Form</h4>
                        </div>   
                        <div class="modal-body">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2">UserID :</label>
                                <div class="col-sm-10">
                                  <input class="form-control" id="u_id" type="text" name="name" placeholder="User ID here" />
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2">Username :</label>
                                <div class="col-sm-10">
                                  <input class="form-control" id="username" type="text" name="name" placeholder="User Name" />
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2">NIC :</label>
                                <div class="col-sm-10">
                                  <input class="form-control" id="nic" type="text" name="name" placeholder="NIC" />
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2">Email :</label>
                                <div class="col-sm-10">
                                  <input class="form-control" id="email" type="email" name="name" placeholder="Valid Email here" />
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2">Type :</label>
                                <div class="col-sm-10">
                                  <input class="form-control" id="type" type="text" name="type" placeholder="User Type here" />
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2">Password :</label>
                                <div class="col-sm-10">
                                  <input class="form-control" id="password" type="password" name="password" placeholder="Password here" />
                                </div>
                              </div>

                                <div class="modal-footer">
                                    <button type="button" class="add-project" data-dismiss="modal">Add Student</button>
                                </div>

                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>