<?php
ob_start();
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
        case 'view_by_student':
            $student_controller->view_by_student();
            break;
		case 'Problems':
			$student_controller->problems();
			break;
        case 'save_changes':
            $student_controller->save_changes();
            break;
		case 'ScolDetails':
			$student_controller->scoldetails();
			break;
		case 'SeasonForms':
			$student_controller->season();
			break;
        case 'GPA':
            $student_controller->gpa();
            break;
        case 'Home':
            $student_controller->home();
            break;
        case 'Grades':
            $student_controller->grade();
            break;
        case 'Repeat':
            $student_controller->repeat();
            break;
        case 'Optional':
            $student_controller->optional();
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
        function view_by_student(){
            header("Location:../view/view_student_detail.php");
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
        function scoldetails(){
            header("Location:../view/ScolDetails.php");
        }
        function season(){
            header("Location:../view/Season.php");
		}
        function gpa(){
            header("Location:../view/GPA.php");
        }
        function home(){
            header("Location:../view/student.php");
        }
        function grade(){
            header("Location:../view/grade.php");
        }
        function repeat(){
            header("Location:../view/repeat.php");
        }
        function optional(){
            header("Location:../view/optional.php");
        }

        function save_changes(){

            $s_id = self::$db->quote($_POST['s_id']);
            $firstname = self::$db->quote($_POST['firstname']);
            $lastname = self::$db->quote($_POST['lastname']);

            $result = self::$student->update_student($s_id,$firstname,$lastname);
            if($result){
                //If student already in the system show error message
                $result='<div class="alert alert-danger">Updated </div>';
                header("Location:../controller/student_controller?op=edit_by_student");

            }else{
                $result='<div class="alert alert-danger">Sory Failed to Update</div>';
                header("Location:../controller/student_controller?op=edit_by_student");
            }




        }


	}
 ?>

 