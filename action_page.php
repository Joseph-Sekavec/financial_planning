
<p>
<?php

	
	// I need to connect to the database for users...
	$servername = "localhost";
	$username = "Joseph";
	$password = "password1";
	$dbname = "users";


	$conn = mysqli_connect($servername, $username, $password, $dbname);
			
	// Check connection
	if ($conn->connect_error) 
	{
	die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo("GOOD \n");
	}

	
	
	// Need to check form data against username and password...
		
	
	?>
	</p>	
		
	</p>
	<?php
	$budg = mysqli_connect($servername, $username, $password, "budget");
	
	if ($budg->connect_error) 
	{
	die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo("GREAT \n");
	}
	?>
	</p>
	
	</html>
