<?php
    // open connection to MongoDB server
     //   require 'adduser.php';
	 require 'vendor/autoload.php';
	 require 's_session.php';
	if(isset($_POST['leave']))
	{
		 $conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_leaves = $db->Leaves;

	$Reg = $yes['_id'];
	$NName = $yes['Name'];
	$Type = $_POST['Type'];
	$From = $_POST['From'];
	$To = $_POST['To'];
	$Mob_No = $_POST['Mob_No'];
	$Reason = $_POST['Reason'];
	$C_leaves -> insertOne([ 
					'Reg_No' => $Reg,
					'Name' => $NName,
					'Type' => $Type,
					'From' => $From,
					'To' => $To,
					'Mob_No' => $Mob_No,
					'Reason' => $Reason,
					'Status' => 'Pending',
					]);
				echo "<script>alert('Your Application for leave has been applied....');</script>";
	header('Refresh:0;url=s_entryform.php');		
	
	}
	else
	{
		echo "failed";
	}

	?>
	