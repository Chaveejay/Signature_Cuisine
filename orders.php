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
    $customer_name = $_POST['customerName'];
    $billing_address = $_POST['address'];
    $contact_number = $_POST['contact-no'];
    $productItems = isset($_POST['productItems']) ? $_POST['productItems'] : [];
    $quantities = isset($_POST['quantity']) ? $_POST['quantity'] : [];

    // Initialize product quantities
    $spaghettiQty = 0;
    $chickenFriedRiceQty = 0;
    $chickenNoodlesQty = 0;

    // Calculate total price
    $total_price = 0;

    foreach ($productItems as $product) {
        $quantity = isset($quantities[$product]) ? $quantities[$product] : 0;

        switch ($product) {
            case "Spaghetti":
                $spaghettiQty = $quantity;
                $price = 1500; // Assuming price of Spaghetti is 1500
                break;
            case "Chicken-Fried-Rice":
                $chickenFriedRiceQty = $quantity;
                $price = 1200; // Assuming price of Chicken Fried Rice is 1200
                break;
            case "Chicken-Noodles":
                $chickenNoodlesQty = $quantity;
                $price = 1200; // Assuming price of Chicken Noodles is 1200
                break;
            default:
                $price = 0;
                break;
        }

        $total_price += $quantity * $price;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO orders (c_name, address, phone, spaghetti, chicken_rice, chicken_noodles, total) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiii", $customer_name, $billing_address, $contact_number, $spaghettiQty, $chickenFriedRiceQty, $chickenNoodlesQty, $total_price);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Order Placed successfully.');</script>";
        goback();
    } else {
        echo "Error: " . $stmt->error;
        goback();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
