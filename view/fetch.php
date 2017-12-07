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
     
    </tr>
 ';
    while($row = mysqli_fetch_array($result))
    {
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
    <td id="c22">
        <button class="btn btn-basic" data-toggle="modal" data-target="#view"">View</button>
    </td>
    <td id="c23">
        <button class="btn btn-basic" data-toggle="modal" data-target="#edit"">Edit</button>
    </td>
    <td id="c24">
        <button class="btn btn-basic" data-toggle="modal" data-target="#delete"">Delete</button>
    </td>
    
   </tr>
   
       <!-- View Modal -->
    <div id="view" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">View Results</h4>
                </div>
                <form action="../controller/lecturer_controller.php" method="post" class="modal-body">
                    <div class="form-group">
                        <label>Academic year</label>
                        <select class="form-control" name="year">
                          <option value="2013/2014">2013/2014</option>
                          <option value="2014/2015">2014/2015</option>
                          <option value="2015/2016">2015/2016</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <select class="form-control" name="subject">
                            <option>select subject code
                                
                              
                             </option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Close</button>                        
                    </div>
                </form>
                
                
            </div>

        </div>
    </div>
       <!-- Edit Modal -->
    <div id="edit" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Edit Form</h4>
                </div>
                <form action="../controller/lecturer_controller.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label>Academic year</label>
                        <select class="form-control" name="year">
                          <option value="2013/2014">2013/2014</option>
                          <option value="2014/2015">2014/2015</option>
                          <option value="2015/2016">2015/2016</option>
                        </select>
                    </div>
                    

                    <div class="form-group">
                        <label>Subject</label>
                        <select class="form-control" name="subject">
                            <option>select subject code
                                
                              
                             </option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Close</button>
                        <button type="submit" class="add-project" name="op" value="add_final_results">Add</button>
                    </div>
                </form>
                
                
            </div>

        </div>
    </div>
   
       <!-- Delete Modal -->
       
  <!-- Modal -->
  <div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Edit Form</h4>
                </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form">
          <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div><div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div><div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div><div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div><div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">First Name:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div><div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control"
                            id="inputPassword3" placeholder="Password"/>
                    </div>
                  </div>
                  
                  
                  
                  <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Close</button>
                        <button type="submit" class="add-project" name="op" value="add_final_results">Add</button>
                    </div>
                </form>
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