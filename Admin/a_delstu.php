
<?php 
require 'vendor/autoload.php';
require 'header.php';
?>


<!--<html>
	<head>
	<link rel="stylesheet" type="text/css" href="main1.css">
		<link rel="stylesheet" type="text/css" href="table.css">
	
	

	
	
	</head>
	<body background="surmai.jpg">
	
		<h1 align ="center">Leave Management System</h1>
	<div id =header>
		<input type ="button" button class="button button1" onclick="home.html" value='Home'>
		<input type ="button" button class="button button2" onclick="student.html" value='Student Management'>
		<input type ="button" button class="button button3" onclick="leave_Status.html" value='Leave Status'>
		<input type ="button" button class="button button4" align ="right" onclick="login.html" value='Logout'> 

	</div>-->
	<input type ="button" button class="button button1" onclick="window.location='a_home.php';"  value='Home'>
	<input type ="button" button class="button button2 active" onclick="window.location='a_delstu.php';" value='User Management'>
		<input type ="button" button class="button button3" onclick="window.location='a_viewleaves.php';" value='Leave Status'>
		<input type ="button" button class="button button3" onclick="window.location='a_changepassform.php';" value='Change Password'>
		<input type ="button" button class="button button4" onclick="window.location='a_logout.php';" value='Log out'>
		</br>
		</div>
	</br>
	</div>
	<div id="top">
<form action="a_delstu1.php" method="post">
<h1 align="center">Enter the Registration ID of the student to be deleted:</h1><p align="center"><input type="text" name="d_id" id="d_id" >
<input type="submit" name="delete" id="delete" value="Delete"></p>
</div>
<?php

$conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_student = $db->Student;
	
?>
<table align="center" border=1px>
<thead>
<tr>
<th>Reg No.</th>
<th>Full Name</th>
<th>Hostel Name</th>
<th>Room No.</th>
<th>Mob No.</th>


</tr>
</thead>
<tbody>


<?php

$sql = $C_student->find();

foreach($sql as $row)

{
	?>
<tr>
<td><?php echo $row["_id"]; ?></td>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["Hostel"]; ?></td>
<td><?php echo $row["Room_No"]; ?></td>
<td><?php echo $row["Mob_No"]; ?></td>
</tr>


<?php

}

?>
</tbody>
</table>
</form>
<div id="footer">
		Design & Coded by Team Unique
		</div>
</body>
</html>