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


        echo" 
          
          
            <img  src=".$rows['stu_image']. " style=\"width:19%\">
            <br>
            <h1>Name</h1>
            ";
    }
}

else
{
    echo "No doctors found";
}


?>