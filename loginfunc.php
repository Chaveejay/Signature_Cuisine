<?php

$connect=mysqli_connect("localhost","root","" ,"signature")
or die("Connection Failed");

function goback()
{ 
    header("refresh:1; url=login.php");
    exit;
}
if(!empty($_POST['signin-btn']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $usertype = $_POST['user-type'];

    $query="SELECT  * FROM  users where username ='$username' and password ='$password'";
    $result=mysqli_query($connect,$query); 
    $count =mysqli_num_rows($result);


    if($count >0)
    {
         // Login successful, redirect to UserDashboard.php
         echo $usertype;
        //  header("Location: index.php");
        //  exit();

    }
    else
    {
        // If the credentials are incorrect, display an error message
        echo '<script>alert("Incorrect Username/Password")</script>';
        goback();

    }
}


?>