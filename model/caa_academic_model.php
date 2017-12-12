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

      function add_scholarship($indexno,$stype,$schol_other,$samount){

  
      $query = "INSERT INTO `student_scholar`(`index_no`,`schol_id`,`schol_other`, `schol_amount`) VALUES (".$indexno.",".$stype.",".$schol_other.",".$samount.")";

      $result = self::$db->query($query);
    
      return $result;


      // function view_lecturer($lec_id){
      //   $query = "SELECT * FROM `lecturer` WHERE id = ".$lec_id." ";

      //   $result = self::$db->select($query);

      //   return $result;
      // }

    }

    function caa_profile($caa_id){
        $query = "SELECT * FROM `caa_academic` WHERE username = ".$caa_id." ";

        $result = self::$db->select($query);

        return $result;
      }

    function view_hostel($name,$indexno,$course,$stype,$schol_other,$samount)
    {


        $query = "INSERT INTO `stu_hostel`( `name`, `indexno`, `course`, `descition`) VALUES (" . $name . "," . $indexno . "," . $course . "," . $stype . ")";

        $result = self::$db->query($query);

        return $result;
    }

    function view_by_mahapola(){
    $query = "SELECT * FROM `scholarship`
              WHERE schol_type='Mahapola'
    ";

    $result = self::$db->select($query);

    return $result;
  }

  function view_by_bursary(){
    $query = "SELECT * FROM `scholarship`
              WHERE schol_type='Bursary'
    ";

    $result = self::$db->select($query);

    return $result;
  }

  function view_by_other_scholarship(){
    $query = "SELECT * FROM `scholarship`
              WHERE schol_type='Other'
    ";

    $result = self::$db->select($query);

    return $result;
  }

  function check_student($indexno){
    $query = "SELECT * FROM `student`
              WHERE index_no=$indexno
    ";

    $result = self::$db->select($query);

    return $result;
  }
  }
?>