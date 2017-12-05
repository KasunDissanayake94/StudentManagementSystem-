<?php 

require_once('controller/user_controller.php');
require_once('model/user_model.php');



require_once('model/db_model.php');
//require_once('model/init.php');
require_once('view/login.php');
//$googleClient = new Google_Client;

//$auth =  new GoogleAuth($googleClient);

@$op = $_REQUEST['op'];


$db = new DB();
$user_controller = new UserController();

 
		
switch ($op) {
	case 'login':
		$username = $db->quote($_POST['user']);
		$password =$db->quote($_POST['pass']);


		if($user_controller->login($username,$password)){
			
			
			$type = $user_controller->getType($username,$password);

			switch ($type) {

				case 'admin':

					header("Location:controller/admin_controller.php");
					break;

				case 'student':
					
					header("Location:controller/student_controller.php");
					break;
				
				case 'ar':					
					header("Location:controller/ar_controller.php");
					break;

				case 'lecturer':
					header("Location:controller/lecturer_controller.php");
					break;

				case 'caa_academic':
					header("Location:controller/caa_academic_controller.php");
					break;

				case 'SAR_exam':
					header("Location:controller/SAR_exam_controller.php");
					break;
					
				default:
					
					die( header( 'location: /error.php' ) );
					break;
			}

		}else {
			header("Location:view/login.php?err=1");
		}
		break;

	case 'logout':
		$user_controller->logout();
		header("Location:view/login.php");
		break;
	
	default:
		header("Location:view/login.php");
		break;
}

 ?>