<!DOCTYPE html>
<html>

<!-- <script src="fp.js"></script> -->

<body>
        <p>Welcome to totallynotascam corp. We here at totallynotascam corp want to assist you with your budgeting needs. Please sign in, or click the signup button 
		to give us your personal information. </p>
		
		<div>
			<a href="login.php"><button>Continue giving us your data! (login)</button> </a>
		</div>
		

		
		<div>
			<a href="signup.php"><button>Give us your data!</button></a>
		</div>		
		
		
		
		<?php 

		//$str = "Hello PHP\n";

		//system("echo ".$str);
		
		/*
		$str = '99';
		$str1 = "Jake";
		$str2 = "Miller";
		//system("python".$str);
		
		passthru("python".$str.$str1.$str2);
		*/
		
		
		//exec("python main.py 9 Jake Miller"); // THIS WORKS!!!!!!!!!!!!!!!!!
		
		?>
		
		
		
		
		<?php
			
			$servername = "localhost";
			$username = "Joseph";
			$password = "password1";
			$dbname = "users.db";
			
			//"C:\xampp\htdocs\financial_planning_localserver\users.db";
			
			//mysql_query("grant file on *.* to Joseph@localhost identified by 'Joseph';");
			

			/*
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			else{
				echo("Good");
			}
		
			$sql = "CREATE DATABASE IF NOT EXISTS myDB";
			if ($conn->query($sql) === TRUE) {
			echo "Database created successfully";
			} else {
			echo "Error creating database: " . $conn->error;
			}
			*/
			
			
			
						
			// Create connection
			$conn = new mysqli($servername, $username, $password);
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}	
			
			$sql = "CREATE DATABASE IF NOT EXISTS myDB";
			if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";
			} else {
			echo "Error creating database: " . $conn->error;
			}			
			
			
			
		?>
		
</body>


</html>


<style>
* {box-sizing: border-box}
/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
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
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>



