<html>
<p>
<?php
/*
	
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
	
	*/
	</p>
	
	


	<p>
		<?php

			///////////////////// This is how to display the tables: /////////////////////
			/*
			$db = new SQLite3('budget.db');
			$tablesquery = $db->query("SELECT name FROM sqlite_master WHERE type='table';");
			
			
			
			while ($table = $tablesquery->fetchArray(SQLITE3_ASSOC)) {
				echo $table['name'] . '<br />';
			}
			*/
			
			
			
			/////////////////////// This is a test to make sure I can actually access the databases: //////////////////////////////////////////////////////////////
					$connection = new SQLite3('budget.db');
					if($connection){
						echo "Connected\n";
					}
					$results = $connection->query('SELECT * FROM clients');
					while($row=$results->fetchArray(SQLITE3_ASSOC)){
						echo 'id = ' . $row['id'] . " ";
						echo 'First Name = ' . $row['first_name'] . " ";
						echo 'Last Name = ' . $row['last_name'] . '<br>';  // We separate <br> from the data by a '.'
				
					}
			
		?>
	</p>

	
</html>
