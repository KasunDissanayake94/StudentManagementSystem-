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
 	function view_list($list,$size){ 	
		$string='SELECT ';	
		echo $list[0][1].$list[1][1];
		echo $list[0][2].$list[1][2];
		echo $list[0][3].$list[1][3];
		
		die();
		if(!empty($list)) {					
			for ($i=1; $i < $size; $i++) { 
				
				if ($list[1][$i]==1) {
				
					$string.=$list[0][$i];
					if ($i!=$size-1) {
					$string.=",";

				} 	
				}				
			}
			

			$string=chop($string,', ');
			$string.=" FROM `student` WHERE ";
			if(!empty($list)) {					
			for ($i=1; $i < $size; $i++) { 
				if ($list[1][$i]!=1 && $list[1][$i]!='') {
					$string.=$list[0][$i];
					$string.="=";
					$string.="'".$list[1][$i]."'";
					if ($i!=$size-1) {
					$string.=" AND ";
				}
				}

				}
				
			}
				
			}
		echo $string;
		die();
		
		$result = self::$db->select($string);
		return $result;

		//"SELECT first_name,last_name FROM `student` WHERE school = 'Royal College'"

			
	 	}
 	function addStudent($firstname,$lastname,$email,$school,$birthday,$race,$religion,$regdate,$passdate,$gender){

 	
 
 		$query = "INSERT INTO `student` (`first_name`,`last_name`,`school`,`birthdate`,`race`,`religion`,`reg_date`,`out_date`,`gender`) VALUES (".$firstname.",".$lastname.",".$school.",".$birthday.",".$race.",".$religion.",".$regdate.",".$passdate.",".$gender.")";

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