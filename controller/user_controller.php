<?php


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
		default:
			header( 'location: ../index.php' ) ;
			break;
	}
	
 }

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once('$root/../model/db_model.php');

//ajax -- checking username

$usercontroller = new UserController();
if(isset($_GET['u_name']) && !isset($_SESSION['user'])){

	$usercontroller->checkUsername();
}

// -------------


/**
* 
*/
class UserController 
{
	protected static $db;
	function UserController()
	{
		self::$db = new DB();
	
	}

	

	function login($username,$password){

		if($this->authenticate($username,$password)){

			session_start();

			$user = new UserModel($username);
			$type = $this->gettype($username);

			$_SESSION['user'] = $user;
			$_SESSION['type'] = $type;
			$_SESSION['username'] = $username;
 
			return true;
		}else{
			return false;
		}

	}

	function getType($u){
		
		$type = "null";
		$query = "SELECT `type` FROM user WHERE `username` = ".$u."";
		$result = self::$db->select($query);
		if($result){
			$type = $result[0]['type'];
		}
		return $type;


	}
	function authenticate($u,$p){
		
	    //$db = new DB();
		$authentic = false;
		$query = "SELECT `password` FROM user WHERE `username` = ".$u."";
		$result = self::$db->select($query);

		if(count($result)==1){
			
			$h_password = $result[0]['password'];
			
			
			
			
			if(password_verify($p, $h_password)){
				$authentic = true;

			}
			
		}
		
		
		return $authentic;
	}

	function checkUsername(){
	
		if(isset($_GET['u_name'])){
			header('Content-Type: text/xml');
			echo '<?xml version ="1.0" encoding="UTF-8" standalone="yes" ?>';
			echo '<response>';
				$name = $_GET['u_name'];
				if ($name=='q') {
					echo 'ok';
				}elseif($name==''){
					echo 'not ok';
				}
			echo '</response>';

			//$uname = self::$db->quote($_GET['u_name']);


		}
	}

	function logout(){
		session_start();
		session_destroy();
	}
}

  ?>