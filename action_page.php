<html>




	<p>

		
	</p>
	
	<p>
		<?php
		
			
			$username = $_POST['uname'];
			//$_POST['uname'] = $username;
			//echo "UNAME IS: $username";
			?>
			</p>
			
			<p>
			<?php
			$connection = new SQLite3('budget.db');
			
			
			//$db = new SQLite3('mysqlitedb.db');

			//var_dump($connection->querySingle('SELECT id FROM clients WHERE id="Orion"'));
			//print_r($connection->querySingle('SELECT id FROM clients WHERE id="Orion"', true));
			
			//if($connection){
					//echo "Table of Clients\n";
					
					/////////////////
					$statement = $connection->prepare('SELECT * FROM clients WHERE id = ?');
					$statement->bindValue(1, "$username");
					$results = $statement->execute();
					///////////////////  This is how you select a row...
					
					echo "Greetings ";
					while($row=$results->fetchArray(SQLITE3_ASSOC)){
						echo $row['first_name'] . " ";
						$_POST['firstname'] = ['first_name'];
						echo $row['last_name'];
						$_POST['lastname'] = $row['last_name'];
						echo "!";
						
				//	}
					
					
					//$first_name = $_GET['firstname'];
					//$last_name = $_GET['lastname'];
					
					/*
					echo('<table>');
					echo("<th>ID");
					echo("<th>First Name");
					echo("<th>Last Name");
					while($row=$results->fetchArray(SQLITE3_ASSOC)){
						echo('<tr>');
						echo('<td>');
						echo $row['id'] . " ";
						echo('</td>');
						echo('<td>');
						echo $row['first_name'] . " ";
						echo('</td>');
						echo('<td>');
						echo $row['last_name'] . '<br>';  // We separate <br> from the data by a '.'
						echo('</td>');
						echo("</tr>");
						
				
					}
					echo('</table>');
					*/}

			///////////////////// This is how to display the tables: /////////////////////
			/*
			$db = new SQLite3('budget.db');
			$tablesquery = $db->query("SELECT name FROM sqlite_master WHERE type='table';");
			
			
			
			while ($table = $tablesquery->fetchArray(SQLITE3_ASSOC)) {
				echo $table['name'] . '<br />';
			}
			*/
			
			
			
			/////////////////////// This is a test to make sure I can actually access the databases: //////////////////////////////////////////////////////////////
			/*
					$connection = new SQLite3('budget.db');
					if($connection){
						echo "Table of Clients\n";
					
					$results = $connection->query('SELECT * FROM clients');
					echo('<table>');
					echo("<th>ID");
					echo("<th>First Name");
					echo("<th>Last Name");
					while($row=$results->fetchArray(SQLITE3_ASSOC)){
						echo('<tr>');
						echo('<td>');
						echo $row['id'] . " ";
						echo('</td>');
						echo('<td>');
						echo $row['first_name'] . " ";
						echo('</td>');
						echo('<td>');
						echo $row['last_name'] . '<br>';  // We separate <br> from the data by a '.'
						echo('</td>');
						echo("</tr>");
						
				
					}
					echo('</table>');
					}
					*/
			//////////////////////////////////////// The above block works very well, so I will keep it in here to canibalize what I wrote here in other places. ///////////////////
		?>
	</p>
	
	






<!-- This section will be to add bank accounts -->

	
	<div>
	<div>
		<form action="action_page.php" method="post">
		    <label for="bankName"><b>New Bank Information</b></label>
			<input type="text" placeholder="Enter the name of your bank" name="bankName" required>
			
			<input type="hidden" id="uname" name="uname" id="uname" value="<?php echo $username; ?>">
			
			
			<input id="bankName" type="submit" name="button1"
                class="button" value="Add bank information" />
   
		</form>
	</div>
	
	    <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        function button1() {
            echo "This is Button1 that is selected";
			
			$username = $_POST['uname'];
			$bank_name = $_POST['bankName'];
			echo "Bank name is $bank_name for $username";
			$connection = new SQLite3('budget.db');
			
			//exec('python main.py ');
        }

    ?>


		
	</div>
	
	</html>

<!-- The above section will be to add bank accounts -->








<!-- This section will be to show your bank accounts -->
<?php
		if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button2() {
            echo "This is Button2 that is selected";
			$username = $_POST['uname'];
			$connection = new SQLite3('budget.db');
        }
?>
	<form action="action_page.php" method="post">
		    <label for="showBanks"><b>Banking Information</b></label>
			<input type="text" placeholder="Enter the name of your bank" name="showBanks" required>
	
			<input type="hidden" id="uname" name="uname" value="<?php echo $username; ?>">
			
			<input id="showBanks" type="submit" name="button2"
                class="button" value="Show your bank information." />
	</form>

<!-- The above section will be to show your bank accounts -->

<style>
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}


table, th, td {
  border: 2px solid black;
}
</style>