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
    <!------------------Admin Panel------------------------->
    <section id="create-staff">
        <div class="create-staff-caption"> Create Staff Account</div>
        <form action="createstafffunc.php" method="post">
        <div class="staff-form">
            <input type="text" id="fname" name="fname" placeholder =" First Name" required/>
            <input type="text" id="lname" name="lname" placeholder =" Last Name" required/>
            <input type="text" id="job" name="job" placeholder =" Job Position" required/>
            <input type="text" id="email" name="email" placeholder =" Email" required/>
            <input type="text" id="username" name="username" placeholder =" Username" required/>
            <input type="text" id="password" name="password" placeholder =" Password" required/>
            <input type="text" id="con-password" name="con-password" placeholder =" Confirm Password" required/>
            <button type="submit" class="create-staff-btn" name="create-staff-btn">
                 Create Account
              </button>
              </div>
        </form> 
        <button type="submit" class="back-btn-cstaff" name="back-btn-cstaff">
            <a href="admin.php">
                Back
                </a>
              </button>


    </section>