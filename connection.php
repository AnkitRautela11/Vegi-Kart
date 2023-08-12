<?php


$servername= "localhost";
$username= "root";
$password= "";
$dbname= "vegetable";


$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn){
	echo "";
}
else{
	die("Connection failed ".mysql_connect_error());
}
?>