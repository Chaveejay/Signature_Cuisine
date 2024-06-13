<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

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
    <!------------------Admin Panel------------------------->
    <section id="admin">
        <div class="admin-caption"> Admin Panel</div>
        <div class="button-container">
            <div class="btn1"><a href="createstaff.php"> Create new Staff Account </a></div>
            <div class="btn1"><a href="viewstaff.php"> View Existing Staff Accounts</a></div>
            <div class="btn1"> <a href="update_delete_staff.php">Update/Delete Staff Accounts</a></div>
            <div class="btn1"><a href="viewuser.php"> View Existing User Accounts</a></div>
            <div class="btn1"> <a href="update_delete_user.php">Update/Delete User Accounts</a></div>
        </div>

            <div class="logout"><a href="login.php">Logout</a></div>

    </section>     
</body>
</html>