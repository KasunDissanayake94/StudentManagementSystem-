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

 
 class StudentModel
 {
 	
 	protected static $db;
	
	function __construct()
	{
		self::$db = new DB();
		
	}


 	
 	//view all students in the system

 	
 	function addStudent($st_id,$fname,$lname,$area){

 	
 
 		$query = "INSERT INTO `student` (`s_id`,`first_name`,`last_name`,`area`) VALUES (".$st_id.",".$fname.",".$lname.",".$area.")";

		$result = self::$db->query($query);

		return $result;

 	}
 	//get basic details
     function getdetails($st_id){
         $query = "SELECT * FROM `student` WHERE `s_id` = ".$st_id."";

         $result = self::$db->select($query);

         return $result;
     }
     //get contact details
     function getcontactdetails($st_id){
         $query = "SELECT * FROM `student_contact` WHERE `s_id` = ".$st_id."";

         $result = self::$db->select($query);

         return $result;
     }
     //get area deatails
     function getareadetails($st_id){
         $query = "SELECT * FROM `student_address` WHERE `s_id` = '001'";

         $result = self::$db->select($query);

         return $result;
     }
     //get scolarship data from database
     function get_scol($st_id){
         $query = "SELECT * FROM `student_scholar` WHERE `s_id` = ".$st_id."";

         $result = self::$db->select($query);

         return $result;
     }

     function get_repeat($st_id){
         $query = "SELECT * FROM `student_course` WHERE `s_id` = ".$st_id." AND `exam_grade` = 'D' AND `exam_grade` = 'C-'";

         $result = self::$db->select($query);

         return $result;
     }
     //get student grades

     function get_grades($st_id){
         $query = "SELECT * FROM `student_course` WHERE `s_id` = ".$st_id."";

         $result = self::$db->select($query);

         return $result;
     }

 	function update_time($st_id){
 		$query= "UPDATE `student` SET `last_login` = now() WHERE `s_id` = ".$st_id."";

 		$result = self::$db->query($query);

 		return $result;
 	}
 	function update_student($st_id,$firstname,$lastname){

        $query= "UPDATE `student` SET `first_name` = ".$firstname."  WHERE `s_id` = ".$st_id."";

        $result = self::$db->query($query);

        return $result;
    }

 	
 }

?>