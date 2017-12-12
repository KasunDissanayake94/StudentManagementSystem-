<?php

session_start();
if(isset($_GET['result'])){
    $result=$_GET['result'];
}
else{
    $result=null;
}
?>

<?php
$s_id='';
$fname='';
$lname='';
$area='';
//basic details
if(isset($_SESSION['details'])){
    foreach ($_SESSION['details'] as $user) {
        $fname=$user['first_name'];
        $mname=$user['mid_name'];
        $lname=$user['last_name'];
        $s_id=$user['s_id'];
        $school=$user['school'];
        $bday=$user['birthdate'];
        $race=$user['race'];
        $religion=$user['religion'];
        $reg=$user['reg_date'];
        $out=$user['out_date'];
        $gender=$user['gender'];
        $nic=$user['nic'];

    }
}
//contact details
if(isset($_SESSION['details2'])){
    foreach ($_SESSION['details2'] as $user) {
        $con1=$user['contact1'];
        $con2=$user['contact2'];
        $emgcon=$user['emg_contact'];
        $emgper=$user['emg_person'];


    }
}
//address details
if(isset($_SESSION['details1'])){
    foreach ($_SESSION['details1'] as $user) {
        $no=$user['number_'];
        $street=$user['street'];
        $town=$user['town'];
        $p_code=$user['p_code'];


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
            <!-- Student Profile here -->
            <div class="row panel panel-success" style="margin-top:2%;">
                <div class="panel-heading lead">
                    <div class="row">
                        <div class="col-lg-8 col-md-8"><i class="fa fa-users"></i> Your Details</div>
                        <div class="col-lg-4 col-md-4 text-right">
                            <div class="btn-group text-center">
                                <a href="student-view.php?sid=1&amp;id=68" class="btn btn-success btn-sm btn-default"><i class="fa fa-eye fa-1x"></i></a>
                                <a href="student-modify.php?sid=1&amp;id=68" class="btn btn-success btn-sm btn-default"><i class="fa fa-edit fa-1x"></i></a>
                                <a href="student-print.php?sid=1&amp;id=68" class="btn btn-success btn-sm btn-default"><i class="fa fa-print fa-1x"></i></a>
                                <a href="student-delete.php?sid=1&amp;id=68" class="btn btn-success btn-sm btn-default"><i class="fa fa-trash-o fa-1x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <?php echo $result; ?>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12 col-md-12">

                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <center>
                                        <span class="text-left">
                                        <img src="../view/images/profile_pic/<?php echo $nic ;?>" class="img-responsive img-thumbnail">


                                            <!-- Modal -->
                                            <div class="modal fade" id="PhotoOption" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog" style="width:30%;height:30%;">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title text-success" id="myModalLabel"><i class="fa fa-gear"></i> <span class="text-right">Change Photo</span></h4>
                                                        </div>
                                                        <div class="modal-body"><center><img src="../view/images/profile_pic/<?php echo $nic;?>" class="img-responsive img-thumbnail"></center>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form class="uplaod" action="../view/upload.php" method="post" enctype="multipart/form-data" >
                                                                <input class="up1" type="file" name="fileToUpload" value="Chose Image" >
                                                                <button class="btn btn-success" type="submit" value="<?php echo $nic;?>" name="stu_id"><i class="fa fa-photo"></i> Upload</button>
                                                                <a href="../view/student_detail.php" class="btn btn-danger"><i class="fa fa-trash"></i> Cancel</a>
                                                            </form>

                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                    </span></center>

                                    <div class="table-responsive panel">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="text-center">

                                                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#PhotoOption"><i class="fa fa-photo"></i> Change</a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#Summery" class="text-success"><i class="fa fa-indent"></i> Summery</a></li>
                                        <li><a data-toggle="tab" href="#Contact" class="text-success"><i class="fa fa-bookmark-o"></i> Contact Info</a></li>
                                        <li><a data-toggle="tab" href="#Address" class="text-success"><i class="fa fa-home"></i> Address</a></li>
                                    </ul>



                                    <form action="../controller/student_controller.php" method="post" class="tab-content">

                                        <div id="Summery" class="tab-pane fade in active">

                                            <div class="table-responsive panel">
                                                <table class="table">
                                                    <tbody>

                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-user"></i> Student ID :</td>
                                                        <td> <input type="text" value="<?php echo $s_id; ?>" class="form-control" id="sid" name="s_id" placeholder="Enter email" required disabled/></td>

                                                    </tr>

                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-user"></i> First Name</td>
                                                        <td> <input type="text" value="<?php echo $fname; ?>" class="form-control" id="fname" name="firstname" placeholder="Enter email" required disabled/></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-user"></i> Middle Name</td>
                                                        <td> <input type="text" value="<?php echo $mname; ?>" class="form-control" id="mname" name="mname" placeholder="Enter email" required disabled/></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-user"></i> Last Name</td>
                                                        <td> <input type="text" value="<?php echo $lname; ?>" class="form-control" id="email" name="lastname" placeholder="Enter email" required disabled/></td>

                                                    </tr>



                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-calendar"></i> Birthday</td>
                                                        <td> <input type="date" value="<?php echo $bday; ?>" class="form-control" id="bday" name="bday" placeholder="Enter Birth day" required disabled/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-calendar"></i> Religion</td>
                                                        <td> <input type="text" value="<?php echo $religion; ?>" class="form-control" id="religion" name="religion" placeholder="Enter Religion" required disabled/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-calendar"></i> Race</td>
                                                        <td> <input type="text" value="<?php echo $race; ?>" class="form-control" id="race" name="race" placeholder="Enter Race" required disabled/></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-university"></i> School</td>

                                                        <td> <input type="text" value="<?php echo $school; ?>" class="form-control" id="school" name="school" placeholder="Enter email" required disabled/></td>                                                               </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div id="Address" class="tab-pane fade">
                                            <div class="table-responsive panel">
                                                <table class="table">
                                                    <tbody>

                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-home"></i> No</td>
                                                        <td> <input type="text" value="<?php echo $no; ?>" class="form-control" id="no" name="no" placeholder="Address No" required disabled/></td>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-user"></i> Street</td>
                                                        <td> <input type="text" value="<?php echo $street; ?>" class="form-control" id="street" name="street" placeholder="Street" required disabled/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-user"></i> Town</td>
                                                        <td> <input type="text" value="<?php echo $town; ?>" class="form-control" id="town" name="town" placeholder="Town" required disabled/></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="Contact" class="tab-pane fade">
                                            <div class="table-responsive panel">
                                                <table class="table">
                                                    <tbody>


                                                    <tr>
                                                        <td class="text-success"><i class="glyphicon glyphicon-phone"></i> Mobile Number</td>
                                                        <td> <input type="text" value="<?php echo $con1; ?>" class="form-control" id="con1" name="con1" placeholder="Mobile Number" required disabled/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-flag"></i> Home Number</td>
                                                        <td> <input type="text" value="<?php echo $con2; ?>" class="form-control" id="con2" name="con2" placeholder="Home Number" required disabled/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="glyphicon glyphicon-phone"></i> Emergency Person</td>
                                                        <td> <input type="text" value="<?php echo $emgcon; ?>" class="form-control" id="emg_con" name="emg_con" placeholder="Emergency Person" required disabled/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-success"><i class="fa fa-user"></i> Emergency Person Name</td>
                                                        <td> <input type="text" value="<?php echo $emgper; ?>" class="form-control" id="emg_per" name="emg_per" placeholder="Emergency Person Name" required disabled/></td>
                                                    </tr>




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </form>

                                </div>



                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.table-responsive -->

            </div><!-- /.contend -->

        </div>


    </div>
</div>

</div>



</body>

</html>