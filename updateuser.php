<?php

function goback()
{ 
    header("refresh:1; url=update_delete_user.php");
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

// Check if form is submitted for updating
if (isset($_POST['update'])) {
    $staffid = $_POST['staffid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET firstname='$fname', lastname='$lname', email='$email', username='$username', password='$password' WHERE userid=$staffid";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User updated successfully.');</script>";
        goback();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch the existing data to display in the form
if (isset($_GET['id'])) {
    $staffid = $_GET['id'];

    $sql = "SELECT * FROM users WHERE userid=$staffid";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Staff Account</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css\admin.css" >
</head>
<body>
     <!------------------Header------------------------->
    <div class="headbar">
            <!----logo------------->
            <a href="admin.php" class="logo">
                Signature<span> Cuisine</span>
            </a>
    </div>
    <section id="update-staff">
    <div class="update-staff-caption"> Update Staff Account</div>
    <form method="post" action="">
    <div class="update-staff-form">
        <input type="hidden" name="staffid" value="<?php echo $row['userid']; ?>"required/>

        First Name: <input type="text" id="update-fname" name="fname" value="<?php echo $row['firstname']; ?>"required/><br>

        Last Name: <input type="text" id="update-lname" name="lname" value="<?php echo $row['lastname']; ?>"required/><br>

        Email: <input type="email" id="update-email" name="email" value="<?php echo $row['email']; ?>"required/><br>

        Username: <input type="text" id="update-username" name="username" value="<?php echo $row['username']; ?>"required/><br>

        Password: <input type="text" id="update-password" name="password" value="<?php echo $row['password']; ?>"required/><br>

<div class="btn-container-staff-update">
        <input type="submit" name="update" id="update-staff-btn" value="Update">
        <button type="submit" class="update-staff-back" name="update-staff-back">
            <a href="update_delete_user.php">
                Back
                </a>
              </button>
        </div>
</div>
    </form>
</body>
</html>
