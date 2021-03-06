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
			header("Location:caa_academic_controller.php");
			break;

		case 'SAR_exam':
			// SAR exam contoller is here
			break;
			
		default:
			header( 'location: ../index.php' ) ;
			break;
	}
	
 }

 	// load the view
	require('../view/SAR_exam.php');

 	require('../model/lecturer_model.php');
	require('../model/db_model.php');

	@$op = $_REQUEST['op'];

	$SAR_exam_controller = new SAR_exam_Controller();
	
	switch ($op) {
		case 'view_lecturer':
			$lecturer_controller->view_lecturer();
			break;
		case 'view_student':
			$lecturer_controller->view_student();
			break;
		case 'view_subjects':
        	$lecturer_controller->view_subjects();
        	break;
        case 'view_exams':
        	$lecturer_controller->view_exams();
        	break;										
		default:
			//header("Location:../index.php");
			break;
	}

	class SAR_exam_Controller{
	 		protected static $db;
	 		protected static $lecturer;

	 		function __construct(){
	 			self::$db = new DB();
	 			self::$lecturer=new LecturerModel(); 			
	 		}

	 		function view_lecturer(){

	 			$lec_id=$_SESSION['id'];
	 			$result = self::$lecturer->view_lecturer($lec_id);
	 			if($result){
					$_SESSION['value']=$result;
					header("Location:../view/view_lecturer.php");
				}else{
					echo "something wrong";
				}

	 			
	 		}

	 		function view_student(){
	 			header("Location:../view/view_student.php");
	 		}

	 		function view_subjects(){
	 			header("Location:../view/view_subjects.php");
	 		}

	 		function view_exams(){
	 			header("Location:../view/view_exams.php");
	 		}

	 	}