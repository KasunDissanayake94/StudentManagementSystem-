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
	@$id = $_SESSION['nic'];



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
			$username=$_SESSION['username'];
            //get the nic no of the student
            $nic=self::$student->getnic($username);
            //get the student id of the student
            $_SESSION['nic']=$nic;
            //get the student id
            $sid=self::$student->getid($nic);

            $_SESSION['s_id']=$sid;

			self::$student->update_time($sid);

			$result = self::$student->getdetails($nic);
			$result2 = self::$student->getcontactdetails($sid);
			$result1 = self::$student->getareadetails($sid);
			//get basic details
			if ($result) {
				$_SESSION['details']=$result;
                $_SESSION['details1']=$result1;
                $_SESSION['details2']=$result2;



            }else{

			}

			
			
		}

		
		function automethod(){
			$nic = self::$db->quote($_POST['nic']);
			$result = self::$student->search_student($nic);
			
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
		//get student mahapola bursary and other  details
        function scoldetails(){
            $s_id = $_SESSION['username'];
            $result = self::$student->get_scol($s_id);
            if($result){
                $_SESSION['scolres']=$result;
                header("Location:../view/ScolDetails.php");
			}else{
                $alert='<div class="alert alert-danger">You have not Scholarships yet.</div>';
                header("Location:../view/ScolDetails.php?alert=$alert");
			}

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
            $s_id = $_SESSION['s_id'];
            $result = self::$student->get_grades($s_id);
            if($result){
                $_SESSION['grade']=$result;
                header("Location:../view/grade.php");
            }else{
                $alert='<div class="alert alert-danger">You have not repeat Sujects yet.</div>';
                header("Location:../view/grade.php?alert=$alert");
            }
        }
        function repeat(){
            $s_id = $_SESSION['username'];
            $result = self::$student->get_repeat($s_id);
            if($result){
                $_SESSION['repeat']=$result;
                header("Location:../view/repeat.php");
            }else{
                $alert='<div class="alert alert-danger">You have not repeat Sujects yet.</div>';
                header("Location:../view/repeat.php?alert=$alert");
            }
        }
        function optional(){
            header("Location:../view/optional.php");
        }

        function save_changes(){

            $s_id = self::$db->quote($_POST['s_id']);
            $firstname = self::$db->quote($_POST['firstname']);
            $lastname = self::$db->quote($_POST['lastname']);
            $mname = self::$db->quote($_POST['mname']);
            $bday = self::$db->quote($_POST['bday']);
            $religion = self::$db->quote($_POST['religion']);
            $race = self::$db->quote($_POST['race']);
            $school = self::$db->quote($_POST['school']);

            $con1 = self::$db->quote($_POST['con1']);
            $con2 = self::$db->quote($_POST['con2']);
            $emgcon = self::$db->quote($_POST['emgcon']);
            $emgper = self::$db->quote($_POST['emg_per']);

            $no = self::$db->quote($_POST['no']);
            $street = self::$db->quote($_POST['street']);
            $town = self::$db->quote($_POST['town']);



            $result = self::$student->update_student($s_id,$firstname,$lastname,$mname,$school,$bday,$religion,$race);

            if($result){
                //If student already in the system show error message
                $result='<div class="alert alert-success">Updated </div>';

                header("Location:../controller/student_detail.php?edit=$result");

            }else{
                $result='<div class="alert alert-danger">Sory Failed to Update</div>';
                header("Location:../controller/student_detail.php?edit=$result");
            }




        }


	}
 ?>

 