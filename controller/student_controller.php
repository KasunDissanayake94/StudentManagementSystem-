<?php 

session_start();
if(isset($_SESSION['type']) && isset($_SESSION['user'])){

	$type = $_SESSION['type'];
	
	switch ($type) {
		case 'admin':
			header("Location:../view/admin.php");
			break;
		case 'student':
			//student controller here...
			break;
		default:
			header( 'location: ../index.php' ) ;
			break;
	}
	
 }
	
	// load the view

	require('../model/student_model.php');
	require('../model/db_model.php');

	@$op = $_REQUEST['op'];
	@$id = $_SESSION['user'];



	$student_controller = new StudentController();




	switch ($op) {
		case 'add_user':
			$admin_controller->addUser();
			break;
		case 'Profile':
			$student_controller->fill_profile();
			break;
		case 'TimeTable':
			$student_controller->timetable();
			break;
        case 'AcadamicDetails':
            $student_controller->acadamic();
            break;
        case 'ExaminationDetails':
            $student_controller->exam();
            break;
        case 'edit_by_student':
            $student_controller->edit_by_student();
            break;
		case 'Problems':
			$student_controller->problems();
			break;
		default:
            header("Location:../view/student.php");
			break;
	}

	
	class StudentController
	{
		protected static $db;
		protected static $student;
		
		function __construct()
		{
			self::$db = new DB();
			$time=self::$student = new StudentModel();
			$st_id=$_SESSION['username'];			

			self::$student->update_time($st_id);
			
			$result = self::$student->getdetails($st_id);
			if ($result) {
				$_SESSION['details']=$result;

			}else{
				die("not");
			}
			
			
		}

		
		function automethod(){
			$st_id = self::$db->quote($_POST['user']);
			$result = self::$student->search_student($st_id);
			
		}
		function fill_profile(){
			header("Location:../view/student_detail.php");
		}
		function timetable(){
			header("Location:../view/timetable.php");
		}

		function edit_by_student(){
            header("Location:../view/student_detail.php");
		}
		function acadamic(){
            header("Location:../view/acadamic_details.php");
		}
		function exam(){
            header("Location:../view/exam_details.php");
		}
		//Send problems to the Admin
		function problems(){
            header("Location:../view/problems.php");
		}


	}
 ?>

 