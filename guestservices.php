<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" href="images\icon.png" type="image/gif" />
    <title>Signature Cuisine</title>
    <link rel="stylesheet" href="css\style.css" >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <script src="http://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>

<body>
    
    <!------------------Header------------------------->
    <header class=headbar>       
        <!----logo------------->
        <a href="index.php" class="logo">
            Signature<span> Cuisine</span>
        </a>
        
        <!------------------Navigation------------------------->
        <nav>
            <ul class = "nav_links">
            
                <li><a href="guesthome.php">Home</a></li>
                <li><a href="guestservices.php">Services</a></li>
                <li><a href="guestgallery.php">Gallery </a></li>
                <li><a href="guestabout.php">About Us</a></li>
                <li><a href="guestcontactus.php">Contact Us</a></li>
                <li>  <div class = "loginbtn"><a href="login.php"> <img src="images\logout.png" alt=""></a></div></li>           
            </ul>
        </nav>
           
    </header>


    <!------------------Header-end------------------------>

    <!------------------Services------------------------>

    <section class="slider_main"> 
        <div class="innerslider"> 

            <!--------------- image section-------------------->
            <div class="img-box">
                <img src="images\login.png" alt="background-image" class="img"> 
            </div>
            
            <!--------------- words section-------------------->
            <div class="words-area">
                <div class="caption">
                    <!-- <h3>This section is only <br>
                         available for registered Users </h3> -->
                </div>
            <br>
                <div class="paragraph">
                This section is only <br>
                         available for registered Users 
                </div>
                       <div class="btncontrainer">
                            <div class="button1">
                            <a href="signup.php"> Register Now</a> </div>
                            <div class="button2">
                            <a href="login.php"> Login</a> </div>
                       </div>
            </div>
        </div>
        
    </section>

</body>
</html>