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
			// caa_academic contoller is here
			break;

		case 'SAR_exam':
			header("Location:SAR_exam_controller.php");
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

	$caa_academic_controller = new CaaAcademicController();
	
	switch ($op) {
		
		case 'view_student':
			$caa_academic_controller->view_student();
			break;
		case 'view_events':
        	$caa_academic_controller->view_events();
        	break;
        case 'view_scholarships':
        	$caa_academic_controller->view_scholarships();
        	break;										
		default:
			//header("Location:../index.php");
			break;
	}


 	class CaaAcademicController{
 		protected static $db;
 		protected static $caa_academic;

 		function __construct(){
 			self::$db = new DB();
 			self::$caa_academic=new caa_academicModel(); 			
 		}

 		

 		function view_student(){
 			header("Location:../view/caa_view_student.php");
 		}

 		function view_events(){
 			header("Location:../view/view_events.php");
 		}

 		function view_scholarships(){
 			header("Location:../view/view_scholarships.php");
 		}

 	}
?>