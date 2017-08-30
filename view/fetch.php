<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "sms");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM student 
  WHERE s_id LIKE '%".$search."%'
  OR first_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%' 
  OR area LIKE '%".$search."%' 
  OR gender LIKE '%".$search."%' 
  OR school LIKE '%".$search."%' 
  OR birthdate LIKE '%".$search."%' 
  OR race LIKE '%".$search."%' 
  OR last_login LIKE '%".$search."%' 
  OR reg_date LIKE '%".$search."%' 
  OR out_date LIKE '%".$search."%' 
  OR religion LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM student ORDER BY s_id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '

   <table class="masterlist" >
    <tr>
     <th>Student ID</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Last Login</th>
     <th>Area</th>
     <th>School</th>
     <th>BirthDay</th>
     <th>Race</th>
     <th>Religion</th>
     <th>Reg Date</th>
     <th>Out Date</th>
     <th>Gender</th>
     <th>Edit</th>
     <th>Delete</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '


    
    
   <tr>
    <td>'.$row["s_id"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["last_login"].'</td>
    <td>'.$row["area"].'</td>
    <td>'.$row["school"].'</td>
    <td>'.$row["birthdate"].'</td>
    <td>'.$row["race"].'</td>
    <td>'.$row["religion"].'</td>
    <td>'.$row["reg_date"].'</td>
    <td>'.$row["out_date"].'</td>
    <td>'.$row["gender"].'</td>
    <td id="c22">
        <button id="btn2" onclick="btn1Call(event);">Edit</button>
    </td>
      <td id="c22">
        <button id="btn2" onclick="btn2Call(event);">Delete</button>
    </td>
    
   </tr>

  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Form</title>
  <style>
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #6f0d89;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: red;
    
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container1 {
    padding: 30px;
    background-color: white;
    margin-right: 200px;
    margin-left: 200px;    
    margin-bottom: 500px;
    

    
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    background-color: black;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
     margin: 0.0001% auto 1% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}


.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
  </style>  
</head>
<body>

<div id="id02" class="modal">  
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="/action_page.php">
    <div class="container1">
      <h2>Delete Record</h2>
      <br><b>Are you sure you wish to remove this record? </b><br><br>



      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Delete</button>
      </div>
    </div>
  </form>
</div>


  
  <div id="id01" class="modal">  
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="/action_page.php">
    <div class="container1">
      <h2>Update Record</h2>
      <label><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="email" required>

      <label><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="email" required>

      <label><b>School</b></label>
      <input type="text" placeholder="Enter School" name="email" required>

      <label><b>Birth Date</b></label>
      <input type="text" placeholder="Enter DOB" name="email" required>

      <label><b>Race</b></label>
      <input type="text" placeholder="Enter Race" name="email" required>

      <label><b>Religion</b></label>
      <input type="text" placeholder="Enter Religion" name="email" required>

      <label><b>Reg Date</b></label>
      <input type="text" placeholder="Enter Reg Date" name="email" required>

      <label><b>Out Date</b></label>
      <input type="text" placeholder="Enter Pass Out Date" name="email" required>

      <label><b>Gender</b></label>
      <input type="text" placeholder="Select Gender" name="email" required>



      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Update</button>
      </div>
    </div>
  </form>
</div>





</body>
</html>
<script>
    function btn2Call(e) {
    document.getElementById('id02').style.display='block';
       
}
function btn1Call(e) {
    document.getElementById('id01').style.display='block';
    }
</script>