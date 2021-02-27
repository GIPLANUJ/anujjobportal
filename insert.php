<?php
include"connection.php";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$country=$_POST['country'];
$experience=$_POST['experience'];
$education=$_POST['education'];
$subject=$_POST['subject'];

$sql="INSERT INTO resister(firstname,lastname,mobile,gender,dob,username,password,email,country,
experience,education,subject) values('$firstname','$lastname','$mobile','$gender','$dob','$username','$password','$email','$country','$experience','$education','$subject')";
$insert=mysqli_query($conn,$sql);
if($insert)
{
//header('location:index.php');
echo "<script>alert('Resistation Successful')</script>";
echo "<script>location.replace('index.php')</script>";

}
else{
echo "<script>alert('Resistation not Successful')</script>";
echo "<script>location.replace('resister.php')</script>";
}
?>