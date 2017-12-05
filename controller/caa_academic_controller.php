<?php
ob_start();
session_start();
if(isset($_SESSION['type']) && isset($_SESSION['user'])){

	$type = $_SESSION['type'];
	
	
	switch ($type) {
		case 'admin':
			header("Location:admin_controller.php");
			break;

		case 'student':
			header("Location:student_controller.php");
			break;

		case 'lecturer':
			header("Location:lecturer_controller.php");
			break;
		case 'caa_academic':
			// caa academic contoller is here
			break;

			
		default:
			header( 'location: ../index.php' ) ;
			break;
	}
	
 }

 	// load the view
	require('../view/caa_academic.php');

 	require('../model/caa_academic_model.php');
	require('../model/db_model.php');

	@$op = $_REQUEST['op'];

	$CaaAcademic_controller = new CaaAcademicController();
	
	switch ($op) {
		case 'view_CaaAcademic':
			$CaaAcademic_controller->view_CaaAcademic();
			break;
		case 'view_students':
			$CaaAcademic_controller->view_students();
			break;
		case 'view_events':
        	$CaaAcademic_controller->view_events();
        	break;
        case 'view_scholarships':
        	$CaaAcademic_controller->view_scholarships();
        	break;										
		default:
			//header("Location:../index.php");
			break;
	}


 	class CaaAcademicController{
 		protected static $db;
 		protected static $CaaAcademic;

 		function __construct(){
 			self::$db = new DB();
 			self::$CaaAcademic=new CaaAcademicModel(); 			
 		}

 		function view_CaaAcademic(){

 			$CaaAcademic_id=$_SESSION['id'];
 			$result = self::$CaaAcademic->view_CaaAcademic($CaaAcademic_id);
 			if($result){
				$_SESSION['value']=$result;
				header("Location:../view/view_lecturer.php");
			}else{
				echo "something wrong";
			}

 			
 		}

 	

 		function view_students(){
 			header("Location:../view/view_student.php");
 		}

 		function view_events(){
 			header("Location:../view/view_events.php");
 		}

 		function view_scholarships(){
 			header("Location:../view/view_scholarships.php");
 		}


 	}
?>