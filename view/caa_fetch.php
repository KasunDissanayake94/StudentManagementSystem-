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
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= "

   <table class='table' >
    <tr>
     <th>Student ID</th>
     <th>First Name</th>
     <th>Mid Name</th>
     <th>Last Name</th>
     <th>School</th>
     <th>BirthDay</th>
     <th>Race</th>
     <th>Religion</th>
     <th>Register Date</th>
     <th>Pass Out Date</th>
     <th>Gender</th>
     <th>NIC</th>
     <th>View</th>
     <th>Delete</th>
     
    </tr>
 ";
    while($row = mysqli_fetch_array($result))
    {
        $row_student_id=$row['s_id'];
        $output .= "   
    
   <tr>
    <td>".$row['s_id']."</td>
    <td>".$row['first_name']."</td>
    <td>".$row['mid_name']."</td>
    <td>".$row['last_name']."</td>
    <td>".$row['school']."</td>
    <td>".$row['birthdate']."</td>
    <td>".$row['race']."</td>
    <td>".$row['religion']."</td>
    <td>".$row['reg_date']."</td>
    <td>".$row['out_date']."</td>
    <td>".$row['gender']."</td>
    <td>".$row['nic']."</td>
    <td id='".$row['s_id']."'>
        <button class='btn btn-basic' data-toggle='modal' data-target='#v".$row['s_id']."''>View</button>
    </td>

    <td id='".$row['s_id']."'>
        <button class='btn btn-basic' data-toggle='modal' data-target='#d".$row['s_id']."''>Delete</button>
    </td>
    
   </tr>
   
       <!-- View Modal -->
    <div  id='v".$row['s_id']."' class='modal fade' role='dialog'>
                <div class='modal-content'>
                    <div class='modal-header login-header'>
                    <button type='button' class='close' data-dismiss='modal'>×</button>
                    <h4 class='modal-title'>Edit Form</h4>
                </div>
                    <div class='modal-body'>
                        ";

        $output .= "<form class='form-horizontal' role='form' id='formView' name='formView' action='../controller/admin_controller.php' method='post'>";

        $output .="<div class='form-group'>
                                <label class='control-label col-sm-2'>Username :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='username' value='".$row_student_id."' type='text' name='username' placeholder='Type Student ID here' required disabled/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-sm-2'>First Name :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='firstname' value='".$row['first_name']."' type='text' name='firstname' placeholder='Type first name here' required disabled/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-sm-2'>Mid Name :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='misname' value='".$row['mid_name']."' type='text' name='midname' placeholder='Type last name here' required disabled/>
                                </div>
                            </div>
                            

                            <div class='form-group'>
                                <label class='control-label col-sm-2' for='lastname'>Last Name:</label>
                                <div class='col-sm-10'>
                                    <input form='formView' type='text' class='form-control' id='lastname' name='lastname' value='".$row['last_name']."' placeholder='Enter email here' required disabled/>
                                </div>
                            </div>


                            <div class='form-group'>
                                <label class='control-label col-sm-2'>School :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='school' value='".$row['school']."' type='text' name='school' placeholder='Type school here' required disabled/>
                                </div>
                            </div>

                            <div class='form-group'> <!-- Date input -->
                                <label class='control-label col-sm-2' for='date'>Birthdate :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' value='".$row['birthdate']."' id='bday' name='bday' placeholder='MM/DD/YYYY' type='text' required disabled/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-sm-2'>Race :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='race' value='".$row['race']."' type='text' name='race' placeholder='Valid your race here' required disabled/>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-sm-2'>Religion :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='religion' value='".$row['religion']."' type='text' name='religion' placeholder='Type religion here' required disabled/>
                                </div>
                            </div>

                            <div class='form-group'> <!-- Date input -->
                                <label class='control-label col-sm-2' for='date'>Registered Date :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='regdate' value='".$row['reg_date']."' name='regdate' placeholder='MM/DD/YYYY' type='text' required disabled/>
                                </div>
                            </div>
                            <div class='form-group'> <!-- Date input -->
                                <label class='control-label col-sm-2' for='date'>PassOut Date :</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='passdate' value='".$row['out_date']."' name='passdate' placeholder='MM/DD/YYYY' type='text' required disabled/>
                                </div>
                            </div>
                            <div class='form-group'> <!-- Date input -->
                                <label class='control-label col-sm-2' for='date'>Gender</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='passdate' value='".$row['gender']."' name='passdate' placeholder='MM/DD/YYYY' type='text' required disabled/>
                                </div>
                            </div>
                            <div class='form-group'> <!-- Date input -->
                                <label class='control-label col-sm-2' for='date'>Gender</label>
                                <div class='col-sm-10'>
                                    <input form='formView' class='form-control' id='passdate' value='".$row['nic']."' name='passdate' placeholder='MM/DD/YYYY' type='text' required disabled/>
                                </div>
                            </div>
                            

                            <div class='modal-footer'>
                                <button form='formView' type='button' class='cancel' data-dismiss='modal'>Close</button> 
                            </div>


                        </form>
                    </div>
                </div>
            </div>
       <!-- Edit Modal -->
    <div  id='e".$row['s_id']."' class='modal fade' role='dialog'>
                <div class='modal-content'>
                    <div class='modal-header login-header'>
                    <button type='button' class='close' data-dismiss='modal'>×</button>
                    <h4 class='modal-title'>Edit Form</h4>
                </div>
                    <div class='modal-body'>";

        $output .= "<form class='form-horizontal' role='form' id='formEdit' name='formEdit' action='../controller/admin_controller.php' method='post'>";

        $output .= "<div class='form-group'>
                                <label class='control-label col-sm-2'>Username :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='username".$row['s_id']."' value='".$row_student_id."' type='text' name='username' placeholder='Type Student ID here' required />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-sm-2'>First Name :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='firstnameEdit' value='".$row['first_name']."' type='text' name='firstname' placeholder='Type first name here' required />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-sm-2'>Last Name :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='lastnameEdit' value='".$row['last_name']."' type='text' name='lastname' placeholder='Type last name here' required />
                                </div>
                            </div>
                            

                            <div class='form-group'>
                                <label class='control-label col-sm-2' for='email'>Email:</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' type='email' class='form-control' id='emailEdit' name='email' placeholder='Enter email here' required>
                                </div>
                            </div>


                            <div class='form-group'>
                                <label class='control-label col-sm-2'>School :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='schoolEdit' value='".$row['school']."' type='text' name='school' placeholder='Type school here' required />
                                </div>
                            </div>

                            <div class='form-group'> <!-- Date input -->
                                <label class='control-label col-sm-2' for='date'>Birthdate :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='bdayEdit' value='".$row['birthdate']."' name='bday' placeholder='MM/DD/YYYY' type='text' required/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-sm-2'>Race :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='raceEdit' type='text' value='".$row['race']."' name='race' placeholder='Valid your race here' required />
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='control-label col-sm-2'>Religion :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='religionEdit' value='".$row['religion']."' type='text' name='religion' placeholder='Type religion here' required/>
                                </div>
                            </div>

                            <div class='form-group'> <!-- Date input -->
                                <label class='control-label col-sm-2' for='date'>Registered Date :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='regdateEdit' value='".$row['reg_date']."' name='regdate' placeholder='MM/DD/YYYY' type='text' required/>
                                </div>
                            </div>
                            <div class='form-group'> <!-- Date input -->
                                <label class='control-label col-sm-2' for='date'>PassOut Date :</label>
                                <div class='col-sm-10'>
                                    <input form='formEdit' class='form-control' id='passdateEdit' value='".$row['out_date']."' name='passdate' placeholder='MM/DD/YYYY' type='text' required/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-sm-2'>Gender :</label>
                                <div class='col-sm-10'>
                                    <select form='formEdit' class='form-control' name='gender' id='genderEdit'>
                                        <option selected>Open this select menu</option>
                                        ";
        if(strcmp($row['gender'], 'male') == 0){
            $output.= "<option value='male' selected>Male</option>
                                        <option value='female'>Female</option>";
        }

        else{
            $output.= "<option value='male'>Male</option>
                                        <option value='female' selected>Female</option>";
        }

        $output.="
                                    </select>
                                </div>
                            </div>

                            <div class='modal-footer'>
                                <button form='formEdit' id='edit".$row['s_id']."' type='submit' class='add-project'   name='op' value='Edited'>Edit </button>
                                <button form='formEdit' type='button' class='cancel' data-dismiss='modal'>Close</button> 
                                
                                <span class='error' style='display:none'> Please Enter Valid Data</span>
                                <span class='success' style='display:none'> Registration Successfully</span>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
   
       <!-- Delete Modal -->
           <div class='modal fade' id='d".$row['s_id']."' role='dialog'>
        <div class='modal-dialog'>
        
          <!-- Modal content-->
          <div class='modal-content'>
            <div class='modal-header login-header'>
                    <button type='button' class='close' data-dismiss='modal'>×</button>
                    <h4 class='modal-title'>Edit Form</h4>
                </div>
            <div class='modal-body'>
              <p>Are you sure you want to delete this data?</p>
            </div>
            <div class='modal-footer'>
            <a href='../controller/caa_academic_controller.php?delete_id=".$row_student_id."'><button type='button' class='add-project'>Yes</button> </a>
                                               
                        <button type='button' class='cancel' data-dismiss='modal'>No</button>                        
                    </div>
          </div>
          
        </div>
      </div>
      
    </div>
     <script src='http://code.jquery.com/jquery-1.9.1.js'></script>
    <script type='text/javascript' >
$('#edit".$row['s_id']."').click(function() {

var username = $('#username".$row['s_id']."').val();
var firstname = $('#edit".$row['s_id']."').val();
var lastname = $('#edit".$row['s_id']."').val();

var area = $('#edit".$row['s_id']."').val();
var email = $('#edit".$row['s_id']."').val();
var school = $('#edit".$row['s_id']."').val();

var bday = $('#edit".$row['s_id']."').val();
var race = $('#edit".$row['s_id']."').val();

var religion = $('#edit".$row['s_id']."').val();
var regdate = $('#edit".$row['s_id']."').val();
var passdate = $('#edit".$row['s_id']."').val();

var gender = $('#edit".$row['s_id']." option:selected').text();


var dataString = 'username='+ username + '&firstname=' + firstname + '&lastname=' + lastname 
+ '&email=' + email + '&school=' + school + '&bday=' + bday + '&race=' + race 
+ '&religion=' + religion + '&regdate=' + regdate + '&passdate=' + passdate + '&gender=' + gender 
+ '&area=' + area;

alert(username);
$.ajax({
type: 'POST',
url: 'http://localhost/StudentManagementSystem-/controller/admin_controller.php?op=Edited',
data: {
            username: 'a',
            firstname: 'b',
            lastname: 'c',
            email: 'd',
            school: 'e',
            bday: this.bday,
            race: this.race,
            religion: this.religion,
            regdate: this.regdate,
            passdate: this.passdate,
            gender: this.gender,
            area: this.area,
        },
dataType
success: function(){
$('.success').fadeIn(5000).show();
$('.error').fadeOut(5000).hide();
}
});
return false;
});
</script>

  ";
    }
    echo $output;
}
else
{
    echo "Data Not Found";
}