<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css\staff.css" >
</head>
<body>
     <!------------------Header------------------------->
    <div class="headbar">
            <!----logo------------->
            <a href="staff.php" class="logo">
                Signature<span> Cuisine</span>
            </a>
    </div>
    <section id="view-staff">
    <div class="view-staff-caption"> View Orders</div>
    <div class="view-staff-table">
    <table class ="view-staff-tbl">
        
        <tr>
            
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Spaghetti</th>
            <th>Chicken Rice</th>
            <th>Chicken Noodles</th>
            <th>Total</th>
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
        $sql = "SELECT * FROM orders";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["orderid"] . '</td>';
                echo '<td>' . $row["c_name"] . '</td>';
                echo '<td>' . $row["address"] . '</td>';
                echo '<td>' . $row["phone"] . '</td>';
                echo '<td>' . $row["spaghetti"] . '</td>';
                echo '<td>' . $row["chicken_rice"] . '</td>';
                echo '<td>' . $row["chicken_noodles"] . '</td>';
                echo '<td>' . $row["total"] . '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="8">No records found</td></tr>';
        }

        $conn->close();
        ?>
        
    </table>
    </div>
    <button type="submit" class="back-btn-vstaff" name="back-btn-cstaff">
            <a href="staff.php">
                Back
                </a>
              </button>
</section>


</body>
</html>