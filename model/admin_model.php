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



    function addUser($username,$pass,$fname,$lname,$type,$nic){
    //Insert user into the database
         $password = $this->hashPassword($pass);
         $query = "INSERT INTO `user` (`username`,`password`,`first_name`,`last_name`,`type`,`nic`) VALUES (".$username.",".$password.",".$fname.",".$lname.",".$type.",".$nic.")";
         $result = self::$db->query($query);
         return $result;
     }
 	//view all students in the system

 	function view_all_students(){
 		$query = "SELECT * FROM `student`";

		$result = self::$db->select($query);

        return $result;
 	}

     //Add student to the database
     function addStudent($s_id,$firstname,$lastname,$last_login,$area,$email,$school,$birthday,$race,$religion,$regdate,$passdate,$gender,$stu_image){
         $active="0";
         $query="INSERT INTO student (s_id, first_name,last_name,last_login,area,school,birthdate,race,religion,reg_date,out_date,active,gender,stu_image)
         VALUES ($s_id, $firstname,$lastname,'$last_login',$area,$school,$birthday,$race,$religion,$regdate,$passdate,'$active',$gender,'dvdvdvv')";
         $result = self::$db->query($query);

         return $result;

     }

 	//Add student to the database when the user add into the system
     function addStudentfromAdmin($username,$fname,$lname,$email){

         $query="INSERT INTO student (s_id, first_name,last_name,last_login,area,school,birthdate,race,religion,reg_date,out_date,active,gender,stu_image)
         VALUES ($username,$fname,$lname,'','','','','','','','','','','')";

         $result = self::$db->query($query);

         return $result;

     }

     //Add lecturer to the database when the user add into the system
     function addLecturerfromAdmin($username,$fname,$lname,$email){
         $query="INSERT INTO lecturer (username,first_name,last_name,gender,dob,telephone,email,education,research,courses,awards)
         VALUES ($username,$fname,$lname,'','','',$email,'','','','')";

         $result = self::$db->query($query);

         return $result;

     }

 	function search_user($uname){
 		$query = "SELECT * FROM `user` WHERE id ={$uname} ";


		$result = self::$db->select($query);



		return $result;
 	}
 	function update_user($u_id,$username,$pass,$fname,$lname,$type,$nic){



        $query="UPDATE user SET type={$type},first_name={$fname},last_name={$lname},NIC={$nic},password={$pass},username={$username} WHERE id={$u_id}";

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
 	//delete student
 	function delete($del_id){

        $query = "DELETE FROM student WHERE s_id ={$del_id} ";

        $result = self::$db->query($query);

        return $result;
    }
    //delete user
     function delete_user($delete_user_id){

         $query = "DELETE FROM `user` WHERE nic = '$delete_user_id' ";

         $result = self::$db->query($query);

         return $result;
     }
    //Get data to appear user profile
     function view_profile($u_id){
         $query = "SELECT * FROM `user` WHERE id = ".$u_id." ";

         $result = self::$db->select($query);

         return $result;
     }
     function edit_user($u_id){
         $query = "SELECT * FROM `user` WHERE id = ".$u_id." ";

         $result = self::$db->select($query);

         return $result;
     }
 }

?>