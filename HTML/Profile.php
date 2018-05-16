<?php   session_start();   require('../PHP/connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../CSS/navbar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/profile.css">
    <link rel="stylesheet" type="text/css" href="../CSS/table-style.css">
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




<?php
      if(!isset($_SESSION['username'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }

          echo "Login Success";

          echo "<a href='../PHP/logout.php'> Logout</a> ";

          $user = $_SESSION['username'];

          $query = "SELECT * FROM students WHERE Name = '$user';";

          $sql = mysqli_query($connection, $query);

          $row = mysqli_fetch_assoc($sql);

          $userEmail = $row['Email'];
            $userUniversity = $row['University name'];
            $userPublications = $row['No of Publications'];
            $userReseach = $row['Research'];
            $userCGPA = $row['CGPA'];
            $userIELTS = $row['IELTS'];


            /// Fetch Students Data From students_can database to display into table

$query = "SELECT * FROM students_can WHERE Name = '$user';";

$sql = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($sql);

$uni = $row['Canadian_university'];
$ap_date = $row['Application_date'];

//echo $uni."<br>";
//echo $ap_date;


if(isset($_GET['discard']))
{

    $t = $_GET['discard'] ;
    echo" Got ".$t ;





}








?>


<h5>Student Dashboard</h5>
<br><br>

    <div class="Table">

        <thead>
         <p>Profile</p>
        </thead>



        <div class="Row">
            <div class="Cell">Name : </div>
            <div class="Cell"><?php echo $user; ?></div>
        </div>
        <div class="Row">
            <div class="Cell">CGPA : </div>
            <div class="Cell"><?php echo $userCGPA; ?></div>
        </div>
        <div class="Row">
            <div class="Cell">IELTS : </div>
            <div class="Cell"><?php echo $userIELTS; ?></div>
        </div>
        <div class="Row">
            <div class="Cell">Publication : </div>
            <div class="Cell"><?php echo $userPublications; ?></div>
        </div>
        <div class="Row">
            <div class="Cell">Research Area : </div>
            <div class="Cell"><?php echo $userReseach ; ?></div>
        </div>

    </div>







<table class="container">
    <thead>
    <tr>
        <th><h1>University Name</h1></th>
        <th><h1>Regsister Date</h1></th>


    </tr>
    </thead>
    <tbody>

    <?php
    $query = "SELECT * FROM students_can WHERE Name = '$user';";

    $sql = mysqli_query($connection, $query);


    while($row = mysqli_fetch_array($sql)){
        echo "<tr>";


        echo "<td>" . $row['Canadian_university']. "</td>";
        echo "<td>" . $row['Application_date']. "</td>";
     "</td>";


    }

    echo "</tr>";



    ?>


    </tbody>
</table>



<h5>Professor Emails Dashboard</h5>
<br><br>

<table class="container">
    <thead>
    <tr>
        <th><h1>Professor Name</h1></th>
        <th><h1>Professor Email</h1></th>
        <th><h1>Last Email Date</h1></th>

    </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM email_professor WHERE Name = '$user';";

    $sql = mysqli_query($connection, $query);


    while($row = mysqli_fetch_array($sql)){
        echo "<tr>";

        echo "<td>" . $row['professor_name']. "</td>";
        echo "<td>" . $row['professor_eamil']. "</td>";
        echo "<td>" . $row['time'] . "</td>";


    }

    echo "</tr>";



    ?>

    </tbody>
</table>

</body>
</html>