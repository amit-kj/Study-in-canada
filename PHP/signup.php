<?php
require('connect.php');




$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$university = $_POST['university'];
$cgpa = $_POST['cgpa'];
$publications = $_POST['publications'];
$research = $_POST['research'];
$date = date("d/m/Y");

$sql = "INSERT INTO `students`(`Name`, `Password`, `Email`, `University name`, `CGPA`, `No of Publications`, `Research`, `Date`) VALUES ('$username','$password','$email','$university','$cgpa','$publications','$research','$date')";





if(mysqli_query($connection,$sql)or die(mysqli_error($connection)))
{
	header('location:../HTML/login.php');
}
else
{
	echo mysqli_error($conn);
}

?>