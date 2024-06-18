<?php
function goback()
{ 
    header("refresh:1; url=services.php");
    exit;
}
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "signature"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_name = $_POST['cname'];
    $contact_number = $_POST['contact'];
    $table_type = $_POST['user-type'];
    $reservation_date = $_POST['date'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO reservations (customer_name, contact, table_type, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $customer_name, $contact_number, $table_type, $reservation_date);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Table Reserved Successfully.');</script>";
        goback();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
