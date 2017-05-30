<?php
require 'header.php';
$Reg = $yes['_id'];
	$NName = $yes['Name'];
	$Mob1 = $yes['Mob_No'];
	$Room1 = $yes['Room_No'];
	$Hostel1 = $yes['Hostel'];
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
		<h1 align="center">Update Profile</h1>
		</div>
		<div id="update">
		<form action="s_update.php" method="post">
		<fieldset>
		<table align="center">
		<tr>
		<th>Registration Number:</th><td><?php echo $Reg;?></td></tr>
		<tr><th>Full Name:</th><td><?php echo $NName;?></td></tr>
		<tr><th>Hostel Name:</th> <td>
		<select name="Hostel">
		<option value="Mithila" name="Mithila">Mithila</option>
		<option value="Nalanda" name="Nalanda">Nalanda</option>
				</select></td></tr>
		<tr>
		<th>Room No.</th><td><input type="text" maxlength="3" pattern="[0-9]{3}" x-moz-errormessage="Enter a Valid Room Number." align="center" required name="Room_No" value=<?php echo $Room1 ?>></td></tr>
		<tr><th>Mob No.</th><td><input type="text" maxlength="10" pattern="[0-9]{10}" x-moz-errormessage="Enter a Valid Mobile Number." required name="Mob_No" value=<?php echo $Mob1 ?>></td></tr>
	
		</table></br>
		<input type="submit" name="update" id="update" value="Update">
		
		</fieldset>			
		</form>
		</div>
	<div id="footer">
		Design & Coded by Team Unique
		</div>

	</body>

</html>