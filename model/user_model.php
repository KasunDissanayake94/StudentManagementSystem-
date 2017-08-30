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

 require_once('db_model.php');
 class UserModel
 {
 	protected $username;
 	
 	
 	protected static $db;

 	function UserModel($username)
 	{
 		//self::$db = new DB();
 		$this->username = $username;
 	//	$this->type = $this->get_type($username);

 		
 	}

 	function get_username(){
 		return $this->username;
 	}

 	function set_username(){
 		$this->username = $username;

 	}
 	function get_type($u){
 		self::$db = new DB();
 		$name = $u;
 		$type = "null";
		$query = "SELECT `type` FROM user WHERE `username` = ".$name."";
		
		$result = self::$db->select($query);
		if($result){
			$type = $result[0]['type'];
		}
		return $type;

 	}
 }

?>