<?php
	include "connection.php";
	
	if ($con = openCon())
		echo "Connected successfully.";
	
	mysqli_query($con, 'DROP TABLE IF EXISTS Reviews;');
	
	$sql = "CREATE TABLE Reviews(";
	$sql .= "id INT AUTO_INCREMENT, PRIMARY KEY (id),";
	$sql .= "customer_last TEXT,";
	$sql .= "customer_first TEXT,";
	$sql .= "stars INT,";
	$sql .= "comments TEXT,";
	$sql .= "email VARCHAR(50)";
	$sql .= ");";
	
	if (mysqli_query($con, $sql)) {
		echo "Table created.";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	
	//TODO: Load resetscript
	$sql = "INSERT INTO Reviews (customer_last, customer_first, stars, comments, email) VALUES ('Rhodes', 'Lance', 5, 'The greatest!', 'larhodes@wsd.net');";
	
	if (mysqli_query($con, $sql)) {
		echo "New record created successfully.";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	
	closeCon($con);
?>