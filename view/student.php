<?php
session_start();
?>

<?php
$s_id='';
$fname='';
$lname='';
$area='';
if(isset($_SESSION['details'])){
    foreach ($_SESSION['details'] as $user) {
        $fname=$user['first_name'];
        $fname=$user['mid_name'];
        $lname=$user['last_name'];
        $lname=$user['school'];
        $lname=$user['birthdate'];
        $lname=$user['race'];
        $lname=$user['religion'];
        $lname=$user['gender'];
        $nic=$user['nic'];
        $lname=$user['index_no'];
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
                <a href="home.html"><img src="../view/images/profile_pic/<?php echo $nic;?>" alt="merkery_logo" class="hidden-xs hidden-sm">

                </a>
            </div>
            <div class="navi">
                <ul>
                    <li class="active"><a href="../controller/admin_controller.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Events</span></a></li>
                    <li ><a href="../controller/student_controller.php?op=TimeTable"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Time Table</span></a></li>
                    <li><a href="../controller/student_controller.php?op=AcadamicDetails"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Acadamic Details</span></a></li>
                    <li><a href="../controller/student_controller.php?op=ExaminationDetails"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Examination Details</span></a></li>
                    <li><a href="../controller/student_controller.php?op=Problems"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Problems</span></a></li>
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


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-content">
                                                <a href="../controller/student_controller.php?op=edit_by_student" class="view btn-sm active">Edit Profile</a>
                                                <a href="../controller/student_controller.php?op=view_by_student" class="view btn-sm active">View Profile</a>

                                            </div>
                                        </li>
                                    </ul>
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

        </div>
    </div>

</div>


</body>

</html>