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

      function get_student_result($year,$subject){
        $query = "SELECT s_id,exam_grade FROM student_course where year=$year AND course_id=$subject ORDER BY s_id";

        $result = self::$db->select($query);

        return $result;
      }

      function update_final_results($s_id,$final_result){
        $query="UPDATE  `student_course` SET `exam_grade`=$final_result WHERE s_id=$s_id";

        $result = self::$db->query($query);

        return $result;
      }

      function update_edited_user($user_id,$year,$subject,$type){
        $query="UPDATE  `last_edited` SET `edited_user_id`=$user_id WHERE course_code=$subject AND course_year=$year AND type=$type";

        $result = self::$db->query($query);

        return $result;
      }

      function get_assignment_result($year,$subject){
        $query = "SELECT s_id,assignment_grade FROM student_course where year=$year AND course_id=$subject ORDER BY s_id";

        $result = self::$db->select($query);

        return $result;
      }

      function update_assignment_results($s_id,$assignment_result){
        $query="UPDATE  `student_course` SET `assignment_grade`=$assignment_result WHERE s_id=$s_id";

        $result = self::$db->query($query);

        return $result;
      }

      function view_result($year,$subject){
        $query = "SELECT s_id,assignment_grade,exam_grade FROM student_course where year=$year AND course_id=$subject ORDER BY s_id";

        $result = self::$db->select($query);

        return $result;
      }

      function get_edited_final($year,$subject){
        $query = "SELECT username FROM user WHERE id=(SELECT edited_user_id FROM last_edited where course_year=$year AND course_code=$subject AND type='final_result')";

        $result = self::$db->select($query);

        return $result;
      }

      function get_edited_assignment($year,$subject){
        $query = "SELECT username FROM user WHERE id=(SELECT edited_user_id FROM last_edited where course_year=$year AND course_code=$subject AND type='assignment_result')";

        $result = self::$db->select($query);

        return $result;
      }



    }
?>