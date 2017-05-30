<?php
	 	require 'vendor/autoload.php';
		require 's_session.php';
    // open connection to MongoDB server
     //   require 'adduser.php';
	$Reg = $yes['_id'];
	//$NName = $yes['Name'];
	if(isset($_POST['update']))
	{
	
	$Hostel = $_POST['Hostel'];
	
	$Room_No = $_POST['Room_No'];
	$Mob_No = $_POST['Mob_No'];
	/*$N_username = $_POST['N_username'];
	$N_password = $_POST['N_password'];
	$CN_password = $_POST['CN_password'];
	*/
	$conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_student = $db->Student;
	$C_student -> updateOne(['_id' => $Reg],
					['$set' =>[
					'Hostel' => $Hostel,
					'Room_No' => $Room_No,
					'Mob_No' => $Mob_No,
					]]);
								echo "<script>alert('Profile Successfully Updated....');</script>";
	header('Refresh:0;url=s_viewprofile.php');	
	/*$C_users = $db->Users;
	$C_users -> insertOne(['username' => $N_username,
					'password' => $N_password,
					'type' => "Student",
					]);
					*/
					
	//header("Refresh: 0; url=../login1.php");
	
	
	}

	?>
	