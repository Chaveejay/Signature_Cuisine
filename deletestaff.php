<?php
function goback()
{ 
    header("refresh:1; url=update_delete_staff.php");
    exit;
}
// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "signature"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $staffid = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM staff WHERE staffid=?");
    $stmt->bind_param("i", $staffid);

    if ($stmt->execute() === TRUE) {
        echo "<script>alert('User Deleted successfully.');</script>";
        goback();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

