<?php
require 'vendor/autoload.php';

if(isset($_POST['d_id']))
	{
		$conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_student = $db->Student;
	$C_Users = $db->Users;
	$d_id= $_POST['d_id'];
	$C_student -> deleteOne(['_id' => $d_id]);
	$C_Users -> deleteOne(['_id' => $d_id]);
		header('Location:a_delstu.php');

	}
?>