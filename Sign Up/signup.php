<html>
	<head>
	<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="table.css">
	</head>
	
	<body>
		<div id="header">
		<h1>Sign Up</h1>
		</div>
		<div id="signup">
		<form action="adduser.php" method="post">
		<fieldset>
		<table align="center">
		
		<tr><th>Registration Number:</th><td><input type="text" maxlength="6" title="Please enter the Reg No in XXxxx format (e.g.TI111)"required name="_id"></td></tr>
		<tr>
		<th>Full Name:</th><td><input type="text" required name="Name"></td></tr>
	<tr>	<th>Hostel Name:</th><td><input list="Hostel" required name="Hostel">
							<datalist id="Hostel">
								<option value="Nalanda">
								<option value="Mithila">
								</datalist></td></tr>
		
		<tr>
		<th>Room No.</th><td><input type="text" align="center" maxlength="3" pattern="[0-9][0-9][0-9]" title="Please enter the Room No in xxx format (e.g.111)" required name="Room_No" ></td></tr>
		<tr><th>Mob No.</th><td><input type="text" maxlength="10" pattern="[0-9]{10}" x-moz-errormessage="Enter a Valid Mobile Number." required name="Mob_No"></td></tr>
		<tr>
		<tr><th>New Password</th><td><input type="password" name="N_password" id="N_password" required></td></tr>
		<tr><th>Confirm New Password</th><td><input type="password" name="CN_password" id="CN_password" required></td></tr>
		</table>
		
		<input type="submit" name="signup" id="signup" value="Submit">
		
		</fieldset>			
		</form>
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

		<div id="footer">
		Copyright ©krish_bhavsar
		</div>

	</body>

</html>