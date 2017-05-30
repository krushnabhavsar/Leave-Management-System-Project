<?php
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

	</div>
	-->
	<input type ="button" button class="button button1" onclick="window.location='s_home.php';"  value='Home'>
		<input type ="button" button class="button button2" onclick="window.location='s_viewprofile.php';" value='Profile'>
		<input type ="button" button class="button button2 active" onclick="window.location='s_entryform.php';" value='Apply'>
		<input type ="button" button class="button button3" onclick="window.location='s_viewleaves.php';" value='Leave Status'>
		<input type ="button" button class="button button3" onclick="window.location='s_changepassform.php';" value='Change Password'>
		<input type ="button" button class="button button4" onclick="window.location='s_logout.php';" value='Log out'>
		</br>
		</div>
	<h2 align="center"> Apply For leave</h2>
	<div id="leave">
	<form action="s_addleave1.php" name="leave" method="post">
	<fieldset>
    <table align="center">	
	<!--	<tr>
		<th align="left">Registration No.: </th>
		<td align="center"><input type="text" name="_id" size=50></td>
		</tr>
		<tr>
		<th align="left">Name: </th>
		<td align="center"><input type="text" name="Name" size=50></td>
		</tr>-->
		<tr>
		<th align="left">Leave Type:</th>
		<td align="center">
		<select name="Type">
		<option value="Select" name="Select">Select</option>
		<option value="Medical" name="Medical">Medical</option>
		<option value="Casual" name="Casual">Casual</option>
		<option value="Other" name="Other">Other</option>
		</select></td>
		</tr>
		
		<tr>
		<th align="left">From:</th>
		<td align="center"><input type="text" name="From" value="dd/mm/yyyy"></td>
		<tr>
		<th align="left">To :</th>
		<td align="center"><input type="text" name="To" value="dd/mm/yyyy"></td>
		</tr>
		
		<tr>
		<th align="left">Parents </br> Mobile No: </th>
		<td align="center"><input type="text" name="Mob No" size="30"></td>
		</tr>
		
		<tr>
		<th align="left">Reason </br> For Leave: </th>
		<td align="center"><textarea rows="4" cols="32" name="Reason">Enter text here...</textarea></td>
		</tr>
		</table>
		<p><input type="submit" value="Submit" name="leave" id="leave"></p>
		<input type="reset" value="Reset">
		</fieldset>
		</form>
		</div>
		<div id="footer">
		Design & Coded by Team Unique
		</div>
		</body>
		</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		