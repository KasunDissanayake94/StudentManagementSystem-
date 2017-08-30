<?php 

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
											
		default:
			//header("Location:../index.php");
			break;
	}

	
	class StaffController
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
			header("Location:../view/search_user.php");
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
			
			$st_id = self::$db->quote($_POST['id']);
			$fname = self::$db->quote($_POST['firstname']);
			$lname = self::$db->quote($_POST['lastname']);
			$area = self::$db->quote($_POST['area']);
			$result = self::$admin->addStudent($st_id,$fname,$lname,$area);

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



	}
 ?>

 