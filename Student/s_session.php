<?php
	 	require 'vendor/autoload.php';
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['student_id']) && isset($_SESSION['student_password']) && isset($_SESSION['student_type']))
	{
   
	}
	else
	{
    header("Refresh: 0; url=../login1.php");
	die();
	}

 $idprofile= $_SESSION['student_id'];
$conn = new MongoDB\Client;
        $db = $conn->Project;
$userCollection= $db->Student;
$userCollection_find= $userCollection->find(array("_id" => $idprofile));

foreach ($userCollection_find as $yes )
 { }
//$C_leaves = $db->Leaves;
       
	?>
