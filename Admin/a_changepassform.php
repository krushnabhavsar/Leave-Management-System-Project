<?php
require 'header.php';
?>
<!--<html>
	<head>
	<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="table.css">
	</head>
	
	<body>
		<div id="header">
		
		-->
<input type ="button" button class="button button1" onclick="window.location='a_home.php';"  value='Home'>
	<input type ="button" button class="button button2 " onclick="window.location='a_delstu.php';" value='User Management'>
		<input type ="button" button class="button button3" onclick="window.location='a_viewleaves.php';" value='Leave Status'>
		<input type ="button" button class="button button3 active" onclick="window.location='a_changepassform.php';" value='Change Password'>
		<input type ="button" button class="button button4" onclick="window.location='a_logout.php';" value='Log out'>
		</br>
		</div>
		</br></br></br></br></br></br></br>
		<h1 align="center">Change Password</h1>
		</div>
		<div id="changepass">
		<form action="a_changepass.php" width="auto" method="post" >
		<fieldset>
		<table align="center">
		<tr>
		<th>New Password:</th><td><input type="password" align="center" required name="N_password" id="N_password"></td></tr>
		<tr><th>Confirm New Password:</th><td><input type="password" required name="CN_password" id="CN_password"></td></tr>
		</table>
		</br>
	    <input type="submit" name="changepass" id="changepass" value="Change Password">
		
		</fieldset>			
		</form>
		</div>
		<div id="footer">
		Design & Coded by Team Unique
		</div>
		<script>
		var password1 = document.getElementById('N_password');
var password2 = document.getElementById('CN_password');

var checkPasswordValidity = function() {
    if (password1.value != password2.value) {
        password2.setCustomValidity('Passwords must match.');
    } else {
        password2.setCustomValidity('');
    }        
};

password1.addEventListener('change', checkPasswordValidity, false);
password2.addEventListener('change', checkPasswordValidity, false);
</script>

	</body>

</html>