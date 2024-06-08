<?php
function goback()
{ 
    header("refresh:1; url=signup.php");
    exit;
}
// Check if the form is submitted
if (isset($_POST['signup-btn'])) 
{
    
    // Get form data
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['confirm-password'];

    

    // Validate form data (add more validation as needed)

    if ($password !== $repeatPassword) {
        echo '<script>alert("Passwords does not match");</script>';

        header("refresh:1; url=signup.php");

        $passwordMismatchError = true;
        
    } else {

    
    // Create a database connection (adjust the database credentials)
    $mysqli = new mysqli("localhost", "root", "", "signature");

    // Check the connection
    if ($mysqli->connect_error) 
    {
        die("Connection failed: " . $mysqli->connect_error);
    }


    // Insert data into the users table
    $sql = "INSERT INTO users (firstName, lastName, email, username, password) 
            VALUES ('$firstName', '$lastName', '$email','$username', '$password')";


    if ($mysqli->query($sql) === true)
     {
        // Use JavaScript to show a pop-up alert
        echo '<script>alert("Registration successful!");</script>';
        goback();
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
}
}

?>