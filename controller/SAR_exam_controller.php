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

 	require('../model/SAR_exam_model.php');
	require('../model/db_model.php');

	@$op = $_REQUEST['op'];

	$lecturer_controller = new LecturerController();
	
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
