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

			
			<input type="hidden" id="uname" name="uname" id="uname" value="<?php echo $username; ?>">
			
		    <label for="bankName"><b>New Bank Information</b></label>
			<input type="text" placeholder="Enter the name of your bank" name="bankName" required>
			
		    <label for="firstName"><b>First Name</b></label>
			<input type="text" placeholder="Enter your first name" name="firstName" required>
			
		    <label for="lastName"><b>Last Name</b></label>
			<input type="text" placeholder="Enter your last name" name="lastName" required>
			
		    <label for="accountBalance"><b>Your Account Balance</b></label>
			<input type="text" placeholder="Enter your account balance" name="accountBalance" required>
   			
			<input id="bankName" type="submit" name="button1"
                class="button" value="Add bank information" />


		</form>
	</div>
	
	
	
	    <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        function button1() {
            //echo "This is Button1 that is selected";
			
			$username = $_POST['uname'];
			$fName = $_POST['firstName'];
			$lName = $_POST['lastName'];
			$bname = $_POST['bankName'];
			$accBal = $_POST['accountBalance'];
			//echo "Bank name is $bank_name for $username";
			$connection = new SQLite3('budget.db');
			
			$str = "python main.py bank $username $fName $lName $bname $accBal";
			
			echo "String is $str \n";
			
			exec($str);
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
			
			
			/////////////////////// This is a test to make sure I can actually access the databases: //////////////////////////////////////////////////////////////
			
					$connection = new SQLite3('budget.db');
					if($connection){
						echo "Table of Banks\n";
					
					$statement = $connection->prepare('SELECT * FROM banks WHERE id = ?');
					$statement->bindValue(1, "$username");
					$results = $statement->execute();
					
					echo('<table>');
					//echo("<th>ID");
					//echo("<th>First Name");
					//echo("<th>Last Name");
					echo("<th>Bank Name");
					echo("<th>Account Balance");
					while($row=$results->fetchArray(SQLITE3_ASSOC)){
						echo('<tr>');
						//echo('<td>');
						//echo $row['ID'] . " ";
						//echo('</td>');
						//echo('<td>');
						//echo $row['first_name'] . " ";
						//echo('</td>');
						//echo('<td>');
						//echo $row['last_name'] . '<br>';  // We separate <br> from the data by a '.'
						//echo('</td>');
						echo("<td>");
						echo $row['bank_name'] . '<br>';  // We separate <br> from the data by a '.'
						echo('</td>');
						echo("<td>");
						echo("$");
						echo $row['account_balance'] . '<br>';  // We separate <br> from the data by a '.'
						echo('</td>');
						echo("</tr>");
				
					}
					echo('</table>');
					}
			
			
			
        }
?>

<p>
	<div>
	<form action="action_page.php" method="post">
		    <label for="showBanks"><b>Banking Information</b></label>
				
			<input type="hidden" id="uname" name="uname" value="<?php echo $username; ?>">
			
			<input id="showBanks" type="submit" name="button2"
                class="button" value="Show your bank information." />
	</form>
	</div>
</p>

<!-- The above section will be to show your bank accounts -->








<!-- Here we shall add to our account balance: -->

<p>
	<div>
	<form action="action_page.php" method="post">
		    <label for="showBanks"><b>Banking Information</b></label>
				
			<input type="hidden" id="uname" name="uname" value="<?php echo $username; ?>">
			
		    <label for="bankName"><b>Bank Name</b></label>
			<input type="text" placeholder="Enter the bank name of the account you wish to add money to." name="bankName" required>


		    <label for="addVal"><b>Enter the amount of money you want to add.</b></label>
			<input type="text" placeholder="Enter your last name" name="addVal" required>
			
			<input id="updateBalane" type="submit" name="button3"
                class="button" value="Add to your account balance." />
	</form>
	</div>
</p>

<?php
		if(array_key_exists('button3', $_POST)) {
            button3();
        }
        function button3() {
					$username = $_POST['uname'];	
					
					$bankName = $_POST['bankName'];
					
					$addVal = floatval($_POST['addVal']);
					
					//echo "Bank name is $bankName";

					$connection = new SQLite3('budget.db');
					if($connection){
						echo "Table of Banks\n";
					
					$statement = $connection->prepare('SELECT * FROM banks WHERE id = ? AND bank_name = ?');
					$statement->bindValue(1, "$username");
					$statement->bindValue(2, "$bankName");
					$results = $statement->execute();


					echo('<div>');
					echo ('<p>');
					echo('<table>');
					//echo("<th>ID");
					//echo("<th>First Name");
					//echo("<th>Last Name");
					echo("<th>Bank Name");
					echo("<th>Account Balance");
					while($row=$results->fetchArray(SQLITE3_ASSOC)){
						echo('<tr>');
						//echo('<td>');
						//echo $row['ID'] . " ";
						//echo('</td>');
						//echo('<td>');
						//echo $row['first_name'] . " ";
						//echo('</td>');
						//echo('<td>');
						//echo $row['last_name'] . '<br>';  // We separate <br> from the data by a '.'
						//echo('</td>');
						echo("<td>");
						echo $row['bank_name'] . '<br>';  // We separate <br> from the data by a '.'
						echo('</td>');
						echo("<td>");
						echo("$");
						
						$resultant = $row['account_balance'] + $addVal;
						
						echo $row['account_balance'] . '<br>';  // We separate <br> from the data by a '.'
						echo('</td>');
						echo("</tr>");
				
					}
					echo('</table>');			
					echo('</P>');
					echo('</div>');

					///////////////////// The above is a unit test to make sure that the balance is different before and after the addition /////////////////////////////
					
					

					
					//echo("Resultant is: $resultant");
					
					$statement = $connection->prepare('UPDATE banks SET account_balance = ? WHERE id = ? AND bank_name = ?');
					$statement->bindValue(1, "$resultant");
					$statement->bindValue(2, "$username");
					$statement->bindValue(3, "$bankName");
					$results = $statement->execute();
					
								
					





///////////////////////////// The below is a unit test to make sure the value is actually updated, and not just displayed //////////////////////////////////////////////////////



					$statement = $connection->prepare('SELECT * FROM banks WHERE id = ? AND bank_name = ?');
					$statement->bindValue(1, "$username");
					$statement->bindValue(2, "$bankName");
					$results = $statement->execute();

					echo('<div>');
					echo ('<p>');
					echo('<table>');
					//echo("<th>ID");
					//echo("<th>First Name");
					//echo("<th>Last Name");
					echo("<th>Bank Name");
					echo("<th>Account Balance");
					while($row=$results->fetchArray(SQLITE3_ASSOC)){
						echo('<tr>');
						//echo('<td>');
						//echo $row['ID'] . " ";
						//echo('</td>');
						//echo('<td>');
						//echo $row['first_name'] . " ";
						//echo('</td>');
						//echo('<td>');
						//echo $row['last_name'] . '<br>';  // We separate <br> from the data by a '.'
						//echo('</td>');
						echo("<td>");
						echo $row['bank_name'] . '<br>';  // We separate <br> from the data by a '.'
						echo('</td>');
						echo("<td>");
						echo("$");
						echo $row['account_balance'] . '<br>';  // We separate <br> from the data by a '.'
						echo('</td>');
						echo("</tr>");
				
					}
					echo('</table>');			
					echo('</P>');
					echo('</div>');
					
					}
		}
		
		?>



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