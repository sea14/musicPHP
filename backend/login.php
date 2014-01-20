<?php
session_start();

	require('../../dbconnect.php');

	//login script for the backend

	//take user input, sanitize
	$username = mysqli_real_escape_string($_POST['username']);
	$password = mysqli_real_escape_string($_POST['password']);

	//structure the query
	$query = $dbconnect -> prepare("SELECT * FROM users WHERE username=? AND password=?");
	$query -> bind_param("ss", $username, $password);

	if($query->execute() == true) {
		$query -> bind_result($result);
		$query -> fetch();
		if($result){

			$user = mysqli_fetch_assoc($result);
			session_regenerate_id();
			$_SESSION['SESSION_USERNAME'] = $username['name'];
		
			session_write_close();
			exit();
	}else{

		echo "Statement failed";
	}
}
$query -> close();
?>
