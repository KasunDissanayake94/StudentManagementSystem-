<?php
session_start();
?>

<!DOCTYPE html>
<html>


<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../view/css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../view/css/style4.css"  />
    <script type="text/javascript" src="../view/js/js4.js" ></script>
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
                    <li><a href="../controller/ar_acedemic_controller.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                    <li><a href="../controller/ar_acedemic_controller.php?op=view_ar_acedemic"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                    <li><a href="../controller/ar_acedemic_controller.php?op=view_student"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Student Details</span></a></li>
                    <li><a href="../controller/ar_acedemic_controller.php?op=ar_approv"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Approvals</span></a></li>
                    <li><a href="../controller/ar_acedemic_controller.php?op=manage_user"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Manage Users</span></a></li>
                    <li><a href="../controller/ar_acedemic_controller.php?op=report"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reports</span></a></li>
                    <li class="active"><a href="../controller/ar_acedemic_controller.php?op=events"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Events</span></a></li>
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
                <div class="container">

                    <div id="newEventHolder">
                        <span><i class="fa fa-plus"></i> Add New Event</span>
                    </div>

                    <div id="newEventForm">
                        <form action="#" method="post">
                        <label for="eventdate">Event Date</label>
                        <input type="text" id="eventdate">
                        <label for="eventtitle">Event Title</label>
                        <input type="text" name="eventtitle" id="eventtitle" maxlength="80"/>
                        <label for="eventdescription">Description</label>
                        <textarea name="eventdescripton" id="eventdescription">Event Description</textarea>
                        <button name="addevent" id="addEvent">Add New Event</button>
                        <button name="canceladdevent" id="canceladdevent">Cancel</button>
                        </form>
                    </div>

                    <ul id="upcomingEvents">
                        <li id="eventHolder">
                            <div class="event-date-holder">
                                <span id="dateNumber">23</span>
                                <span id="dateDay">Jan</span>
                            </div>
                            <div class="event-details-holder">
                                <h1>Akron Flea</h1>
                                <span id="eventDescription">Lorem ipsum dolar sit amet&hellip;</span>
                                <ul id="editTools">
                                    <li><i class="fa fa-pencil-square-o"></i></li>
                                    <li><i class="fa fa-bars"></i></li>
                                    <li><i class="fa fa-times" id="removeEvent"></i></li>
                                </ul>
                            </div>
                        </li>

                        <li id="eventHolder">
                            <div class="event-date-holder">
                                <span id="dateNumber">23</span>
                                <span id="dateDay">Jan</span>
                            </div>
                            <div class="event-details-holder">
                                <h1>Cleveland Flea</h1>
                                <span id="eventDescription">Lorem ipsum dolar sit amet&hellip;</span>
                                <ul id="editTools">
                                    <li><i class="fa fa-pencil-square-o"></i></li>
                                    <li><i class="fa fa-bars"></i></li>
                                    <li><i class="fa fa-times" id="removeEvent"></i></li>
                                </ul>
                            </div>
                        </li>

                        <li id="eventHolder">
                            <div class="event-date-holder">
                                <span id="dateNumber">23</span>
                                <span id="dateDay">Jan</span>
                            </div>
                            <div class="event-details-holder">
                                <h1>Columbus Flea</h1>
                                <span id="eventDescription">Lorem ipsum dolar sit amet&hellip;</span>
                                <ul id="editTools">
                                    <li><i class="fa fa-pencil-square-o"></i></li>
                                    <li><i class="fa fa-bars"></i></li>
                                    <li><i class="fa fa-times" id="removeEvent"></i></li>
                                </ul>
                            </div>
                        <li>
                    </ul>
                </div>
            </div>

</body>

</html>