<?php
//fetch.php
session_start();
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

   <table class="table" >
    <tr>
     <th>Student ID</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Area</th>
     <th>School</th>
     <th>BirthDay</th>
     <th>Race</th>
     <th>Religion</th>
     <th>Gender</th>
     <th>View</th>
     <th>Edit</th>
     <th>Delete</th>
     
    </tr>
 ';
    while($row = mysqli_fetch_array($result))
    {
        $row_student_id=$row["s_id"];
        $output .= '   
    
   <tr>
    <td>'.$row["s_id"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["area"].'</td>
    <td>'.$row["school"].'</td>
    <td>'.$row["birthdate"].'</td>
    <td>'.$row["race"].'</td>
    <td>'.$row["religion"].'</td>
    <td>'.$row["gender"].'</td>
    <td id="'.$row["s_id"].'">
        <button class="btn btn-basic" data-toggle="modal" data-target="#v'.$row["s_id"].'"">View</button>
    </td>
    <td id="'.$row["s_id"].'">
        <button class="btn btn-basic" data-toggle="modal" data-target="#e'.$row["s_id"].'"">Edit</button>
    </td>
    <td id="'.$row["s_id"].'">
        <button class="btn btn-basic" data-toggle="modal" data-target="#d'.$row["s_id"].'"">Delete</button>
    </td>
    
   </tr>
   
       <!-- View Modal -->
    <div  id="v'.$row["s_id"].'" class="modal fade" role="dialog">
                <div class="modal-content">
                    <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Edit Form</h4>
                </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="../controller/admin_controller.php" method="post">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Username :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="username" value="'.$row_student_id.'" type="text" name="username" placeholder="Type Student ID here" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">First Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="firstname" value="'.$row["first_name"].'" type="text" name="firstname" placeholder="Type first name here" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Last Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="lastname" value="'.$row["last_name"].'" type="text" name="lastname" placeholder="Type last name here" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Area:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="area" value="'.$row["area"].'" name="area" placeholder="Enter area here" required disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email here" required disabled/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2">School :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="school" value="'.$row["school"].'" type="text" name="school" placeholder="Type school here" required disabled/>
                                </div>
                            </div>

                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label col-sm-2" for="date">Birthdate :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="'.$row["birthdate"].'" id="bday" name="bday" placeholder="MM/DD/YYY" type="text" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Race :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="race" value="'.$row["race"].'" type="text" name="race" placeholder="Valid your race here" required disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Religion :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="religion" value="'.$row["religion"].'" type="text" name="religion" placeholder="Type religion here" required disabled/>
                                </div>
                            </div>

                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label col-sm-2" for="date">Registered Date :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="regdate" value="'.$row["reg_date"].'" name="regdate" placeholder="MM/DD/YYY" type="text" required disabled/>
                                </div>
                            </div>
                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label col-sm-2" for="date">PassOut Date :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="passdate" value="'.$row["out_date"].'" name="passdate" placeholder="MM/DD/YYY" type="text" required disabled/>
                                </div>
                            </div>
                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label col-sm-2" for="date">Gender</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="passdate" value="'.$row["gender"].'" name="passdate" placeholder="MM/DD/YYY" type="text" required disabled/>
                                </div>
                            </div>
                            

                            <div class="modal-footer">
                                <button type="button" class="cancel" data-dismiss="modal">Close</button> 
                            </div>


                        </form>
                    </div>
                </div>
            </div>
       <!-- Edit Modal -->
    <div  id="e'.$row["s_id"].'" class="modal fade" role="dialog">
                <div class="modal-content">
                    <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Edit Form</h4>
                </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="../controller/admin_controller.php" method="post">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Username :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="username" type="text" name="username" placeholder="Type Student ID here" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">First Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="firstname" type="text" name="firstname" placeholder="Type first name here" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Last Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="lastname" type="text" name="lastname" placeholder="Type last name here" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Area:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="area" name="area" placeholder="Enter area here" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email here" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2">School :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="school" type="text" name="school" placeholder="Type school here" required />
                                </div>
                            </div>

                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label col-sm-2" for="date">Birthdate :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="bday" name="bday" placeholder="MM/DD/YYY" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Race :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="race" type="text" name="race" placeholder="Valid your race here" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Religion :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="religion" type="text" name="religion" placeholder="Type religion here" required/>
                                </div>
                            </div>

                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label col-sm-2" for="date">Registered Date :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="regdate" name="regdate" placeholder="MM/DD/YYY" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label col-sm-2" for="date">PassOut Date :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="passdate" name="passdate" placeholder="MM/DD/YYY" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Gender :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="gender">
                                        <option selected>Open this select menu</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="add-project" name="op" value="Add Student">Edit </button>
                                <button type="button" class="cancel" data-dismiss="modal">Close</button> 
                            </div>


                        </form>
                    </div>
                </div>
            </div>
   
       <!-- Delete Modal -->
           <div class="modal fade" id="d'.$row["s_id"].'" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Edit Form</h4>
                </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this data?</p>
            </div>
            <div class="modal-footer">
            <a href="../controller/admin_controller.php?delete_id='.$row_student_id.'"><button type="button" class="add-project">Yes</button> </a>
                                               
                        <button type="button" class="cancel" data-dismiss="modal">No</button>                        
                    </div>
          </div>
          
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