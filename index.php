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
                <li><a href="index.php">Contact Us</a></li>            
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

    <!------------------Main Slider Section------------------------>
    <section class="slider_main"> 
        <div class="innerslider"> 

            <!--------------- image section-------------------->
            <div class="img-box">
                <img src="images\food.png" alt="background-image" class="img"> 
            </div>
            
            <!--------------- words section-------------------->
            <div class="words-area">
                <div class="caption">
                    <h3>For A Divine Taste </h3>
                </div>
            <br>
                <div class="paragraph">
                Enjoy, Freshly Prepared & Finger <br>
                Lickin' Good Food! 
                </div>
                       <div class="btncontrainer">
                            <div class="button1">
                            <a href=""> Services</a> </div>
                            <div class="button2">
                            <a href="about.php"> About US</a> </div>
                       </div>
            </div>
        </div>
        
    </section>

<!------------------About US ------------------------>
    <section id="about-us"> 
        <div class="inner-about">
        <div class="about-img-box">
                <img src="images\8504.jpg" alt="background-image" class="about-img"> 
            </div>
            
            <!--------------- words section-------------------->
            <div class="aboutus-words-area">
                <div class="aboutus-caption">
                    <h3>About US</h3>
                </div>
            <br>
                <div class="paragraph2">
                Founded in 1997, Signature Cuisine was born from a passion for exquisite food and exceptional hospitality.
                At Signature Cuisine, we believe dining is an art form, a symphony of flavors, and a celebration of culture.<br><br>
                 Nestled in the heart of Kandy, our restaurant is a culinary haven where tradition meets innovation,
                  offering an unforgettable gastronomic journey.
                </div>
                <div class="button3">
                            <a href="" > Read More</a> </div>      
            </div>

        </div>
    </section>
    <!------------------Gallery ------------------------>
    <section id="gallery">
        <div class="gallerycaption">
            <h1 class="gctext">Gallery</h1>
        </div>
        <div class="pic-container">
            <div class="pic1">
            <img src="images/7791.jpg" alt="picture" class="picture">
            </div>
            <div class="pic1">
            <img src="images/8504.jpg" alt="picture"  class="picture">
            </div>
            <div class="pic1">
            <img src="images/5324.jpg" alt="picture"  class="picture">
            </div>
            
            <div class="pic2">
            <img src="images/6471.jpg" alt="picture" class="picture">
            </div>
            <div class="pic3">
            <img src="images/6798.jpg" alt="picture" class="picture">
            </div> 
            <div class="pic4">
            <img src="images/4574.jpg" alt="picture" class="picture">
            </div> 
        </div>

    </section>
    
    
</body>
</html>