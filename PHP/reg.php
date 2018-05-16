<?php   session_start();   require('connect.php');




if(!isset($_SESSION['username'])) // If session is not set then redirect to Login Page
{
    header("Location:login.php");
}










if ($_GET['university'] ){

    $uni_name = $_GET['university'];
    $uni_link = $GET['university_link'];


    $date = date("Y/m/d");
    $name = $_SESSION['username'];



    echo "$uni_name" ;
    echo "<br/>" ;
    echo "$uni_link";




    //$query ="Update students_can SET Canadian_university= '$uni_name', Application_date= '$date'  where Name = '$name '";
    $query = "INSERT INTO students_can (Name,Canadian_university,Application_date,Approx_date) VALUES ('$name','$uni_name','$date','2018/11/12')" ;
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    //$count = mysqli_num_rows($result);



    if(($query == true)) // If session is not set then redirect to Login Page
    {
        echo "<script type='text/javascript'>alert('Register successfully!')</script>";
        header("Location:Profile.php");




    }





}
















?>





















