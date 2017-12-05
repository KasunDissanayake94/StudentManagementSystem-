<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Kasun Dissanayake
 * Date: 12/4/2017
 * Time: 5:42 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>New Search Student</title>
    <style type="text/css">

        a {
            text-decoration: none;
            display: inline-block;
            padding: 2px 2px;
        }
        .member {
            display: inline-block;
            width:20%;
            vertical-align: top;
            text-align:center;
        }
        .name {
            display: inline;
        }
        .member img {
            width: 250px;
            height:180px;
            display: block;
        }

        a:hover {
            background-color: #ddd;
            color: black;
        }
        .fname {
            float: right;

        }
        .next {
            background-color: #4CAF50;
            color: white;
        }
        .wrap {
            width: 100%;
            overflow:auto;
        }

        .fleft {
            float:left;
            width: 20%;
            background:#F0F555;
            height: 100%;
            padding-right: 1%;
        }

        .topic{
            padding-left: 10px;
        }
        .fright {
            float: right;
            background:#C696DA;
            height: 100%;
            width: 79%;

        }
        .fright h1{
            text-align: center;
        }
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

        body{
            background: #f2f2f2;
            font-family: 'Open Sans', sans-serif;
        }
        body h1{
            text-align: center;
        }
        .onclick-menu {

            float: left;
        }
        .onclick-menu:before {
            padding: 10px;
            content: "Search by Category";
        }
        .onclick-menu:focus .onclick-menu-content {
            display: block;
        }
        .onclick-menu-content {
            position: absolute;
            z-index: 1;
            background-color: white;
            width: 40%;
            display: none;
        }

        .search {
            width: 80%;
            float: right;
            position: relative
        }

        .searchTerm {
            float: left;
            width: 80%;
            border: 3px solid #55256B;
            padding: 5px;
            height: 20px;
            border-radius: 5px;
            outline: none;
            color: #55256B;
        }

        .searchTerm:focus{
            color: #55256B;
        }

        .searchButton {
            position: absolute;
            right: 150px;
            width: 40px;
            height: 36px;
            border: 1px solid #55256B;
            background: #55256B;
            text-align: left;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }
        .tableform{
            width:90%;
            height:1200px;
            margin:30px auto;
            border:1px solid silver;
            background:white;
            border-radius:0.3em;
            box-shadow:0 0 5px rgba(0,0,0,0.3);
            padding:20px;


        }

        /* Style show more show less field */
        .read-more-state {
            display: none;
        }

        .read-more-target {
            opacity: 0;
            max-height: 0;
            font-size: 0;
            transition: .25s ease;
        }

        .read-more-state:checked ~ .read-more-wrap .read-more-target {
            opacity: 1;
            font-size: inherit;
            max-height: 999em;
        }

        .read-more-state ~ .read-more-trigger:before {
            content: 'Show more';
        }

        .read-more-state:checked ~ .read-more-trigger:before {
            content: 'Show less';
        }

        .read-more-trigger {
            cursor: pointer;
            display: inline-block;
            padding: 0 .5em;
            color: #666;
            font-size: .9em;
            line-height: 2;
            border: 1px solid #ddd;
            border-radius: .25em;
        }

    </style>
    <!-- Script files here -->
    <script src="../view/js/jquery.js"></script>
    <script src="../view/js/jquery-migrate-1.1.1.js"></script>
    <script src="../view/js/jquery.easing.1.3.js"></script>
    <script src="../view/js/script.js"></script>
    <script src="../view/js/superfish.js"></script>
    <script src="../view/js/jquery.equalheights.js"></script>
    <script src="../view/js/jquery.mobilemenu.js"></script>
    <script src="../view/js/tmStickUp.js"></script>
    <script src="../view/js/jquery.ui.totop.js"></script>


</head>
<body>


