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

        case 'view_student_results':
        	$lecturer_controller->view_student_results();
        	break;

        case 'view_report':
        	$lecturer_controller->view_report();
        	break;

        case 'update_lecturer_info':
        	$lecturer_controller->update_lecturer_info();
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

 			$lec_id=$_SESSION['username'];
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

 		function update_lecturer_info(){
 			$username=$_SESSION['username'];
 			$fname=self::$db->quote($_POST['fname']);
 			$lname=self::$db->quote($_POST['lname']);
 			$gender=self::$db->quote($_POST['gender']);
 			$dob=self::$db->quote($_POST['dob']);
 			$tel=self::$db->quote($_POST['tel']);
 			$email=self::$db->quote($_POST['email']);
 			$edu=self::$db->quote($_POST['edu']);
 			$research=self::$db->quote($_POST['research']);
 			$course=self::$db->quote($_POST['course']);
 			$awards=self::$db->quote($_POST['awards']);



 			$result = self::$lecturer->update_lecturer_info($username,$fname,$lname,$gender,$dob,$tel,$email,$edu,$research,$course,$awards);
 			if($result){
 				header("Location:../controller/lecturer_controller.php?op=view_lecturer");
 			}else{
 				header("Location:../view/view_lecturer.php");
 				echo "something wrong";
 			}
 			
 			
 		}

 		function view_academic(){
 			header("Location:../view/lecturer_academic.php");
 		}

 		function view_exams(){
 			header("Location:../view/view_exams.php");
 		}

 		function view_report(){
 			$lect_username=$_SESSION['username'];
 			$_SESSION['result'] = self::$lecturer->get_count_result();
 			$_SESSION['result1']= self::$lecturer->get_pass_list($lect_username);
 			if ($_SESSION['result'] && $_SESSION['result1']) {
 				header("Location:../view/lecturer_report.php");
 			}else{
 				echo "no result";
 			}
 			
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
				// $result1 = self::$lecturer->add_to_student_course();
				$result='<div class="alert alert-danger">You don`t have access to this...!!</div>';
                header("Location:../view/lecturer_academic.php?result=$result");
			}

 			
 		}

 		function update_final_results(){
 			$user_username=self::$db->quote($_SESSION['username']);
 			$year=self::$db->quote($_SESSION['year']);
 			$subject=self::$db->quote($_SESSION['subject']);
			$type=self::$db->quote(final_result);	

 			foreach ($_SESSION['student_list'] as $user) {
			        $s_id =self::$db->quote($user['s_id']);
					$final_result = self::$db->quote($_POST[$user['s_id']]);

					$result = self::$lecturer->update_final_results($s_id,$final_result);

					if($result){
						
						$result_edited = self::$lecturer->update_edited_user($user_username,$year,$subject,$type);
						$result='<div class="alert alert-success">Successfully updated..!!</div>';
                		header("Location:../view/lecturer_academic.php?result=$result");
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
				// $result1 = self::$lecturer->add_to_student_course();
				$result='<div class="alert alert-danger">You don`t have access to this...!!</div>';
                header("Location:../view/lecturer_academic.php?result=$result");
			}
 		}

 		function update_assignment_results(){
 			$user_username=self::$db->quote($_SESSION['username']);
 			$year=self::$db->quote($_SESSION['year']);
 			$subject=self::$db->quote($_SESSION['subject']);
			$type=self::$db->quote(assignment_result);

 			foreach ($_SESSION['student_list'] as $user) {
			        $s_id =self::$db->quote($user['s_id']);
					$assignment_result = self::$db->quote($_POST[$user['s_id']]);

					$result = self::$lecturer->update_assignment_results($s_id,$assignment_result);

					if($result){
						
						$result_edited = self::$lecturer->update_edited_user($user_username,$year,$subject,$type);
						$result='<div class="alert alert-success">Successfully updated..!!</div>';
                		header("Location:../view/lecturer_academic.php?result=$result");
					}else{
						echo "something wrong";
					}

					// echo $s_id;
					// echo $final_result;
					
			}

 		}

 		function view_student_results(){
 			$year = self::$db->quote($_POST['year']);
			$subject = self::$db->quote($_POST['subject']);

			// To get the user info who lastly edited the final marks
			$edited_final=self::$lecturer->get_edited_final($year,$subject);
			if($edited_final){
				foreach ($edited_final as $user) {
					$edited_user_final=$user['edited_user_name'];
				}
			}else{
				$edited_user_final='Not edited yet';
			}
			
			// To get the user info who lastly edited the final assignment marks marks
			$edited_assignment=self::$lecturer->get_edited_assignment($year,$subject);
			if($edited_assignment){
				foreach ($edited_assignment as $user) {
				$edited_user_assignment=$user['edited_user_name'];
			}
			}else{
				$edited_user_assignment='Not edited yet';
			}
			

			$_SESSION['year']=$_POST['year'];
			$_SESSION['subject']=$_POST['subject'];
			$_SESSION['edited_final']=$edited_user_final;
			$_SESSION['edited_assignment']=$edited_user_assignment;

			// Retrive the final and assignment results with studen id
			$result = self::$lecturer->view_result($year,$subject);
			if($result){
				$_SESSION['student_list']=$result;
				header("Location:../view/view_results_form.php");
			}else{
				$result='<div class="alert alert-danger">You don`t have access to this...!!</div>';
                header("Location:../view/lecturer_academic.php?result=$result");
				// header("Location:../view/lecturer_academic.php");
				// echo "something wrong";
			}
 		}

 	}
?>