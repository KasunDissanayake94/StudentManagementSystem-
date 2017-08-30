<?php

header('Content-Type: text/xml');

require('../model/db_model.php');
$db = new DB();
$name = $_GET['u_name'];
$query = "SELECT `username` FROM user WHERE `username` = ".$db->quote($name)."";
$result = $db->select($query);
echo '<?xml version ="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
	

	if(count($result)==1){
		echo "correct username";	
	}elseif($name == ''){
		echo " ";
	}else{
		echo "incorrect username";
	}
		
echo '</response>';

?>