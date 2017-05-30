<?php
require 'header.php';
	$Reg = $yes['_id'];
	$NName = $yes['Name'];
	$Hostel = $yes['Hostel'];
	$Room = $yes['Room_No'];
	$Mob = $yes['Mob_No'];
?>
<!--<html>
	<head>
	<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="table.css">
	</head>
	
	<body>
		<div id="header">
		-->
		<input type ="button" button class="button button1" onclick="window.location='s_home.php';"  value='Home'>
		<input type ="button" button class="button button2 active" onclick="window.location='s_viewprofile.php';" value='Profile'>
		<input type ="button" button class="button button2" onclick="window.location='s_entryform.php';" value='Apply'>
		<input type ="button" button class="button button3" onclick="window.location='s_viewleaves.php';" value='Leave Status'>
		<input type ="button" button class="button button3" onclick="window.location='s_changepassform.php';" value='Change Password'>
		<input type ="button" button class="button button4" onclick="window.location='s_logout.php';" value='Log out'>
		</br>
		</div>
		<h1 align="center">View Profile</h1>
		</div>
		<div id="update">
		<form action="s_updateform.php" method="post">
		<fieldset>
		<table align="center">
		<tr>
		<th>Registration Number:</th><td><?php echo $Reg;?></td></tr>
		<tr><th>Full Name:</th><td><?php echo $NName;?></td></tr>
		<tr><th>Hostel Name:</th><td><?php echo $Hostel;?></td></tr>
		<tr><th>Room No.</th><td><?php echo $Room;?></td></tr>
		<tr><th>Mob No.</th><td><?php echo $Mob;?></td></tr>
	
		</table></br>
		<input type="submit" name="updatepro" id="updatepro" value="Update Profile ">
		
		</fieldset>			
		</form>
		</div>
	<div id="footer">
		Design & Coded by Team Unique
		</div>

	</body>

</html>