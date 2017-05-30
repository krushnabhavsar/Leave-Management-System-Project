
	<?php
	require 'header.php';
	$sname = $yes['Name'];
?>



<input type ="button" button class="button button1 active" onclick="window.location='s_home.php';"  value='Home'>
		<input type ="button" button class="button button2" onclick="window.location='s_viewprofile.php';" value='Profile'>
		<input type ="button" button class="button button2" onclick="window.location='s_entryform.php';" value='Apply'>
		<input type ="button" button class="button button3" onclick="window.location='s_viewleaves.php';" value='Leave Status'>
		<input type ="button" button class="button button3" onclick="window.location='s_changepassform.php';" value='Change Password'>
		<input type ="button" button class="button button4" onclick="window.location='s_logout.php';" value='Log out'>
		</br>
		</div>
<div id="Content">

		<h1>Welcome <?php echo $sname;?>!!!!</h1>
<div id="footer">
		Design & Coded by Team Unique
		</div>

</html>