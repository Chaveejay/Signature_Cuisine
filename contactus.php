<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" href="images\icon.png" type="image/gif" />
    <title>Signature Cuisine</title>
    <link rel="stylesheet" href="css\style.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery </a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>            
            </ul>
        </nav>
            <form class="search" >
               <input type="text" placeholder="Search.." id="search-input">
               <button type="button" id="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </form>
    </header>
    <!------------------Header-end------------------------>
<section id="contact">
     <!--contact us form -->
     <div class="contact-text">Contact US</div>
     <div class="contact-form">
     <form action="contactfunc.php"  method ="POST">

                <input type="text" class="txt" name="name" placeholder="Your Name"  required/>
               
                <input type="text"  class="txt" name="phone" placeholder="Phone Number" required/>
                
                <input type="email"  class="txt" name="email" placeholder="Email" required/>
                
                <input type="text" class="msg" name="message"  placeholder="Message" />
                
                

              <button type="submit" class="contact-btn" name="submit">
                 SEND
              </button>
              </div> 
</section>

