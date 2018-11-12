<?php 

function connect_db(){
	
	$con =mysql_connect(HOST_NAME,DB_USER,DB_PASS);
	if ($con) {
		mysql_select_db(DB_NAME,$con);
		return $con;
		
		}
	else {
		
		exit('ERROR: '.mysql_error());
		
		}
	}

function loginManager($manager_id, $password) {
	$con = connect_db();
	
	$sql = 'SELECT * FROM manager WHERE mng_user_name = "'.$manager_id.'" AND mng_password = MD5("'.$password.'") ';
	$result = mysql_query($sql, $con);

	if($result) {
		if( mysql_num_rows($result) == 1 ) {
			$_SESSION['is_logged_in'] = 1;
			$_SESSION['mng_user_name'] = $manager_id;
			return true;
		}
		else {
			return false;
		}
	}
	else {
		return false;
	}
}




?>