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

    class caa_academicModel{
      protected static $db;

      function __construct(){
        self::$db = new DB();

      } 

      // function view_lecturer($lec_id){
      //   $query = "SELECT * FROM `lecturer` WHERE id = ".$lec_id." ";

      //   $result = self::$db->select($query);

      //   return $result;
      // }

    }
?>