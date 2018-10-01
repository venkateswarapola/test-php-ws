<?php
$servername="localhost";
$username="root";
$password="";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);
}
$sql="CREATE DATABASE test";
if($conn->query($sql)===TRUE)
{
	header('Location:connect.php');
}
else 
{
	echo"Error try again";
}
$conn->close();
?>