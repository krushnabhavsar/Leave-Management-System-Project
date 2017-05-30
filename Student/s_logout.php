<?php
require 's_session.php'; 


if(isset($_SESSION['student_id']) && isset($_SESSION['student_password']) && isset($_SESSION['student_type']))
{
	// unset all $_SESSION data
	$_SESSION = array();
	// expire the session cookie
	/*if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(	session_name(), '',
		time() - 3600,
		$params["path"],
		$params["domain"],
		$params["secure"],
		$params["httponly"]
		);
	}*/
	unset($_SESSION['student_id']);
	unset($_SESSION['student_password']);
	unset($_SESSION['student_type']);
	
	
	// destroy session
	session_destroy();
	
	
	

	
}
else
{
	  header("Refresh: 0; url=../login1.php");	
}
	  header("Refresh: 0; url=../login1.php");


?>
