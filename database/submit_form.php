<?php
	include "connection.php";
	
	if ($con = openCon()) {
		$first = htmlspecialchars($_POST['first']);
		$last = htmlspecialchars($_POST['last']);
		$stars = (int)htmlspecialchars($_POST['star']);
		$comments = htmlspecialchars($_POST['comments']);
		$email = htmlspecialchars($_POST['email']);
		
		$sql = "INSERT INTO Reviews (customer_last, customer_first, stars, comments, email) VALUES ('".$first."', '".$last."', ".$stars.", '".$comments."', '".$email."');";
		if (mysqli_query($con, $sql)) {
			echo "Review submitted successfully.";
		} else {
			echo "An error occured.";
		}
	} else {
		print("Error connecting to database.");
	}
	
?>