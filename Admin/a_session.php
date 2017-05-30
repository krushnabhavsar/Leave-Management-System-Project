<?php

	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['_id']) && isset($_SESSION['password']) && isset($_SESSION['type']))
	{

	}
	else
	{
    header("Refresh: 0; url=../login1.php");
	die();
	}
   
        
	
	?>
