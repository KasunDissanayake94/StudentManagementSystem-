<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "sms");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT student.s_id,student.first_name,student.last_name,student_scholar.schol_amount FROM student,student_scholar 
  WHERE (student.s_id=student_scholar.s_id)
  AND (student_scholar.schol_id=2)
  AND (student.s_id LIKE '%".$search."%'
  OR first_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%' 
  OR schol_amount LIKE '%".$search."%')
 ";
}
else
{
 $query = "
  SELECT student.s_id,student.first_name,student.last_name,student_scholar.schol_amount FROM student,student_scholar 
WHERE student.s_id=student_scholar.s_id AND student_scholar.schol_id=2
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
     <th>Scholarship Amount</th>
     </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '


    
    
   <tr>
    <td>'.$row["s_id"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["schol_amount"].'</td>
    
   
    
   </tr>

  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}