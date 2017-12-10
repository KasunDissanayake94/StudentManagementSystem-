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

    class ArAcedemicModel{
      protected static $db;

      function __construct(){
        self::$db = new DB();

      } 

      function view_ar_acedemic($aracedemic_id){
        $query = "SELECT * FROM `ar_acedemic` WHERE id = ".$aracedemic_id." ";

        $result = self::$db->select($query);

        return $result;
      }

      function addevent($event_date,$event_title,$event_des,$file,$file_type,$file_size){
         $query="INSERT INTO events (eventdate,eventtitle,eventdes,file,type,size)
         VALUES ($event_date,$event_title,$event_des,$file,$file_type,$file_size)";

          $result = self::$db->query($query);

          return $result;

        }
        function view_mahapola(){
            $query = "SELECT * FROM `scholarship`
              WHERE schol_type='Mahapola'";

            $result = self::$db->select($query);

            return $result;
        }

        function view_bursary(){
            $query = "SELECT * FROM `scholarship`
              WHERE schol_type='Bursary'";

            $result = self::$db->select($query);

            return $result;
        }

        function view_other_scholarship(){
            $query = "SELECT * FROM `scholarship`
              WHERE schol_type='Other'";

            $result = self::$db->select($query);

            return $result;
        }


    }
?>