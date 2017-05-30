
<?php require 'vendor/autoload.php';?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="main1.css">
		<link rel="stylesheet" type="text/css" href="table.css">
	
	

	
	
	</head>
	<body background="surmai.jpg">
	
		<h1 align ="center">Leave Management System</h1>
	<div id =header>
		<input type ="button" button class="button button1" onclick="home.html" value='Home'>
		<input type ="button" button class="button button2" onclick="student.html" value='Leave Form'><!--show student data in table*-->
		<input type ="button" button class="button button3" onclick="leave_Status.html" value='Leave Status'><!--approve/reject leave-->
		<input type ="button" button class="button button4" align ="right" onclick="login.html" value='Logout'> <!--go to login page-->
	<!-- </header>-->
	</div>
<?php

$conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_leaves = $db->Leaves;
?>
<table align="center" border=1px>
<thead>
<tr>
<th>Appl No.</th>
<th>Reg No.</th>
<th>Full Name</th>
<th>Type</th>
<th>From</th>
<th>To</th>
<th>Parents Mob No.</th>
<th>Reason</th>
<th>Status</th>

</tr>
</thead>
<tbody>


<?php

$sql = $C_leaves->find();

foreach($sql as $row)

{
	?>
<tr>
<td><?php echo $row["App_No"]; ?></td>
<td><?php echo $row["_id"]; ?></td>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["Type"]; ?></td>
<td><?php echo $row["From"]; ?></td>
<td><?php echo $row["To"]; ?></td>
<td><?php echo $row["Mob_No"]; ?></td>
<td><?php echo $row["Reason"]; ?></td>
<td><?php echo $row["Status"]; ?></td>
<!--<td><button><input type="button" name="delete" id="delete" onclick="location.href='Signup/tp1.php'" value="Delete"></button</td>-->
</tr>


<?php

}

?>
</tbody>
</table>
</form>
</body>
</html>