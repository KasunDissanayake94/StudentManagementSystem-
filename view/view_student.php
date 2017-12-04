<?php 
session_start();
 ?>

 <?php
    if(isset($_SESSION['value'])){

    foreach ($_SESSION['value'] as $lecturer) {
            $first_name=$lecturer['first_name'];
            $last_name=$lecturer['last_name'];
            $gender=$lecturer['gender'];
            $dob=$lecturer['dob'];
            $telephone=$lecturer['telephone'];
            $email=$lecturer['email'];
            $education=$lecturer['education'];
            $research=$lecturer['research'];
            $courses=$lecturer['courses'];
            $awards=$lecturer['awards'];
        }
    }
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
                        <li><a href="../controller/lecturer_controller.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="../controller/lecturer_controller.php?op=view_lecturer"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                        <li class="active"><a href="../controller/lecturer_controller.php?op=view_student"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Student Details</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Subjects</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reports</span></a></li>
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
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['lname'] ?>
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
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">

                                <div class="panel panel-default panel-table">
                                  <div class="panel-heading">
                                    <div class="row">
                                      <div class="col col-xs-6">
                                        <h3 class="panel-title">Student Details</h3>
                                      </div>
                                      <div class="col col-xs-6 text-right">
                                        <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel-body">
                                    <table class="table table-striped table-bordered table-list">
                                      <thead>
                                        <tr>
                                            <th><em class="fa fa-cog"></em></th>
                                            <th class="hidden-xs">ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr> 
                                      </thead>
                                      <tbody>
                                              <tr>
                                                <td align="center">
                                                  <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                                  <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                                </td>
                                                <td class="hidden-xs">1</td>
                                                <td>John Doe</td>
                                                <td>johndoe@example.com</td>
                                              </tr>
                                            </tbody>
                                    </table>
                                
                                  </div>
                                  <div class="panel-footer">
                                    <div class="row">
                                      <div class="col col-xs-4">Page 1 of 5
                                      </div>
                                      <div class="col col-xs-8">
                                        <ul class="pagination hidden-xs pull-right">
                                          <li><a href="#">1</a></li>
                                          <li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#">4</a></li>
                                          <li><a href="#">5</a></li>
                                        </ul>
                                        <ul class="pagination visible-xs pull-right">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                    </div></div></div>
                    
                </div>
            </div>
        </div>

    </div>


</body>

</html>