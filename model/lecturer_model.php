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
        $query = "SELECT * FROM `lecturer` WHERE username = ".$lec_id." ";

        $result = self::$db->select($query);

        return $result;
      }

      function update_lecturer_info($username,$fname,$lname,$gender,$dob,$tel,$email,$edu,$research,$course,$awards){
        // $query = "UPDATE `lecturer` SET `first_name`=$fname,`last_name`=$lname,`gender`=$gender,`dob`=$dob,`telephone`=$tel,`email`=$email,`education`=$edu,`research`=$research,`course`=$course,`awards`=$awards WHERE username=$username";

        $query = "UPDATE `lecturer` SET `gender`=$gender,`dob`=$dob,`telephone`=$tel,`email`=$email,`education`=$edu,`research`=$research,`courses`=$course,`awards`=$awards WHERE username =$username";

        $result = self::$db->query($query);

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

      function update_edited_user($user_username,$year,$subject,$type){
        $query="UPDATE  `last_edited` SET `edited_user_name`=$user_username WHERE course_code=$subject AND course_year=$year AND type=$type";

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
        $query = "SELECT edited_user_name FROM last_edited where course_year=$year AND course_code=$subject AND type='final_result'";

        $result = self::$db->select($query);

        return $result;
      }

      function get_edited_assignment($year,$subject){
        $query = "SELECT edited_user_name FROM last_edited where course_year=$year AND course_code=$subject AND type='assignment_result'";

        $result = self::$db->select($query);

        return $result;
      }

      function get_count_result(){
        $query = "SELECT exam_grade,COUNT(s_id) FROM student_course GROUP BY exam_grade";

        $result = self::$db->select($query);

        return $result;
      }

      function get_pass_list($lect_username){
        $query = "SELECT year as y,COUNT(s_id) as fail,(SELECT COUNT(s_id) FROM student_course WHERE course_id=(SELECT course_code FROM course where lect_username=$lect_username) AND year=y) as total FROM student_course WHERE course_id=(SELECT course_code FROM course where lect_username=$lect_username) AND exam_grade='W' GROUP BY YEAR";

        $result = self::$db->select($query);

        return $result;
      }

      



    }
?>