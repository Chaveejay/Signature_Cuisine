<?php
$connect = mysqli_connect("localhost", "root", "", "signature") or die("Connection Failed");

function goback() {
    header("refresh:1; url=login.php");
    exit;
}

if (isset($_POST['signin-btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['user-type']; // Assuming you have a dropdown for user type

    if ($usertype === 'Admin') {
        // Admin login
        if ($username === 'Admin' && $password === 'Admin') {
            // Admin credentials are correct, redirect to admin dashboard
            header("Location: admin.php");
            exit();
        } else {
            // Admin credentials are incorrect, display an error message
            echo '<script>alert("Incorrect Admin Username/Password")</script>';
            goback();
        }
    } elseif ($usertype === 'Staff') {
        // Staff login
        $query = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connect, $query);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            // Staff credentials are correct, redirect to staff dashboard
            header("Location: staff.php");
            exit();
        } else {
            // Staff credentials are incorrect, display an error message
            echo '<script>alert("Incorrect Staff Username/Password")</script>';
            goback();
        }
    } elseif ($usertype === 'User') {
        // User login
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connect, $query);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            // User credentials are correct, redirect to user dashboard
            header("Location: index.php");
            exit();
        } else {
            // User credentials are incorrect, display an error message
            echo '<script>alert("Incorrect User Username/Password")</script>';
            goback();
        }
    } else {
        // Handle other user types
        echo '<script>alert("Invalid User Type")</script>';
        goback();
    }
}
?>
