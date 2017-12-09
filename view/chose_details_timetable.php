
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Creating a Acadamic Timetable </title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../view/css/style2.css">
    <link rel="stylesheet" type="text/css" href="../view/css/style1.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="test/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../view/css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../view/css/style1.css">
    <script type="text/javascript" src="../view/js/main.js"></script>
    <style type="text/css">

        h1{
            text-align: center;
        }
        .con{
            margin-top: 60px;
            margin-left: 300px;
        }
        .left{
            width:120px;
            float:left;
        }
        .left table{
            background:#E0ECFF;
        }
        .left td{
            background:#eee;
        }
        .right{
            float:right;
            width:570px;
        }
        .right table{
            background:#E0ECFF;
            width:100%;
        }
        .right td{
            background:#fafafa;
            color:#444;
            text-align:center;
            padding:2px;
        }
        .right td{
            background:#E0ECFF;
        }
        .right td.drop{
            background:#fafafa;
            width:100px;
        }
        .right td.over{
            background:#FBEC88;
        }
        .item{
            text-align:center;
            border:1px solid #499B33;
            background:#fafafa;
            color:#444;
            width:100px;
        }
        .assigned{
            border:1px solid #BC2A4D;
        }
        .trash{
            background-color:red;
        }
        .add-project{
            float: right;
        }

    </style>
</head>
<body>

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

        <div class="con">
            <div style="width:700px;">
                <div class="left">
                    <table>
                        <tr>
                            <td><div class="item">SCS1107</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">SCS1108</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">SCS1109</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">SCS1110</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">SCS1111</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">SCS1112</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">ENH1102</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">OTHER</div></td>
                        </tr>
                    </table>
                    <br>
                    <!-- LECTURERS NAMES -->
                    <table>
                        <tr>
                            <td><div class="item">Lecture 1</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">Lecture 2</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">Lecture 3</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">Lecture 4</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">Lecture 5</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">Lecture 6</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">Lecture 7</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">OTHER</div></td>
                        </tr>
                    </table>
                    <!-- PLACE-->
                    <br>
                    <table>
                        <tr>
                            <td><div class="item">W002</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">W001</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">MINI AUD</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">4TH FLOOR</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">LAB A&B&C</div></td>
                        </tr>
                        <tr>
                            <td><div class="item">LAB A&B</div></td>
                        </tr>

                    </table>
                </div>
                <div class="right">
                    <table>
                        <tr>
                            <td class="blank"></td>
                            <td class="title">Monday</td>
                            <td class="title">Tuesday</td>
                            <td class="title">Wednesday</td>
                            <td class="title">Thursday</td>
                            <td class="title">Friday</td>
                        </tr>
                        <tr>
                            <td class="time">08:00</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Lec</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Place</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">09:00</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Lec</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Place</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">10:00</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Lec</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Place</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">11:00</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Lec</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Place</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">12:00</td>
                            <td class="lunch" colspan="5">Lunch</td>
                        </tr>
                        <tr>
                            <td class="time">13:00</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>


                        <tr>
                            <td class="time">Lec</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Place</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>

                        <tr>
                            <td class="time">14:00</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Lec</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Place</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">15:00</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Lec</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Place</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">16:00</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Lec</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>
                        <tr>
                            <td class="time">Place</td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                            <td class="drop"></td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>



<script>
    $(function(){
        $('.left .item').draggable({
            revert:true,
            proxy:'clone'
        });
        $('.right td.drop').droppable({
            onDragEnter:function(){
                $(this).addClass('over');
            },
            onDragLeave:function(){
                $(this).removeClass('over');
            },
            onDrop:function(e,source){
                $(this).removeClass('over');
                if ($(source).hasClass('assigned')){
                    $(this).append(source);
                } else {
                    var c = $(source).clone().addClass('assigned');
                    $(this).empty().append(c);
                    c.draggable({
                        revert:true
                    });
                }
            }
        });
        $('.left').droppable({
            accept:'.assigned',
            onDragEnter:function(e,source){
                $(source).addClass('trash');
            },
            onDragLeave:function(e,source){
                $(source).removeClass('trash');
            },
            onDrop:function(e,source){
                $(source).remove();
            }
        });
    });
</script>
</body>
</html>