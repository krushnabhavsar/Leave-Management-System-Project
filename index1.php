<?php
	 	require 'vendor/autoload.php';
    // open connection to MongoDB server
        
	
        
       
 	session_start();
	session_regenerate_id(true);
	if(isset($_POST['login']))
	{
		 
	$postedUsername = $_POST['_id'];
	$postedPassword = $_POST['password'];
	$conn = new MongoDB\Client;
        $db = $conn->Project;
	$userCollection = $db->Users;
	$userDbFind = $userCollection->find(array("_id" => $postedUsername));
	
	foreach($userDbFind as $userFind)
	{
		$storedUsername = $userFind['_id'];
		$storedPassword = $userFind['password'];
		$storedType = $userFind['type'];
	}
	
	if($postedUsername == $storedUsername && $postedPassword == $storedPassword && "Admin" == $storedType)
	{ 	
	
		$_SESSION['_id']= $postedUsername;
		$_SESSION['password']=$postedPassword;
		$_SESSION['type']=$storedType;
		header("Refresh: 0; url=Admin/a_home.php");
			die();
		
	}
	elseif($postedUsername == $storedUsername && $postedPassword == $storedPassword && "Student" == $storedType)
	{
		$_SESSION['student_id']= $postedUsername;
		$_SESSION['student_password']=$postedPassword;
		$_SESSION['student_type']=$storedType;
		header("Refresh: 0; url=Student/s_home.php");
	}
	else
	{
				echo "<script>alert('Please check your Registration No. and Password....');</script>";
	header('Refresh:0;url=login1.php');		
	
	}
	}

	?>
	