<?php 

if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        /* choose the appropriate page to redirect users */
        die( header( 'location: /error.php' ) );

    }

 
 class ArModel
 {
 	
 	protected static $db;
	
	function __construct()
	{
		self::$db = new DB();
		
	}


 	function addUser($name,$pass,$type){

 		$password = $this->hashPassword($pass);
 
 		$query = "INSERT INTO `user` (`username`,`password`,`type`) VALUES (".$name.",".$password.",".$type.")";

		$result = self::$db->query($query);

		return $result;

 	}
 	//view all students in the system

 	function view_all_students(){
 		$query = "SELECT * FROM `student`";

		$result = self::$db->select($query);

		return $result;
 	}
 	function addStudent($st_id,$fname,$lname,$area){

 	
 
 		$query = "INSERT INTO `student` (`s_id`,`first_name`,`last_name`,`area`) VALUES (".$st_id.",".$fname.",".$lname.",".$area.")";

		$result = self::$db->query($query);

		return $result;

 	}
 	function search_student($st_id){
 		$query = "SELECT * FROM `student` WHERE s_id = {$st_id} ";

		$result = self::$db->select($query);

		return $result;
 	}

 	function hashPassword($password){
 		//using bcrypt 
 		$option = ['cost' => 12];
 		$hash = password_hash($password,PASSWORD_BCRYPT,$option);
 		//add quotes
 		$h_password = "'" . $hash . "'";
 		return $h_password;
 	}
 	//Delete student from the database
 	function delete($s_id){
        $query = "SELECT * FROM `student` WHERE s_id = {$st_id} ";
    }
 }

?>