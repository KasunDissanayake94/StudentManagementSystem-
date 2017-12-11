<?php
//fetch.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "sms");
$output = "";
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM student 
  WHERE s_id LIKE '%".$search."%'
  OR first_name LIKE '%".$search."%'
  OR mid_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%'  
  OR school LIKE '%".$search."%' 
  OR birthdate LIKE '%".$search."%' 
  OR race LIKE '%".$search."%'
  OR religion LIKE '%".$search."%' 
  OR reg_date LIKE '%".$search."%' 
  OR out_date LIKE '%".$search."%'
  OR gender LIKE '%".$search."%' 
  OR religion LIKE '%".$search."%'
  OR nic LIKE '%".$search."%'
 ";
}
else
{
    $query = "
  SELECT * FROM student ORDER BY s_id
 ";
}
$result2 = mysqli_query($connect,$query);

if(mysqli_num_rows($result2)>0)
{
    while($rows = mysqli_fetch_assoc($result2))
    {
        $first_name=($rows['first_name']);
        $last_name=($rows['last_name']);
        $s_id=($rows['s_id']);
        $nic=($rows['nic']);
        $i_image=($rows['stu_image']);
        $link= '../view/images/profile_pic/'.$nic.'.jpg';
        //Call the admin controller calss to get the more information about the student
        $more_link='../controller/admin_controller?student_id='.$s_id;
        echo "<div class=\"member\" style='float:left;
    width:210px;
    height:350px;
    background:#fff;
    padding:3px;
    margin-right:3px;
    margin-left:3px;
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
else
{
    echo "No Students found";
}


?>



