
<?php
/**
 * Created by PhpStorm.
 * User: Amit
 * Date: 4/12/2018
 * Time: 7:36 PM
 */


if (isset($_GET['btn']))
{
    $professor_name = $_GET['btn'];




}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel ="stylesheet" type="text/css" href="../CSS/navbar.css">
    <link rel ="stylesheet" type="text/css" href="../CSS/email.css">

    <title>Send Email</title>

</head>
<body>


<ul>
    <li><a style="text-decoration: blink" href="../index.html">Home</a> </li>
    <li><a href="login.php">Login</a> </li>
    <li><a href="Registration.php">Registration</a> </li>
    <li><a href="Profile.php">My Profile</a> </li>
    <li><a href="Research.php">Research</a> </li>
    <li><a href="About.html">About</a> </li>
</ul>

<h2>University Professor Email panel</h2>

<form method="get">
    Professor Email: <input type="text" name="professor_name" value="">
    Your Email: <input type="text" name = "username" >
    Subject: <input  type="text" name = "subject" >
    <textarea rows="4" cols="50">
This is a Demo Email Presentation.Don't send email  to any professor unless need real purpose.
</textarea>


    <button>Send</button>
</form>



</body>
</html>













