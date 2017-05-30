<?php
	 	require 'vendor/autoload.php';
    // open connection to MongoDB server
     //   require 'adduser.php';
	
	if(isset($_POST['leave']))
	{
		echo "done";
	$Reg = $_POST['_id'];
	$Name = $_POST['Name'];
	$Type = $_POST['Type'];
	$From = $_POST['From'];
	$To = $_POST['To'];
	$Mob_No = $_POST['Mob_No'];
	$Reason = $_POST['Reason'];
	 
	$conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_leaves = $db->Leaves;
	$C_leaves -> insertOne(['_id' => $Reg,
					'Name' => $Name,
					'Type' => $Type,
					'From' => $From,
					'To' => $To,
					'Mob_No' => $Mob_No,
					'Reason' => $Reason,
					'Status' => 'Pending',
					]);
					
	header("Refresh: 0; url=entryform.php");
	
	
	}
	else
	{
		echo "failed";
	}

	?>
	