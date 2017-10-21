<?php
/**
 * Created by PhpStorm.
 * User: Kasun Dissanayake
 * Date: 10/15/2017
 * Time: 9:38 PM
 */

$connect = mysqli_connect("localhost", "root", "", "sms");


$output = "";
$data = $_GET['searchData'];

$query2 = "";

if($data == "")
{
    $query2 = "SELECT * FROM student";
}
else
{
    $query2 = "SELECT * FROM student WHERE first_name LIKE '%".$data."%'";
}

$result2 = mysqli_query($connect,$query2);

if(mysqli_num_rows($result2)>0)
{
    while($rows = mysqli_fetch_assoc($result2))
    {
        $first_name=($rows['first_name']);
        $last_name=($rows['last_name']);
        $s_id=($rows['s_id']);
        $i_image=($rows['stu_image']);
        $link= '../view/images/profile_pic/'.$s_id.'.jpg';
        $more_link='../view/more.php';
        echo "<div class=\"member\" style='display: inline-block;
     width:20%;
     vertical-align: top;
     text-align:center;'>
    <br><br>
    <img style=\"margin: 0 10px 0 0;\" src=".$link. " alt=\"Click the link to see more info\"  />
    <div class=\"name\">
        <h4 style=\"font-size: 20px\" class=\"card-title\">
        $first_name

        </h4>
        <p style=\"font-size:15px\"  class=\"card-text\">$last_name</p>
        <p style=\"color: #003399; font-size: 15px\"  class=\"card-text\"><a href=".$more_link.">more</a></p>
    </div>
    <br><br>


</div>";

    }
}
else
{
    echo "No Students found";
}


?>



