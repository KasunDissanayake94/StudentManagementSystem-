<?php
/**
 * Created by PhpStorm.
 * User: Kasun Dissanayake
 * Date: 12/5/2017
 * Time: 9:07 PM
 */
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
        $lname=$user['last_name'];
        $s_id=$user['s_id'];
        $nic=$user['nic'];
    }
}
//get the session data

if(isset($_SESSION['grade'])){
    foreach ($_SESSION['grade'] as $grade) {
        $c_id=$grade['course_id'];
        $e_grade=$grade['exam_grade'];
        $assignment=$grade['assignment_grade'];
        $atten=$grade['attendance'];
        $attem=$grade['attempt'];
        $start=$grade['start_date'];
        $end=$grade['end_date'];
    }
}
$alert='';
if(isset($_GET['alert'])){
    $alert=$_GET['alert'];
}
else{
    $alert=null;
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
                    <li ><a href="../controller/student_controller.php?op=Home"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                    <li class="active"><a href="../controller/student_controller.php?op=Grades"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">View Exam Grades</span></a></li>
                    <li ><a href="../controller/student_controller.php?op=Repeat"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Repeat Subjects</span></a></li>

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
                                                <a href="../index.php?op=logout" class="view btn-sm active">View Profile</a>
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
                                                <span><?php echo $fname ?> <?php echo $lname ?></span>
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
            <!--contend-->
            <div class="user-dashboard">
                <div class="panel-heading">
                    <h4>
                        <b>Scolarship Details</b>
                    </h4>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <?php echo $alert; ?>
                    </div>
                </div>


                <table class="table" >
                    <tr>
                        <th>Course</th>
                        <th>Exam Grade</th>
                        <th>Assignment Grade</th>
                        <th>Attendance</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Attempts</th>

                    </tr>


                    <tr>
                        <td><?php echo $c_id;?></td>
                        <td><?php echo $e_grade;?></td>
                        <td><?php echo $assignment;?></td>
                        <td><?php echo $atten;?></td>
                        <td><?php echo $start;?></td>
                        <td><?php echo $end;?></td>
                        <td><?php echo $attem;?></td>




                    </tr>
                </table>

            </div>

        </div>
    </div>

</div>


</body>

</html>