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
			// lecturer contoller is here
			break;

		case 'caa_academic':
			header("Location:caa_academic_controller.php");
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
	require('../view/lecturer.php');

 	require('../model/lecturer_model.php');
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
		case 'view_academic':
        	$lecturer_controller->view_academic();
        	break;
        case 'view_exams':
        	$lecturer_controller->view_exams();
        	break;
		case 'add_final_results':
        	$lecturer_controller->add_final_results();
        	break;

        case 'update_final_results':
        	$lecturer_controller->update_final_results();
        	break;

        case 'add_assignment_results':
        	$lecturer_controller->add_assignment_results();
        	break;

        case 'update_assignment_results':
        	$lecturer_controller->update_assignment_results();
        	break;

		default:
			//header("Location:../index.php");
			break;
	}


 	class LecturerController{
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

 		function view_academic(){
 			header("Location:../view/lecturer_academic.php");
 		}

 		function view_exams(){
 			header("Location:../view/view_exams.php");
 		}

 		// Used for Add button in add final result model
 		function add_final_results(){
 			$year = self::$db->quote($_POST['year']);
			$subject = self::$db->quote($_POST['subject']);

			$_SESSION['year']=$_POST['year'];
			$_SESSION['subject']=$_POST['subject'];

			$result = self::$lecturer->get_student_result($year,$subject);

			if($result){
				$_SESSION['student_list']=$result;
				header("Location:../view/add_final_results_form.php");
			}else{
				$result1 = self::$lecturer->add_to_student_course();
				header("Location:../view/lecturer_academic.php");
			}

 			
 		}

 		function update_final_results(){
 			foreach ($_SESSION['student_list'] as $user) {
			        $s_id =self::$db->quote($user['s_id']);
					$final_result = self::$db->quote($_POST[$user['s_id']]);

					$result = self::$lecturer->update_final_results($s_id,$final_result);

					if($result){
						echo "Successfully updated";
						header("Location:../view/lecturer_academic.php");
					}else{
						echo "something wrong";
					}

					// echo $s_id;
					// echo $final_result;
					
			}

 		}

 		// Used for Add button in add assignment result model

 		function add_assignment_results(){
 			$year = self::$db->quote($_POST['year']);
			$subject = self::$db->quote($_POST['subject']);

			$_SESSION['year']=$_POST['year'];
			$_SESSION['subject']=$_POST['subject'];

			$result = self::$lecturer->get_assignment_result($year,$subject);

			if($result){
				$_SESSION['student_list']=$result;
				header("Location:../view/add_assignment_results_form.php");
			}else{
				$result1 = self::$lecturer->add_to_student_course();
				header("Location:../view/lecturer_academic.php");
			}
 		}

 		function update_assignment_results(){
 			foreach ($_SESSION['student_list'] as $user) {
			        $s_id =self::$db->quote($user['s_id']);
					$assignment_result = self::$db->quote($_POST[$user['s_id']]);

					$result = self::$lecturer->update_assignment_results($s_id,$assignment_result);

					if($result){
						echo "Successfully updated";
						header("Location:../view/lecturer_academic.php");
					}else{
						echo "something wrong";
					}

					// echo $s_id;
					// echo $final_result;
					
			}

 		}

 	}
?>