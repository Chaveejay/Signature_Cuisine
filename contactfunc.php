<?php
function goback()
{ 
    header("refresh:1; url=contactus.php");
    exit;
}
// Database connection settings
$host = 'localhost';       // Hostname
$username = 'root'; // MySQL username
$password = ''; // MySQL password
$database = 'signature'; // Database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    

    // Insert data into the ContactForms table
    $query = "INSERT INTO queries (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

    if (mysqli_query($conn, $query)) 
    {
        // Data inserted successfully
        echo "<script>alert('Message sent successfully.');</script>";
        goback();
    }
     else {
        // Error inserting data
        echo "<script>alert('Error sending message.');</script>";
    }
}

// Close the database connection
$conn->close();
?>
