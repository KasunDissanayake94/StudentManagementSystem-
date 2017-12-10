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
		case 'Add Scholarship':
        	$caa_academic_controller->add_scholarship();
        	break;	
        case "View by Mahapola":
         	$caa_academic_controller->view_by_mahapola();
        	break;	
        case "View by Bursary":
         	$caa_academic_controller->view_by_bursary();
        	break;
        case "View by Other Scholarship":
         	$caa_academic_controller->view_by_other_scholarship();
        	break;	
        case "view_timetable":
         	$caa_academic_controller->view_timetable();
        	break;		
        case "caa_profile":
         	$caa_academic_controller->caa_profile();
        	break;		
        case "view_hostel":
         	$caa_academic_controller->view_hostel();
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
        
        function view_timetable(){
 			header("Location:../view/view_timetable.php");
 		}

 		 function caa_profile(){
 			header("Location:../view/caa_profile.php");
 		}

 		 function view_hostel(){
 			header("Location:../view/view_hostel.php");
 		}

 		function add_scholarship(){
 		// 	header("Location:../view/view_scholarships.php");
 		// }

 		
			$name = self::$db->quote($_POST['name']);
			$indexno = self::$db->quote($_POST['indexno']);
			$course = self::$db->quote($_POST['course']);
			$stype = self::$db->quote($_POST['stype']);
			$schol_other = self::$db->quote($_POST['schol_other']);
			$samount = self::$db->quote($_POST['samount']);
			
			$result = self::$caa_academic->add_scholarship($name,$indexno,$course,$stype,$schol_other,$samount);

			if($result == 1){
				echo "Scholarship Details Added Successfully....";
				
			}else{
				echo "something wrong";
			}
		}
	function view_by_mahapola(){
			

			$result = self::$caa_academic->view_by_mahapola();

			if($result){
				$_SESSION['value']=$result;
				header("Location:../view/mahapola.php");
			}else{
				echo "something wrong";
			}
		}

	function view_by_bursary(){
			

			$result = self::$caa_academic->view_by_bursary();

			if($result){
				$_SESSION['value']=$result;
				header("Location:../view/bursary.php");
			}else{
				echo "something wrong";
			}
		}

	function view_by_other_scholarship(){
			

			$result = self::$caa_academic->view_by_other_scholarship();

			if($result){
				$_SESSION['value']=$result;
				header("Location:../view/other_scholarship.php");
			}else{
				echo "something wrong";
			}
		}

 	}
?>