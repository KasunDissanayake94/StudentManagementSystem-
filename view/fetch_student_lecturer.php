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
  OR gender LIKE '%".$search."%' 
  OR school LIKE '%".$search."%' 
  OR birthdate LIKE '%".$search."%' 
  OR race LIKE '%".$search."%' 
  OR religion LIKE '%".$search."%' 
  OR gender LIKE '%".$search."%' 
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

   <table class="table" >
    <tr>
     <th>Student ID</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>School</th>
     <th>BirthDay</th>
     <th>Race</th>
     <th>Religion</th>
     <th>Gender</th>

    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '


    
    
   <tr>
    <td>'.$row["s_id"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["school"].'</td>
    <td>'.$row["birthdate"].'</td>
    <td>'.$row["race"].'</td>
    <td>'.$row["religion"].'</td>
    <td>'.$row["gender"].'</td>

    
   </tr>

  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}