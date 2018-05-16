
<?php

$con = mysqli_connect("localhost", "root", "root", "canadian-study");


if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "SELECT * FROM research_professors";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Research Supervisor</title>
    <link rel="stylesheet" type="text/css" href="../CSS/table-style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/navbar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/research.css">
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



<h1>Research Professores  List</h1>
<br><br>

<?php
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='container'>";
        echo "<tr>";

        echo "<th>University Name</th>";
        echo "<th>Research Area</th>";
        echo "<th>Professor</th>";
        echo "<th>Send Email</th>";

        echo "<th>Email</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";

            $p_name = $row['email'];
            echo "<td>" . $row['university_name'] . "</td>";
            echo "<td>" . $row['research_area'] . "</td>";
            echo "<td>" . $row['Professor_name'] . "</td>";

            $uni_name = $row['university_name'];

            echo "<td><form action='Email.php' method='get'><button class='button' name ='btn' value='<?php echo $uni_name; ?>'>Email</button></form></td>";

            echo "<td>" . $row['email'] . "</td>";


        }

        echo "</tr>";
        echo "</table>";

        mysqli_free_result($result);
    } else{
        echo "No records matching .";
    }
} else{
    echo "ERROR $sql. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>

</body>
</html>