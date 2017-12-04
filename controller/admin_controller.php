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

	$admin_controller = new AdminController();

	switch ($op) {
		case 'Add':
			$admin_controller->addUser();
			break;
		case 'Add User':
        	$admin_controller->add_user();
        	break;
        case 'Search User':
        	$admin_controller->search_user();
        	break;
        case 'Update User':
        	$admin_controller->search_user();
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
		default:
			//header("Location:../index.php");
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
			
			$name = self::$db->quote($_POST['user']);
			$pass = self::$db->quote($_POST['pass']);
			$type = self::$db->quote($_POST['type']);

			$result = self::$admin->addUser($name,$pass,$type);

			if($result == 1){
				echo "user added ...";
			}else{
				echo "something wrong";
			}

		}
		function add_user(){
			header("Location:../view/Add_User.php");
		}
		function search_user(){
			header("Location:../view/search.php");
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
			
			$firstname = self::$db->quote($_POST['firstname']);
			$lastname = self::$db->quote($_POST['lastname']);
			$email = self::$db->quote($_POST['email']);
			$school = self::$db->quote($_POST['school']);
			$birthday = self::$db->quote($_POST['birthday']);
			$race = self::$db->quote($_POST['race']);
			$religion = self::$db->quote($_POST['religion']);
			$regdate = self::$db->quote($_POST['regdate']);
			$passdate = self::$db->quote($_POST['passdate']);
			$gender = self::$db->quote($_POST['gender']);
			$result = self::$admin->addStudent($firstname,$lastname,$email,$school,$birthday,$race,$religion,$regdate,$passdate,$gender);

			if($result == 1){
				echo "User Added Successfully....";
				
			}else{
				echo "something wrong";
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
		function search_by(){
			header("Location:../view/newsearch.php");
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
	}	
		
	
 ?>

 