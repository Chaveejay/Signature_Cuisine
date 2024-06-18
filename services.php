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

    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            var searchInput = document.getElementById('search-input').value.toLowerCase();
            var sections = document.querySelectorAll('.card, .reserve-card, .offer-card');
            var found = false;

            // Remove previous highlights
            sections.forEach(function(section) {
                section.style.backgroundColor = ''; // remove highlight
            });

            sections.forEach(function(section) {
                if (section.innerText.toLowerCase().includes(searchInput)) {
                    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    section.style.backgroundColor = '#ffff99'; // highlight the found section
                    found = true;
                }
            });

            if (!found) {
                document.getElementById('search-result-text').innerText = "No results found for: " + searchInput;
            } else {
                document.getElementById('search-result-text').innerText = "";
            }
        });
    </script>

    <!------------------Header-end------------------------>

    <!------------------Services------------------------>

<!--------------Offers----------------->

    <section id="offers">
    <div class="order-caption">
            <h1 class="gctext">Offers</h1>
        </div>

        <div class="offer-card-container">
            <div class="offer-card">
            <div class="offer-card-img">
                <img src="images/offers/coke.jpg" alt="" class="offer-img-img">
                </div>
                <h6 class="offer-card-title">Free Coke </h6>
                <div class="offer-card-text">
                    Buy two chicken fried rice and get one free coke (250ml)
                </div>

            </div>
        </div>


    </section>
    <!--------------Order----------------->
    <section id="order">
    <div class="order-caption">
            <h1 class="gctext">Order-Now</h1>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="card-img">
                <img src="images/food/spaghetti.jpg" alt="" class="img-img">
                </div>
                <h6 class="card-title">Spaghetti </h6>
                <div class="card-text">Spaghetti bolognese is a pasta dish of spaghetti with 
                    an Italian meat sauce called ragù, served with Parmesan cheese. 
                    The sauce is made with minced beef or other ground meat, tomatoes, 
                    onions, carrots, celery, milk, garlic, wine, and herbs, and is usually
                     slow-cooked for several hours to develop the flavors.</div>
                     <div class="price">Rs.1500</div>
                     <div class="order-now"><a href="checkout.php">Order Now</a></div>
            </div>
            
            <div class="card">
                <div class="card-img">
                <img src="images/food/fried rice.jpg" alt="" class="img-img">
                </div>
                <h6 class="card-title">Chicken Fried Rice</h3>
                <div class="card-text">The perfect fried chicken is crispy on the outside,
                     with a flavourful crust that contrasts and complements the tender 
                     chicken it contains. The starch is deeply browned, allowing the complex 
                     flavours created by the Maillard reaction to shine through, without 
                     letting anything burn.</div>
                     <div class="price">Rs.1200</div>
                     <div class="order-now"><a href="checkout.php">Order Now</a></div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="images/food/noodles.jpg" alt="" class="img-img">
                </div>
                <h6 class="card-title">Chicken Noodles</h3>
                <div class="card-text">Chicken noodles is a flavorful and satisfying dish 
                    featuring tender pieces of chicken stir-fried with a mix of fresh vegetables
                     and egg noodles. The dish is typically seasoned with a savory blend of soy sauce,
                      garlic, ginger, and a touch of sesame oil, creating a perfect balance of flavors.</div>
                <div class="price">Rs.1200</div>
                <div class="order-now"><a href="checkout.php">Order Now</a></div>
            </div>
            
        </div>
    </section>


<!--------------Reservations----------------->

    <section id="reservation">
    
    <div class="order-caption">
            <h1 class="gctext">Reservations</h1>
        </div>
        <div class="card-container-reserve">
            <div class="reserve-card">
                    <div class="reserve-card-img">
                    <img src="images/tables/couple.jpg" alt="" class="reserve-img-img">
                    </div>
                    <h6 class="reserve-card-title">Couple Table</h3>
                    <div class="reserve-card-text">Experience a romantic dining atmosphere with our exclusive Couple Table reservation.
                        Nestled in a cozy corner of our restaurant, this table offers an intimate setting perfect for special occasions
                        or a memorable evening out. 
                            </div>
                        <div class="reserve-price">Available</div>
                        <div class="reserve-order-now"><a href="">Reserve Today</a></div>
            </div>

            <div class="reserve-card">
                    <div class="reserve-card-img">
                    <img src="images/tables/family.jpg" alt="" class="reserve-img-img">
                    </div>
                    <h6 class="reserve-card-title">Family Table</h3>
                    <div class="reserve-card-text">Gather your loved ones for a delightful dining experience at our Family Table.
                         Designed to accommodate larger groups, this spacious table provides the perfect setting for family gatherings,
                          celebrations, and casual get-togethers.
                            </div>
                        <div class="reserve-price">Available</div>
                        <div class="reserve-order-now"><a href="">Reserve Today</a></div>
            </div>

    </div>

    </section>

</body>
</html>