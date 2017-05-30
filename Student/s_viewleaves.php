
<?php 
require 'vendor/autoload.php';
require 'header.php';

$conn = new MongoDB\Client;
        $db = $conn->Project;
	$C_leaves = $db->Leaves;
?>

<input type ="button" button class="button button1" onclick="window.location='s_home.php';"  value='Home'>
		<input type ="button" button class="button button2" onclick="window.location='s_viewprofile.php';" value='Profile'>
		<input type ="button" button class="button button2" onclick="window.location='s_entryform.php';" value='Apply'>
		<input type ="button" button class="button button3 active" onclick="window.location='s_viewleaves.php';" value='Leave Status'>
		<input type ="button" button class="button button3" onclick="window.location='s_changepassform.php';" value='Change Password'>
		<input type ="button" button class="button button4" onclick="window.location='s_logout.php';" value='Log out'>
		</br>
		</div>
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
$findquery = array('Reg_No' => $sid);
$sql = $C_leaves->find($findquery);


foreach($sql as $row)

{
	?>
<tr>
<td><?php echo $row["App_No"]; ?></td>
<td><?php echo $row["Reg_No"]; ?></td>
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
<div id="footer">
		Design & Coded by Team Unique
		</div>
</body>
</html>