<div class="wrap">
    <!--Updated on 10/8/2016; fixed center alignment percentage-->
    <div class="fleft">
        <h1>Categories</h1>
        <div class="topic">
            <h2>All</h2>
            <h3>Student</h3>
            <ul>
                <li><input  type="checkbox" name="main"><label>First Name</label><br></li>
                <li><input  type="checkbox" name="main"><label>Last Name</label><br></li>
            </ul>

            <div>
                <input type="checkbox" class="read-more-state" id="post-2" />

                <ul class="read-more-wrap">
                    <li  class="read-more-target"><input type="checkbox" name="main">Race</li>
                    <li  class="read-more-target"><input type="checkbox" name="main">Religion</li>
                    <li  class="read-more-target"><input type="checkbox" name="main">Date of Birth</li>
                    <li  class="read-more-target"><input type="checkbox" name="main">Registered Date</li>
                    <li  class="read-more-target"><input type="checkbox" name="main">Pass out Date</li>
                    <li  class="read-more-target"><input type="checkbox" name="main">Gender</li>
                </ul>

                <label for="post-2" class="read-more-trigger"></label>
            </div>
            <h3>Course</h3>
            <ul>
                <li><input  type="checkbox" name="main"><label>Course Name</label><br></li>
                <li><input  type="checkbox" name="main"><label>Course Code</label><br></li>
            </ul>

            <div>
                <input type="checkbox" class="read-more-state" id="post-3" />

                <ul class="read-more-wrap">
                    <li  class="read-more-target"><input type="checkbox" name="main">Course Year</li>
                    <li  class="read-more-target"><input type="checkbox" name="main">Credits</li>
                    <li  class="read-more-target"><input type="checkbox" name="main">Description</li>

                </ul>

                <label for="post-3" class="read-more-trigger"></label>
            </div>


            <hr>
            <!--*****************************Student Details *****************************-->
            <h2>Student</h2>

            <b>First Name :</b><input type="text" class="fname" name="first_name" value="" placeholder=" first name here"><br><br>
            <b>Last Name :</b><input type="text" class="fname" name="first_name" value="" placeholder=" last name here"><br><br>
            <b>Race :</b><input type="text" class="fname" name="first_name" value="" placeholder=" race here"><br><br>
            <b>Religion :</b><input type="text" class="fname" name="first_name" value="" placeholder=" religion here"><br><br>
            <b>School :</b><input type="text" class="fname" name="first_name" value="" placeholder=" school here"><br><br>

            <br>
            <b>Register Date :</b><br>
            <input type="date" name="date" value="startdate" > to now  <a href="#" class="next"> &raquo;</a>
            <br><br>
            <b>Pass out Date :</b><br>
            <input type="date" name="date" value="startdate" > to now <a href="#" class="next"> &raquo;</a>
            <br><br>
            <b>Date of Birth :</b><br>
            <input type="date" name="date" value="startdate" > to <input type="date" name="lastdate"><a href="#" class="next"> &raquo;</a><br><br>

            <hr>
            <!--****************************Course Details****************************** -->
            <h2>Course</h2>
            <b>Course Name :</b><input type="text" class="fname" name="first_name" value="" placeholder=" course name here"><br><br>
            <b>Course Code :</b><input type="text" class="fname" name="first_name" value="" placeholder=" course code here"><br><br>
            <b>Corse Year :</b>
            <select>
                <option value="volvo">1st</option>
                <option value="saab">2nd</option>
                <option value="opel">3rd</option>
                <option value="audi">4th</option>

            </select>
            <br><br>

            <b>Credit :</b>
            <select>
                <option value="volvo">A+</option>
                <option value="saab">A</option>
                <option value="opel">A-</option>
                <option value="audi">B+</option>
                <option value="volvo">B</option>
                <option value="saab">B-</option>
                <option value="opel">C+</option>
                <option value="audi">C</option>
                <option value="volvo">C-</option>
                <option value="saab">W</option>
            </select>
            <br><br>
            <hr>
            <!--********************Degree Details*************************** -->
            <h2>Degree</h2>
            <b> Degree Name <b>
                    <select>
                        <option value="volvo">CS</option>
                        <option value="saab">IS</option>

                    </select><br><br>


                    <hr>
                    <!--*****************************Hostel Details************************* -->
                    <h2>Hostel</h2>
                    <!--Pick a start date -->
                    Start Date :<br>
                    <input type="date" name="date" value="startdate" > to now  <a href="#" class="next"> &raquo;</a>
                    <br><br>
                    <!--Pick an end date -->
                    End Date :<br>
                    <input type="date" name="date" value="startdate" > to now <a href="#" class="next"> &raquo;</a>
                    <br><br>
                    <hr>
                    <!--*********************************Scholarship Details*****************************-->
                    <h2>Scholarship</h2>
                    <!-- Choose the kind of scholarship -->
                    <b>Scholarship Name :</b>
                    <select>
                        <option value="volvo">Bursary</option>
                        <option value="saab">Mahapola</option>
                        <option value="opel">IFS</option>
                        <option value="audi">Other</option>

                    </select>
                    <br><br>
                    <hr>
                    <!--********************************Area Details****************************** -->
                    <h2>Student Area</h2>
                    <!-- Enter area details -->
                    Number :<input type="text" class="fname" name="first_name" value="" placeholder=" street number  here"><br><br>
                    Street :<input type="text" class="fname" name="first_name" value="" placeholder=" street name here"><br><br>
                    Area :<input type="text" class="fname" name="first_name" value="" placeholder=" area here"><br><br>
        </div>

    </div>
    <!--Right hand side menu -->
    <div class="fright">
        <h1>Search Students </h1>

        <br>
        <div class="wrap">
            <div tabindex="0" class="onclick-menu">&nabla;
                <ul class="onclick-menu-content">
                    <form>
                        <p>Student</p>
                        <ul>
                            <li><a href="#">First Name</a></li>
                            <li><a href="#">Last Name</a></li>
                            <li><a href="#">Religion</a></li>
                            <li><a href="#">Race</a></li>
                            <li><a href="#">Date of Birth</a></li>
                        </ul>
                        <p>Course</p>
                        <ul>
                            <li><a href="#">First Name</a></li>
                            <li><a href="#">Last Name</a></li>
                            <li><a href="#">Religion</a></li>
                            <li><a href="#">Race</a></li>
                            <li><a href="#">Date of Birth</a></li>
                        </ul>
                        <p>Degree</p>
                        <ul>
                            <li><a href="#">First Name</a></li>
                            <li><a href="#">Last Name</a></li>
                            <li><a href="#">Religion</a></li>
                            <li><a href="#">Race</a></li>
                            <li><a href="#">Date of Birth</a></li>
                        </ul>
                    </form>
                </ul>
            </div>

            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?" id="search">
                <button type="submit" class="searchButton">

                </button>
            </div>
            <br>
            <br>
            <div class="tableform">
                <h1>Filter Details</h1>
                <div class="live_search" id="live_search">

                    <?php

                    if(isset($_SESSION['value'])){
                        foreach ($_SESSION['value'] as $user) {
                            $first_name=($user['first_name']);
                            $last_name=($user['last_name']);
                            $s_id=($user['s_id']);
                            $i_image=($user['stu_image']);
                            $link= '../view/images/profile_pic/'.$s_id.'.jpg';
                            //Call the admin controller calss to get the more information about the student
                            $more_link='../controller/admin_controller?student_id='.$s_id;
                            echo "<div class=\"member\" style='float:left;
                                width:200px;
                                height:350px;
                                background:#fff;
                                padding:3px;
                                margin-right:3px;
                                -moz-box-shadow: 1px 2px 2px #ccc;
                                -webkit-box-shadow: 1px 2px 2px #ccc;
                                box-shadow: 1px 2px 2px #ccc;'>
                                
                                <br><br>
                                <img style=\"width: 200px;\" src=".$link. " alt=\"Click the link to see more info\"  />
                                <div class=\"name\">
                                    <h4 style=\"font-size: 20px\" class=\"card-title\">
                                    $first_name $last_name
                                    </h4>
                                    <p style=\"font-size:15px\"  class=\"card-text\"></p>
                                    <p style=\"color: #003399; font-size: 15px\"  class=\"card-text\"><a href=".$more_link.">More Information</a></p>
                                </div>          
                        
                                 </div>";


                        }
                                echo "<br>";
                    }

                    ?>









                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>
<script>
    $(document).ready(function()
    {
        $('#search').keyup(function()
        {
            var txt = document.getElementById('search').value;
            var txt2 = "";


            $.ajax(
                {
                    url:"../view/fetch1.php",
                    method:"get",
                    data:{searchData:txt},
                    dataType:"text",
                    success:function(data)
                    {
                        $('#live_search').html(data);
                    }
                });

        });
    });
</script>


