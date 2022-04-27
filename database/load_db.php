<?php
	include "connection.php";
	
	if ($con = openCon())
		echo "Connected successfully.";
	
	//TODO: Build table
	//TODO: Load resetscript
	
	closeCon($con);
?>