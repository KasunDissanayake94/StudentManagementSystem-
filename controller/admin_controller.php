<?php
ob_start();
session_start();
if(isset($_SESSION['type']) && isset($_SESSION['user'])){

	$type = $_SESSION['type'];
	
	switch ($type) {
		case 'admin':
			// admin contoller is here
			break;

		case 'student':
			header("Location:student_controller.php");
			break;

		case 'lecturer':
			header("Location:lecturer_controller.php");
			break;

        case 'ar_acedemic':
            header("Location:ar_acedemic_controller.php");
            break;
			
		default:
			header( 'location: ../index.php' ) ;
			break;
	}
	
 }
	
	// load the view
	require('../view/admin.php');

	require('../model/admin_model.php');
	require('../model/db_model.php');

	@$op = $_REQUEST['op'];
	//Get the student id from the url and show more information to the more.php page
	if(isset($_GET['student_id'])){
		$var = $_GET['student_id']; //some_value
		$op="moreinfo";
	}
	//Get the id of the delete student
	if(isset($_GET['delete_id'])){
		$del_id = $_GET['delete_id']; //some_value
		$op="Delete";
	}
	//Get the id of the delete user
	if(isset($_GET['delete_user_id'])){
        $delete_user_id = $_GET['delete_user_id']; //some_value
		$op="Delete_User";

	}
	//get the edit id
	if(isset($_GET['edit_id'])){
		$var1 = $_GET['edit_id']; //some_value
		$op="edit_User";
	}



	$admin_controller = new AdminController();

	switch ($op) {
		case 'Add':
			$admin_controller->addUser();
			break;
        case 'Updated':
            $admin_controller->updated();
            break;
        case 'Canceled':
            $admin_controller->canceled();
            break;
		case 'Add User':
        	$admin_controller->add_user();
        	break;
        case 'Search User':
        	$admin_controller->search_user();
        	break;
        case 'Update User':
        	$admin_controller->update_user();
        	break;
        case 'Manage Students':
        	$admin_controller->manage_students();
        	break;
        case 'View All':
        	$admin_controller->view_all_students();
        	break;
        case 'Modify Student Details':
        	$admin_controller->search_student();
        	break;
        case 'Add Student Details':
        	$admin_controller->add_student_page();
        	break;
        case 'Add Student':
        	$admin_controller->add_student();
        	break;
        case 'Search User Now':
        	$admin_controller->search_user_now();
        	break;
        case 'Add Student Details':
        	$admin_controller->add_student();
        	break;	
        case 'Search Student':
        	$admin_controller->search_student_now();
        	break;
        case 'Save User Details':        	
        	$admin_controller->update_user_details();	
        	break;
        case 'Search Students':
        	$admin_controller->search();
        	break;
        case 'Modify Students':
        	$admin_controller->search_by();	
        	break;
        case 'Search Result':
        	$admin_controller->serach_result();	
        	break;	
        case 'Add Time Table':
        	$admin_controller->add_timetable();	
        	break;
        case 'moreinfo':
            $admin_controller->show_moreinformation($var);
            break;
		case 'Delete':
			$admin_controller->delete($del_id);
			break;
        case 'Delete_User':
            $admin_controller->delete_user($delete_user_id);
            break;
		case 'Edited':
			$admin_controller->edit();
			break;
        case 'Profile':
            $admin_controller->profile();
            break;
        case 'save_changes':
            $admin_controller->change();
            break;
        case 'edit_User':
            $admin_controller->edit_user($var1);
            break;
		default:
			//index.php
			break;
	}

	
	class AdminController	
	{
		protected static $db;
		protected static $admin;
		function __construct()
		{
			self::$db = new DB();
			self::$admin = new AdminModel();

		}

		function addUser(){

			$username = self::$db->quote($_POST['username']);
			$pass = self::$db->quote($_POST['password']);
			$fname = self::$db->quote($_POST['fname']);
			$lname = self::$db->quote($_POST['lname']);
			$type = self::$db->quote($_POST['type']);
			$nic = self::$db->quote($_POST['nic']);



			$result = self::$admin->addUser($username,$pass,$fname,$lname,$type,$nic);

			if($result == 1){
				//User Sucessfully Added to the user table
                $result='<div class="alert alert-success">This user Added Successfully to the System</div>';
                header("Location:../view/Add_User.php?result=$result");


			}else{
                $result='<div class="alert alert-danger">Sorry!We cannot Add this User to the System</div>';
                header("Location:../view/Add_User.php?result=$result");

			}

		}
        function updated(){
            if(isset($_SESSION['userresult'])){

                foreach ($_SESSION['userresult'] as $user) {
                    $s_id=$user['id'];


                }
            }

            $username = self::$db->quote($_POST['username']);
            $pass = self::$db->quote($_POST['password']);
            $fname = self::$db->quote($_POST['fname']);
            $lname = self::$db->quote($_POST['lname']);
            $type = self::$db->quote($_POST['type']);
            $nic = self::$db->quote($_POST['nic']);



            $result = self::$admin->update_user($s_id,$username,$pass,$fname,$lname,$type,$nic);

            if($result == 1){
                //User Sucessfully Added to the user table
                $result='<div class="alert alert-success">This user updated Successfully to the System</div>';
                header("Location:../view/edit_users_by_admin.php?result=$result");


            }else{
                $result='<div class="alert alert-danger">Sorry!You cannot Update this User </div>';
                header("Location:../view/edit_users_by_admin.php?result=$result");

            }

        }
        function canceled(){
            header("Location:../view/edit_users_by_admin.php");		}
		function add_user(){
			header("Location:../view/Add_User.php");
		}
		function search_user(){
			header("Location:../view/search_users_by_admin.php");
		}
        function update_user(){
            header("Location:../view/edit_users_by_admin.php");
        }
		function modify_user(){
			header("Location:../view/search_user.php");

		}
		function manage_students(){
			header("Location:../view/student_profile.php");
		}
		function view_all_students(){
			$name = self::$db->quote($_POST['user']);
			$pass = self::$db->quote($_POST['pass']);
			$type = self::$db->quote($_POST['type']);

			$result = self::$admin->view_all_students();

			if($result){
				$_SESSION['value']=$result;
				header("Location:../view/view_all.php");
			}else{
				echo "something wrong";
			}
		}
		//direct to the add students page
		function add_student_page(){
			header("Location:../view/add_student_details.php");
		}
		//direct to the search students page
		function search_student(){
			header("Location:../view/search_student.php");
		}
		//add students to the database
		function add_student(){
			
			$s_id = self::$db->quote($_POST['username']);
			$firstname = self::$db->quote($_POST['firstname']);
			$lastname = self::$db->quote($_POST['lastname']);
			$email = self::$db->quote($_POST['email']);
			$school = self::$db->quote($_POST['school']);
			$birthday = self::$db->quote($_POST['bday']);
			$race = self::$db->quote($_POST['race']);
			$religion = self::$db->quote($_POST['religion']);
			$regdate = self::$db->quote($_POST['regdate']);
			$passdate = self::$db->quote($_POST['passdate']);
			$gender = self::$db->quote($_POST['gender']);
			$last_login='0';
			$area= self::$db->quote($_POST['area']);
			$stu_image="../view/images/profile_pic/'$s_id'";

            //Check this student already in the system
            $st_id = self::$db->quote($_POST['username']);
            $result1 = self::$admin->search_student($st_id);
            if($result1){
				//If student already in the system show error message
                $result='<div class="alert alert-danger">This User already in the System</div>';
                header("Location:../view/add_student_details.php?result=$result");

            }else{
                //Add Student to the system
                $result = self::$admin->addStudent($s_id,$firstname,$lastname,$last_login,$area,$email,$school,$birthday,$race,$religion,$regdate,$passdate,$gender,$stu_image);
                if($result == 1){
                	//Successfully Added
                    $result='<div class="alert alert-success">Student Sccessfully Added to the System</div>';
                    header("Location:../view/add_student_details.php?result=$result");
                    //Error Message
                }else{
                    $result='<div class="alert alert-danger">Sory Failed to Add the Student</div>';
                    header("Location:../view/add_student_details.php?result=$result");
                }
            }




		}
		function search_student_now(){

			$st_id = self::$db->quote($_POST['s_id']);
			$result = self::$admin->search_student($st_id);
			if($result){
				
				$_SESSION['details']=$result;
				header("Location:../view/modify_student.php");
				
			}else{
				include '../popup/popup.html';
				echo '<script type="text/javascript"> show_alert(); </script>';
			}

		}
		function search_user_now(){

			$uname = self::$db->quote($_POST['uname']);
			$result = self::$admin->search_user($uname);
			if($result){
				
				$_SESSION['details']=$result;
				header("Location:../view/modify_user_now.php");
				
			}else{
				include '../popup/popup.html';
				echo '<script type="text/javascript"> show_alert(); </script>';
			}

		}
		function update_user_details(){
			$name = self::$db->quote($_POST['uname']);
			$type = self::$db->quote($_POST['type']);
			$result = self::$admin->update_user($name,$type);

			if ($result) {
				include '../popup/popup.html';
				echo '<script type="text/javascript"> show_alert(); </script>';
			}
			else{
				include '../popup/popup.html';
				echo '<script type="text/javascript"> success(); </script>';

				


			
			}
		}
		function search(){
			header("Location:../view/search.php");
		}
		//Search Information for the live Search
		function search_by(){
            $result = self::$admin->view_all_students();
            if($result){
                $_SESSION['student_info']=$result;
                header("Location:../view/new_search1.php");
            }else{
                echo "something wrong";
            }

		}
		function serach_result(){	



				$arr=$_POST['array1'];
				$arr = array_filter(array_map('array_filter', $arr));
				foreach ($arr as $array) {
				$i=0;
				    foreach ($array as $array1) {
				        $i++;
				    }
				    }
				$size=$i; 

				$result = self::$admin->view_list($arr,$size);

				if($result){

			    $_SESSION['value']=$result;
			    $_SESSION['size']=$size;
			    $_SESSION['list']=$arr;
				
				header("Location:../view/view_selected_list.php");
			}else{
				header("Location:../example/first.php");
			} 
				
	}
	function add_timetable(){
		header("Location:../view/add_timetable.php");
	}
	//Return the more information about the student (Actually returns to the more.php page)
	function show_moreinformation($var){
		//get the student basic details
        $result = self::$admin->search_student($var);
        //get the student schol details
       // $result = self::$admin->search_student($var);
        //get the student
        //$result = self::$admin->search_student($var);
        if ($result) {

            $_SESSION['details'] = $result;
            header("Location:../view/edit_view_more_student_detail.php");


        }
    }
    //Admin delete Student
    function delete($del_id){
        $result = self::$admin->delete($del_id);
        if($result){
            $result='<div class="alert alert-success">Successfully Deleted</div>';
            header("Location:../view/search.php?status=$result");
        }
        else{
            $result='<div class="alert alert-danger">Failed to Delete</div>';
            header("Location:../view/search.php?status=$result");
        }
	}
	//Delete User
        function delete_user($delete_user_id){

            $result = self::$admin->delete_user($delete_user_id);
            if($result){
                $result='<div class="alert alert-success">Successfully Deleted</div>';
                header("Location:../view/search_users_by_admin.php?status=$result");
			}
			else{
                $result='<div class="alert alert-danger">Failed to Delete</div>';
                header("Location:../view/search_users_by_admin.php?status=$result");
			}
        }

	//View Current User profile
        function profile(){

            $u_id=$_SESSION['id'];
            $result = self::$admin->view_profile($u_id);
            if($result){
                $_SESSION['value1']=$result;
                header("Location:../view/view_user_profile.php");
            }else{
                echo "something wrong";
            }


        }
        function edit_user($var1){

            $result = self::$admin->search_user($var1);

            if($result){
                $_SESSION['userresult']=$result;
                header("Location:../view/edit_user.php");
            }else{
                echo "something wrong";
            }


        }
//end of the class
	}	
		
	
 ?>

 