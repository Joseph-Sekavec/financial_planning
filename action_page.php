<html>

<style>
table, th, td {
  border: 2px solid black;
}
</style>
<p>

	
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
	
	</html>
