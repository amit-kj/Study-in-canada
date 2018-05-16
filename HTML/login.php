
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel ="stylesheet" type="text/css" href="../CSS/login_page.css">
    <link rel ="stylesheet" type="text/css" href="../CSS/navbar.css">
    <title>Login</title>

    <style>

    </style>
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




<form action="../PHP/login.php" method="post">
    <p>Student Login</p>
    <input placeholder="Username" type="text" name = "username" required>
    <input placeholder="Password" type="password" name ="password" required>
    <button type="submit">Login</button>
</form>

</body>
</html>