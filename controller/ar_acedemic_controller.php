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
			header("Location:SAR_exam_controller.php");
			break;

		case 'ar_acedemic':
			// AR Acedemic contoller is here
			break;
			
		default:
			header( 'location: ../index.php' ) ;
			break;
	}
	
 }

 	// load the view
	require('../view/ar_acedemic.php');

 	require('../model/ar_acedemic_model.php');
	require('../model/db_model.php');

	@$op = $_REQUEST['op'];

	$aracedemic_controller = new ArAcedemicController();

	switch ($op) {
		case 'view_ar_acedemic':
			$aracedemic_controller->view_ar_acedemic();
			break;
		case 'view_student':
			$aracedemic_controller->view_student();
			break;
        case 'ar_approv':
            $aracedemic_controller->ar_approv();
            break;
        case 'manage_user':
            $aracedemic_controller->manage_user();
            break;
        case 'report':
            $aracedemic_controller->report();
            break;
        case 'events':
            $aracedemic_controller->events();
            break;
        case 'addevent':
            $aracedemic_controller->addevent();
            break;
        case 'view_mahapola':
            $aracedemic_controller->view_mahapola();
            break;
        case 'view_bursary':
            $aracedemic_controller->view_bursary();
            break;
        case 'view_other_scholarship':
            $aracedemic_controller->view_other_scholarship();
            break;
		default:
			//header("Location:../index.php");
			break;
	}


 	class ArAcedemicController{
 		protected static $db;
 		protected static $ar_acedemic;

 		function __construct(){
 			self::$db = new DB();
 			self::$ar_acedemic=new ArAcedemicModel();
 		}

 		function view_ar_acedemic(){

 			$aracedemic_id=$_SESSION['id'];
 			$result = self::$ar_acedemic->view_ar_acedemic($aracedemic_id);
 			if($result){
				$_SESSION['value']=$result;
				header("Location:../view/ar_acedemic_profile.php");
			}else{
				echo "something wrong";
			}

 		}

 		function view_student(){
 			header("Location:../view/ar_acedemic_stdet.php");
 		}

 		function ar_approv(){
 			header("Location:../view/ar_acedemic_approv.php");
 		}

 		function manage_user(){
            header("Location:../view/ar_acedemic_manusr.php");
        }

        function report(){
            header("Location:../view/ar_acedemic_report.php");
        }

        function events(){
            header("Location:../view/ar_acedemic_event.php");
        }

        function addevent(){



            $event_date = self::$db->quote($_POST['event-date']);
            $event_title = self::$db->quote($_POST['event-title']);
            $event_des = self::$db->quote($_POST['event-descripton']);
            $file = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            $folder = '..view/pdffiles/events/'.$_FILES['file']['name'];
            move_uploaded_file($file_tmp,$folder);


                $result = self::$ar_acedemic->addevent($event_date,$event_title,$event_des,$file,$file_type,$file_size);
                if($result == 1){
                    //Successfully Added
                    $result='<div class="alert alert-success">Event Sccessfully Added to the System</div>';
                    header("Location:../view/ar_acedemic_event.php?result=$result");
                    //Error Message
                }else{
                    $result='<div class="alert alert-danger">Sorry Failed to Add the Event</div>';
                    header("Location:../view/ar_acedemic_event.php?result=$result");
                }
            }
        function view_mahapola(){


            $result = self::$ar_acedemic->view_mahapola();

            if($result){
                $_SESSION['value']=$result;
                header("Location:../view/ar_view_mahapola.php");
            }else{
                echo "something wrong";
            }
        }

        function view_bursary(){


            $result = self::$ar_acedemic->view_bursary();

            if($result){
                $_SESSION['value']=$result;
                header("Location:../view/ar_view_bursary.php");
            }else{
                echo "something wrong";
            }
        }

        function view_other_scholarship(){


            $result = self::$ar_acedemic->view_other_scholarship();

            if($result){
                $_SESSION['value']=$result;
                header("Location:../view/other_scholarship.php");
            }else{
                echo "something wrong";
            }
        }

 	}
?>