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



