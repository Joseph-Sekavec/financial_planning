<?php 

$str = "main.py";
//$str4 = $_GET('email');
//$str5 = $_GET('psw');
$str1 = $_GET['uname'];
$str2 = $_GET['firstName'];
$str3 = $_GET['lastName'];

$result = "python main.py $str1 $str2 $str3";



// echo $str1;


//passthru("python".$str.$str1.$str2.$str3);


//echo $result;

exec("python main.py $str1 $str2 $str3");


?>

<?php 

//echo $_GET["email"]; 
//echo "\n";
//echo $_GET["psw"];

$usr = $_GET["uname"];
$pas = $_GET["psw"];

$upas = "python main.py $usr $pas";

echo "upas is: $upas";

exec("python main.py $usr $pas");

?>


<html>



	<div>
		<a href=login.php> <button>Congratulations, you are signed up! Click here to proceed to the login page.</button> </a>
	</div>

</html>




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
</style>