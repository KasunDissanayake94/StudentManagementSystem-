<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "sms");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM scholarship 
  WHERE name LIKE '%".$search."%'
  OR indexno LIKE '%".$search."%' 
  OR course LIKE '%".$search."%' 
  OR schol_type LIKE '%".$search."%' 
  OR schol_amount LIKE '%".$search."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM scholarship 
  WHERE schol_type='Mahapola'
  ORDER BY indexno
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '

   <table class="table" >
    <tr>
     <th>Name</th>
     <th>Index No</th>
     <th>Course</th>
     <th>Scholarship Amount</th>
     </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '


    
    
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["indexno"].'</td>
    <td>'.$row["course"].'</td>
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