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

 
 class AdminModel
 {
 	
 	protected static $db;
	
	function __construct()
	{
		self::$db = new DB();
		
	}



    function addUser($username,$pass,$fname,$lname,$email,$type,$nic){
    //Insert user into the database
         $password = $this->hashPassword($pass);
         $query = "INSERT INTO `user` (`username`,`password`,`first_name`,`last_name`,`email`,`type`,`nic`) VALUES (".$username.",".$password.",".$fname.",".$lname.",".$email.",".$type.",".$nic.")";
         $result = self::$db->query($query);
         return $result;
     }
 	//view all students in the system

 	function view_all_students(){
 		$query = "SELECT * FROM `student`";

		$result = self::$db->select($query);

		return $result;
 	}



     function addStudentfromAdmin($username,$fname,$lname,$email){
         $query = "INSERT INTO `student` (`s_id`,`first_name`,`last_name`) VALUES (".$username.",".$fname.",".$lname.")";

         $result = self::$db->query($query);

         return $result;

     }
 	function search_user($uname){
 		$query = "SELECT * FROM `user` WHERE username = {$uname} ";

		$result = self::$db->select($query);

		return $result;
 	}
 	function update_user($name,$type){
 		$query="UPDATE  `user` SET `type`='{$type}'WHERE username='{$name}'";

 		$result = self::$db->select($query);

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
 }

?>