<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Staff Account</title>

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
    <div class="update-staff-table">
    <table class ="update-staff-tbl">
        
        <tr>
            
            <th>Staff ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Job Position</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        
       
        <?php
        // Database connection information
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "signature"; 

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to retrieve all records from the staff table
        $sql = "SELECT * FROM staff";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["staffid"] . '</td>';
                echo '<td>' . $row["fname"] . '</td>';
                echo '<td>' . $row["lname"] . '</td>';
                echo '<td>' . $row["position"] . '</td>';
                echo '<td>' . $row["email"] . '</td>';
                echo '<td>' . $row["username"] . '</td>';
                echo '<td>' . $row["password"] . '</td>';
                echo '<td><a href="updatestaff.php?id=' . $row["staffid"] . '">Update</a></td>';
                echo '<td><a href="deletestaff.php?id=' . $row["staffid"] . '">Delete</a></td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="8">No records found</td></tr>';
        }

        $conn->close();
        ?>
        
    </table>
    </div>
    <button type="submit" class="back-btn-ustaff" name="back-btn-ustaff">
            <a href="admin.php">
                Back
                </a>
              </button>
</section>


</body>
</html>