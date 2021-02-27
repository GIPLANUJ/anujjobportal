<?php
$server="localhost";
$username="root";
$password="root";
$database="muralajobportal";
//creat connection
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
die("connection detail is incorrect".mysqli_connect_error());
}
echo"connection done";
?>

