<link rel = "stylesheet" href = "style.css" />
<br>
<br>
<br>
<?php

	$conn = mysqli_connect("localhost", "root", "root", "userdata");

	if(!$conn) {
		echo "Not Connected to Server";
	}

	$firstName = $_POST["firstname"];
	$lastName = $_POST["lastname"];
	$email = $_POST["email"];

	$sql = "INSERT INTO users(firstName, lastName, email)
	VALUES ('$firstName', '$lastName', '$email')";

	mysqli_query($conn, $sql);
 	
 	echo "Welcome, $firstName! <br>
 	   You Are Now Registered"; 
 	
 	$conn->close();
 ?>