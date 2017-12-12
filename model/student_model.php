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
     function getdetails($nic){
         $query = "SELECT * FROM student WHERE nic ='$nic'";


         $result = self::$db->select($query);

         return $result;
     }
     function getnic($u){
         self::$db = new DB();
         $name = $u;
         $type = "null";
         $query = "SELECT `nic` FROM user WHERE `username` = ".$name."";

         $result = self::$db->select($query);
         if($result){
             $nic = $result[0]['nic'];
         }
         return $nic;

     }
     //pass student identity for the student controller
     function getid($nic){
         $query = "SELECT s_id FROM student WHERE nic ='$nic'";

         $result = self::$db->select($query);
         if($result){
             $s_id = $result[0]['s_id'];
         }
         return $s_id;
     }
     //get contact details
     function getcontactdetails($s_id){
         $query = "SELECT * FROM student_contact WHERE s_id = '$s_id'";

         $result = self::$db->select($query);

         return $result;
     }
     //get area deatails
     function getareadetails($s_id){
         $query = "SELECT * FROM student_address WHERE s_id = '$s_id'";

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
 	function update_student($st_id,$firstname,$lastname,$mname,$school,$bday,$religion,$race){
        //$query= "UPDATE `student` SET `mid_name` = ".$mname.",`first_name` = ".$firstname.",`last_name` = ".$lastname.",`birthdate` = ".$bday.",`religion` = ".$religion.",`race` = ".$race.",`school` = ".$school."  WHERE `s_id` = ".$st_id."";

        $query= "UPDATE `student` SET `mid_name` = ".$mname."  WHERE `s_id` = ".$st_id."";



        $result = self::$db->query($query);

        return $result;
    }
     function update_student_con($st_id,$con1,$con2,$emgcon,$emgper){
         $query= "UPDATE `student_contact` SET `contact1` = ".$con1.",`contact2` = ".$con2.",`emg_contact` = ".$emgcon.",`emg_person` = ".$emgper."  WHERE `s_id` = ".$st_id."";



         $result = self::$db->query($query);

         return $result;
     }
     function update_student_address($st_id,$no,$street,$town){
         $query= "UPDATE `student_address` SET `number_` = ".$no.",`street` = ".$street.",`town` = ".$town."  WHERE `s_id` = ".$st_id."";



         $result = self::$db->query($query);

         return $result;
     }


 	
 }

?>