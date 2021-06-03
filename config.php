<?php 

	$mysqli = new mysqli("sql6.freesqldatabase.com","sql6416715","GXkCpVlR3q","sql6416715");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>