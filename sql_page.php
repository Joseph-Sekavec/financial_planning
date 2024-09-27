<?php 

$str = "main.py";
//$str4 = $_GET('email');
//$str5 = $_GET('psw');
$str1 = $_GET['social'];
$str2 = $_GET['firstName'];
$str3 = $_GET['lastName'];

$result = "python main.py $str1 $str2 $str3";



// echo $str1;


//passthru("python".$str.$str1.$str2.$str3);


//echo $result;

exec($result);


?>

<?php 

echo $_GET["email"]; 
echo "\n";
echo $_GET["psw"];

$usr = $_GET["email"];
$pas = $_GET["psw"];

$upas = "python main.py $usr $pas";

exec($upas);

?>