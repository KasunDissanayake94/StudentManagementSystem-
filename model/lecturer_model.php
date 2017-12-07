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

    class LecturerModel{
      protected static $db;

      function __construct(){
        self::$db = new DB();

      } 

      function view_lecturer($lec_id){
        $query = "SELECT * FROM `lecturer` WHERE id = ".$lec_id." ";

        $result = self::$db->select($query);

        return $result;
      }

      function get_student_result($year,$subject){
        $query = "SELECT s_id,exam_grade FROM student_course where year=$year AND course_id=$subject ORDER BY s_id";

        $result = self::$db->select($query);

        return $result;
      }

      function add_to_student_course(){
        $query = "SELECT s_id FROM student ORDER BY s_id";
        $result = self::$db->select($query);

        foreach ($result as $data) {
          $student_id=$data['s_id'];

          $query="INSERT INTO student_course(s_id,course_id,exam_grade,assignment_grade,start_date,end_date,attendance,year)
         VALUES ($student_id,'','','','','','','')";

         $result1 = self::$db->query($query);

        return $result1;

        }

      }

      function update_final_results($s_id,$final_result){
        $query="UPDATE  `student_course` SET `exam_grade`=$final_result WHERE s_id=$s_id";

        $result = self::$db->query($query);

        return $result;
      }

    }
?>