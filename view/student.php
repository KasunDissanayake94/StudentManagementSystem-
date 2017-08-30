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
        $lname=$user['last_name'];
        $area=$user['area'];
        $s_id=$user['s_id'];
        
    }
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>student</title>
  <link href="css/popup.css" rel="stylesheet">
  <script src="../view/js/popup.js"></script>
  <style>
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    float: left;
}

.container {
    padding: 0 16px;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}
#login-controls {
            margin: 0 auto;
            border: 1px solod #cc;
            padding: 50px;
            width: 300px;
            float: right;
        }
        #uname_check{
            width:220px;
        }

        .error-text{
            color: #eee;
        }
        #google-btn {
            margin: 0 auto;
            border: 1px solod #cc;
            padding: 5px;
            width: 300px;
            align-items: center;
            
        } 
        .button {background-color: #4C0050; 
                          border: none; 
                          color: white; 
                          padding:5px 30px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          font-size: 16px;     
                              }         
        .dropbtn{
             background-color: #4C0050;
             color: white;
             padding: 16px;
             font-size: 16px;
             border: none;
             cursor: pointer;
             margin-bottom:15px; 
         }

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color:#6e437b;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #4C0050}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #4C0050;
}

/*MODEL HERE*/


.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
  </style>
</head>
<body id="body" style="overflow:hidden;">

<p>
	you are logged as   <?php echo $_SESSION['username'] ?> .
  </br>
  <a href="../index.php?op=logout">Logout</a>
	</p>
  <?php if(@$_GET['err']==1){ ?>
        <div class ="error-text">Login incorrect</div>
    <?php } ?>

<!-- Student Profile here-->

<form id="student_profile" method="POST" action="../controller/student_controller.php">
  <div class="card">
  <img src="../view/images/<?php echo $s_id;?>.jpg"  style="width:100%">
  <div class="container">
    <h1><?php echo $fname ." ". $lname; ?></h1>
    <p class="title">Student</p>
    <p><?php echo $area; ?></p>
    
    <p>  
            <input class="button"  type="submit" name="op" value="Profile"><br>
        </p>
  </div>

</div>
</form>
<div id="login-controls">  

    <form  id="kasun" method="POST" action="../controller/student_controller.php">
        
        <input class="button"   type="submit" name="op" value="Events" /><br>     
        <p>  
            <input class="button"  type="submit" name="op" value="Medical Certificates"><br>
        </p> 
        <p>  
            <input class="button"  type="submit" name="op" value="TimeTable"><br>
        </p>

        

        
        
        
    
    <div class="dropdown">
        <button class="dropbtn">Acadamic Details</button>
        <div class="dropdown-content">
          <a href="../controller/student_controller.php?op=gpa">Calculate GPA >></a>
          <a href="#">Scholarship Details >></a>
          <a href="../pdffiles/scholarship_forms/schol.pdf">Scholarship Forms >></a>
          <a href="../pdffiles/medical_forms/med.pdf">Medical Forms >></a>
          <a href="#">Requesting Letters >></a>
          <a href="../pdffiles/season_forms/season.pdf">Season Forms >></a>

        </div>
        

 
    </div>
    <div class="dropdown">
        <button class="dropbtn">Examination Details</button>
        <div class="dropdown-content">
          <a href="../controller/admin_controller.php?op=schol">View Exam Grades</a>
          <a href="#">Repeat Subjects</a>
          <a href="#">Optinal Subjects</a>
          <a href="../pdffiles/x.pdf"></a>


        </div>
        
    
 
    </div>



    </form>
<div class="new">
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="#" id="form" method="post" name="form">
<img id="close" src="images/3.png" onclick ="div_hide()">
<h2>Send Us your Problems</h2>
<hr>
<input id="name" name="name" placeholder="Name" type="text">
<input id="email" name="email" placeholder="Email" type="text">
<textarea id="msg" name="message" placeholder="Message"></textarea>
<a href="javascript:%20check_empty()" id="submit">Send</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
</div>
<!-- Display Popup Button -->
<p>
  <input class="button"  type="submit"  value="Problems" id="popup" onclick="div_show()"><br>
</p>



                    

</body>
</html>