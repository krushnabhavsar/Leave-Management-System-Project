<?php
	 	require 'vendor/autoload.php';
    // open connection to MongoDB server
     //   require 'adduser.php';
	
	if(isset($_POST['signup']))
	{
	$Name = $_POST['Name'];
	$Hostel = $_POST['Hostel'];
	$Reg = $_POST['_id'];
	$Room_No = $_POST['Room_No'];
	$Mob_No = $_POST['Mob_No'];
	$N_password = $_POST['N_password'];
	$CN_password = $_POST['CN_password'];
	
	$conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_student = $db->Student;
	$C_student -> insertOne(['_id' => $Reg,
					'Name' => $Name,
					'Hostel' => $Hostel,
					'Room_No' => $Room_No,
					'Mob_No' => $Mob_No,
					]);
	$C_users = $db->Users;
	$C_users -> insertOne(['_id' => $Reg,
					'password' => $N_password,
					'type' => "Student",
					]);
					
	header("Refresh: 0; url=../login1.php");
	
	
	}
	
	?>
	