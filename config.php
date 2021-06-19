<?php

	$servername = "ec2-3-212-75-25.compute-1.amazonaws.com";
        $username = "svgoqrbumwusoc";
        $password = "d2e316a5a8665a0af2acc7bb5f0395d00472cbe10fb913c6c58228d203352c37";
        $database = "de169a6mifg8nd";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
