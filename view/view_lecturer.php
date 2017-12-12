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
                        <li class="active"><a href="../controller/lecturer_controller.php?op=view_lecturer"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                        <li><a href="../controller/lecturer_controller.php?op=view_student"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Student Details</span></a></li>
                        <li><a href="../controller/lecturer_controller.php?op=view_academic"><i class="fa fa-book" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Academic</span></a></li>
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
                    
                    <div id="content">
                        <span>
                            <h3>Profile</h3>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#edit_details" op=>Edit Details</button><?php echo $result; ?>
                        </span>
                        
                        <div id="line"></div>

                        <div id="table_lecturer">
                            <table class="zui-table zui-table-horizontal">          
                                <tbody>
                                    <tr>
                                        <td><b>First Name</b></td>
                                        <td><?php echo $first_name?></td>            
                                    </tr>
                                    <tr>
                                        <td><b>Last Name</b></td>
                                        <td><?php echo $last_name?></td>                    
                                    </tr>
                                    <tr>
                                        <td><b>Gender</b></td>
                                        <td><?php echo $gender?></td>                   
                                    </tr>
                                    <tr>
                                        <td><b>DOB</b></td>
                                        <td><?php echo $dob?></td>                 
                                    </tr>
                                    <tr>
                                        <td><b>Telephone</b></td>
                                        <td><?php echo $telephone?></td>                    
                                    </tr>
                                    <tr>
                                        <td><b>E-mail</b></td>
                                        <td><?php echo $email?></td>                    
                                    </tr>
                                    <tr>
                                        <td><b>Educational Details</b></td>
                                        <td><?php echo $education?></td>                    
                                    </tr>
                                    <tr>
                                        <td><b>Research Interests</b></td>
                                        <td><?php echo $research?></td>                 
                                    </tr>
                                    <tr>
                                        <td><b>Courses</b></td>
                                        <td><?php echo $courses?></td>                  
                                    </tr>
                                    <tr>
                                        <td><b>Awards</b></td>
                                        <td><?php echo $awards?></td>                   
                                    </tr>
                                    
                                </tbody>
                            </table>    
                        </div>  

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Edit Details Modal -->
    <div id="edit_details" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Assignment Results</h4>
                </div>
                    <div class="modal-body">
                            <form class="form-horizontal" action="../controller/lecturer_controller.php" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-4">First Name :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="fname" type="text" name="fname" placeholder="" required value=<?php echo $first_name?> disabled/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Last Name :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="lname" type="text" name="lname" placeholder="" value=<?php echo $last_name?> disabled/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Gender :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="gender" value=<?php echo $gender?>>
                                          <option value="male">Male</option>
                                          <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Date of Birth :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="dob" type="text" name="dob" placeholder="" value=<?php echo $dob?> />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Telephone :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="tel" type="text" name="tel" placeholder="" value=<?php echo $telephone?> />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="email">Email:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" placeholder=""  value=<?php echo $email?> />
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Educational Details :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="edu" type="text" name="edu" placeholder="" value=<?php echo $education?> />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Research Interest :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="research" type="text" name="research" placeholder="" value=<?php echo $research?> />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Courses :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="course" type="text" name="course" placeholder="" value=<?php echo $courses?> />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Awards :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="awards" type="text" name="awards" placeholder="" value=<?php echo $awards?> />
                                    </div>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                                    <button type="submit" class="add-project" name="op" value="update_lecturer_info">Update</button>
                                </div>

                              
                            </form>
                        </div>
                
                
            </div>

        </div>
    </div>


</body>

</html>