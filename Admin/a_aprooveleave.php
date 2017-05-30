<?php
	 	require 'vendor/autoload.php';
		require 'a_session.php';
 
	if(isset($_POST['approve']))
	{
		
		$App_id = (int)$_POST['a_id'];
 $conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_leaves = $db->Leaves;
	$C_leaves -> updateOne(['App_No' => $App_id ],
					['$set' =>[
						'Status' => 'Approved',
					]]);
								echo "<script>alert('Leave Application Approved....');</script>";
	header('Refresh:0;url=a_viewleaves.php');	

	}
	if(isset($_POST['decline']))
	{
		
		$App_id = (int)$_POST['a_id'];
 $conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_leaves = $db->Leaves;
	$C_leaves -> updateOne(['App_No' => $App_id ],
					['$set' =>[
						'Status' => 'Declined',
					]]);
								echo "<script>alert('Leave Application Declined....');</script>";
	header('Refresh:0;url=a_viewleaves.php');	

	}

	?>
	