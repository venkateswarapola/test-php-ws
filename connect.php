<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
$sql="CREATE TABLE IF NOT EXISTS details(name VARCHAR(45),phone VARCHAR(10),email VARCHAR(20))";
if($conn->query($sql)===TRUE)
{
	header('Location:insert.php');
}
else{
	echo "Error connection";
}
$conn->close();
?>