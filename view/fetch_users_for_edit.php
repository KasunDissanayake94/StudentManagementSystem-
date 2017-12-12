<?php
/**
 * Created by PhpStorm.
 * User: Kasun Dissanayake
 * Date: 12/8/2017
 * Time: 8:40 PM
 */

session_start();
$connect = mysqli_connect("localhost", "root", "", "sms");
$output = '';

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM user 
  WHERE username LIKE '%".$search."%'
  OR first_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%' 
  OR nic LIKE '%".$search."%' 
  OR type LIKE '%".$search."%' 
   

 ";
}
else
{
    $query = "
  SELECT * FROM user ORDER BY username
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= '


   <table class="table" >
    <tr>
     <th>User Name</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>NIC</th>
     <th>Type</th>
     <th>Edit</th>
     
     
    </tr>
 ';
    while($row = mysqli_fetch_array($result))
    {
        $username=$row["username"];
        $user_id=$row["id"];
        $output .= '
   
    
   <tr>
    <td>'.$row["username"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["nic"].'</td>
    <td>'.$row["type"].'</td>

    <td id="'.$row["username"].'">
        <button class="btn btn-basic" data-toggle="modal""><a href="../controller/admin_controller.php?edit_id='.$row["id"].'">Edit</a></button>
    </td>

    
   </tr>
   


       <!-- Edit Modal -->
    <div  id="e'.$row["nic"].'" class="modal fade" role="dialog">
                <div class="modal-content">
                    <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Edit Form</h4>
                </div>
                    <div class="modal-body">
                        <form id="userForm" class="form-horizontal" action="../controller/admin_controller.php" method="post">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Username :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="username" value="'.$username.'" type="text" name="username" placeholder="Type Student ID here" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">First Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="firstname" value="'.$row["first_name"].'" type="text" name="firstname" placeholder="Type first name here" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Last Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="lastname" value="'.$row["last_name"].'" type="text" name="lastname" placeholder="Type last name here" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="area" value="'.$row["nic"].'" name="area" placeholder="Enter area here" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Type :</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" value="'.$row["type"].'" id="email" name="email" placeholder="Enter email here" required />
                                </div>
                            </div>


                            
                            

                            <div class="modal-footer">
                                <button type="button"  class="add-project" data-dismiss="modal">Edit</button> 
                                <button type="button"  class="cancel" data-dismiss="modal">Close</button> 
                                
                            </div>


                        </form>
                    </div>
                </div>
            </div>


  ';
    }
    echo $output;
}
else
{
    echo 'Data Not Found';
}
