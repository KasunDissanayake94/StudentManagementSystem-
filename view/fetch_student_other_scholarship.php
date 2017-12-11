<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "sms");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT student.index_no,student.first_name,student.last_name,student_scholar.schol_amount FROM student,student_scholar 
  WHERE (student.index_no=student_scholar.index_no)
  AND (student_scholar.schol_id=3)
  AND (student.index_no LIKE '%".$search."%'
  OR first_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%' 
  OR schol_amount LIKE '%".$search."%')

 ";
}
else
{
 $query = "SELECT student.index_no,student.first_name,student.last_name,student_scholar.schol_amount FROM student,student_scholar 
WHERE student.index_no=student_scholar.index_no AND student_scholar.schol_id=3";
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
    <td>'.$row["index_no"].'</td>
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