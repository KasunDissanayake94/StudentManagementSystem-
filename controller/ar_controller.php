<?php 

session_start();
if(isset($_SESSION['type']) && isset($_SESSION['user'])){

	$type = $_SESSION['type'];
	
	switch ($type) {
		case 'admin':
			header("Location:admin_controller.php");
			break;
		case 'ar':
		
			break;
		case 'student':
			header("Location:student_controller.php");
			break;
		default:
			header( 'location: ../index.php' ) ;
			break;
	}
	
 }
	
	// load the view
	require('../view/ar.php');

	require('../model/ar_model.php');
	require('../model/db_model.php');

	@$op = $_REQUEST['op'];

	$ar_controller = new ArController();

	switch ($op) {
		case 'Add':
			$ar_controller->addUser();
			break;
		case 'Scholarships':
        	$ar_controller->schlorshipPage();
        	break;
        case 'Load Scholarship Form':
        	$ar_controller->loadforms();	
        									
		default:
			//header("Location:../index.php");
			break;
	}

	
	class ArController
	{
		protected static $db;
		protected static $ar;
		function __construct()
		{
			self::$db = new DB();
			self::$ar = new ArModel();
		}

		function schlorshipPage(){
			header("Location:../view/scholarshipPage.php");
		}
		function loadforms(){
			header("Location:../view/loadform.php");
		}
		



	}
 ?>

 