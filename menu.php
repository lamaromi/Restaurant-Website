<!DOCTYPE html>
<html lang="en">
<?php
    require 'config.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font/css/brands.css">
    <link rel="stylesheet" href="font/css/fontawesome.css">
    <link rel="stylesheet" href="font/css/solid.css">
    <link rel="stylesheet" href="font/css/v4-shims.css">
</head>

<body>
    <div class="container">
        <header>
            <a href="index.php">
                <img src="img/logo.svg" alt="logo" class="logo">
            </a>
            <nav>
                <a href="#" class="hide-desktop">
                    <i class="fa fa-bars fa-2x" id="menu" style="color: #000;"> </i>
                </a>
                <ul class="show-desktop" id="nav">
                    <li id="exit" class="exit-btn hide-desktop">
                        <i class="fa fa-bars fa-lg" style="color: white;"></i>
                    </li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="staff.php">Staffs</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="bg-white aos-init aos-animate" id="slideshow-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <div class="slideshow">
                        <img class="mySlides" src="img/slideshow/bg1.jpg" style="width:100%" alt="slide-img">
                        <img class="mySlides" src="img/slideshow/bg2.jpg" style="width:100%" alt="slide-img">
                        <img class="mySlides" src="img/slideshow/bg3.jpg" style="width:100%" alt="slide-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-gap-top bg-light aos-init aos-animate" id="menu-container">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h1 class="mb-3">Menu</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="tab">
                        <li>
                            <button class="tablink" onclick="openOption(event, 'breakfast')">Breakfast</button>
                        </li>
                        <li>
                            <button class="tablink" onclick="openOption(event, 'lunch')">Lunch</button>
                        </li>
                        <li>
                            <button class="tablink" onclick="openOption(event, 'dinner')">Dinner</button>
                        </li>
                    </ul>
                    <div class="tab-panel">
                        <div class="tabpanel" id="breakfast">
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/b1.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Poridge &amp; Banana</h3>
                                    <p>Poridge in a creamy cheese, milk &amp; banana.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$10</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/b2.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Bread &amp; Avacardo</h3>
                                    <p>Avacardo with vegetables &amp; bread.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$10</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/b3.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Avacardo Sandwitch</h3>
                                    <p>Toasted bread with paste made of Avacardo &amp; cheese.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$10</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/b4.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Poridge &amp; Strawberry</h3>
                                    <p>Poridge in a creamy cheese, milk &amp; Strawberry.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$10</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/b5.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Cookies</h3>
                                    <p>Cookies with cheese &amp; honey.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$10</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/b6.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Pancake</h3>
                                    <p>Pancake with honey &amp; mixed fruits.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$10</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/b7.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Bread &amp; Egg</h3>
                                    <p>Toasted bread with Avacardo paste &amp; omelette.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$10</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/b8.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Mushroom &amp; Potato</h3>
                                    <p>Finely cooked Mushroom along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$10</strong>
                                </div>
                            </div>
                        </div>
                        <div class="tabpanel" id="lunch">
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/l1.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Noodles</h3>
                                    <p>Finely cooked Noodles along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$20</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/l2.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Meat &amp; Potato</h3>
                                    <p>Finely cooked Meat along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$20</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/l3.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Chicken</h3>
                                    <p>Fried Chicken.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$20</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/l4.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Spagetti &amp; Potato</h3>
                                    <p>Spagetti along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$20</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/l5.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Chicken balls </h3>
                                    <p>Fried Chicken balls.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$20</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/l6.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Beef &amp; Potato</h3>
                                    <p>Finely cooked Beef along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$20</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/l7.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Whole Chicken</h3>
                                    <p>Finely cooked Chicken.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$20</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/l8.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Mushroom &amp; Potato</h3>
                                    <p>Finely cooked Mushroom along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$20</strong>
                                </div>
                            </div>
                        </div>
                        <div class="tabpanel" id="dinner">
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/d1.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Fried Fish</h3>
                                    <p>Finely cooked fish along with vegetables.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$30</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/d2.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Mushroom &amp; Potato</h3>
                                    <p>Finely cooked Mushroom along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$30</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/d3.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Soup</h3>
                                    <p>Finely cooked Soup along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$30</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/d4.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Potato</h3>
                                    <p>Finely cooked Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$30</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/d5.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Chicken Steak</h3>
                                    <p>Finely cooked Chicken.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$30</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/d6.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Chicken Piece</h3>
                                    <p>Finely cooked Chicken.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$30</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/d7.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Fish &amp; Potato</h3>
                                    <p>Fish and Mushroom along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$30</strong>
                                </div>
                            </div>
                            <div class="d-block d-md-flex menu-food-item">
                                <div class="text order-1 mb-3">
                                    <img src="img/menu/d8.jpg" class="menu-image" alt="Menu Image">
                                    <h3>Chicken &amp; Potato</h3>
                                    <p>Chicken along with Potato.</p>
                                </div>
                                <div class="price order-2">
                                    <strong>$30</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gap-top bg-white aos-init aos-animate" id="customerComment-container">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h1>Customer Comments</h1>
                </div>
            </div>
            <div class="row justify-content-center text-center aos-animate aos-init">
                <div class="col-md-8">
                    <div class="comment-slideshow">
                        <div class="CustomerSlides">
                            <div class="comment-section">
                                <blockquote class="customer-comment">
                                    <div class="customer-img">
                                        <img src="img/customer/c1.jpg" alt="CustomerImage" class="mb-3">
                                        <p class="comment-p">I was expecting the food here to follow in the old Southern
                                            tradition but was
                                            pleased to find the menus trending in a contemporary direction with emphasis
                                            on lean, fresh and organic fare -- while still keeping with Low
                                            Country/Southern convention. My favorite dish at the Ocean Terrace
                                            Restaurant, in fact, was shrimp and grits topped with a tasty tasso sauce
                                            and loaded with locally netted Georgia white shrimp,which are positively
                                            unmatched for flavor. The chef and his staff are staunch advocates of the
                                            farm-to-table concept, sourcing produce, meats, poultry and dairy products
                                            almost exclusively from Georgia organic farms.</p>
                                        <h4>Jenefer Adkins</h4>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="CustomerSlides">
                            <div class="comment-section">
                                <blockquote class="customer-comment">
                                    <div class="customer-img">
                                        <img src="img/customer/c2.jpg" alt="CustomerImage" class="mb-3">
                                        <p class="comment-p">Lovely lunch today. Ordered the crab cake sandwich and was
                                            pleased by the
                                            quality of the crab cake, as well as the nicely toasted roll, thick slices
                                            of ripe avocado, and crisp hot bacon which accompanied it. The side of fresh
                                            fruit was also generous and perfectly ripe. A very good experience! Add this
                                            to the best dining view on a gorgeous Fall day, and it adds up
                                            to perfection!</p>
                                        <h4>Robert Green</h4>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="CustomerSlides">
                            <div class="comment-section">
                                <blockquote class="customer-comment">
                                    <div class="customer-img">
                                        <img src="img/customer/c3.jpg" alt="CustomerImage" class="mb-3">
                                        <p class="comment-p">We thoroughly enjoyed. Everything was perfect. We dined in
                                            the restaurant at the hotel and it was delicious and the service was
                                            excellent. We played golf, went shopping downtown, rode the trolley and just
                                            enjoyed sightseeing. Love it all and want to come back to visit soon.</p>
                                        <h4>Mary Jane</h4>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="CustomerSlides">
                            <div class="comment-section">
                                <blockquote class="customer-comment">
                                    <div class="customer-img">
                                        <img src="img/customer/c4.jpg" alt="CustomerImage" class="mb-3">
                                        <p class="comment-p">The food was fresh, properly prepared and a great value for
                                            the price. We highly recommend it. The breakfast buffet on Sunday was
                                            equally as good.</p>
                                        <h4>Allie Rose</h4>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="CustomerSlides">
                            <div class="comment-section">
                                <blockquote class="customer-comment">
                                    <div class="customer-img">
                                        <img src="img/customer/c5.jpg" alt="CustomerImage" class="mb-3">
                                        <p class="comment-p">My only (dining) experience was ordering a pizza at 9:15pm.
                                            Tanner answered my telephone call to inquire about the time of service and
                                            the pizza options. He took a lot of time discussing details with me and even
                                            went over the menu - assuring me that I would have my pizza by the time the
                                            kitchen closed at 10pm. At 9:45 the pizza was delivered PIPING HOT as if I
                                            were sitting in a restaurant. It was delicious and exactly what I ordered.
                                        </p>
                                        <h4>Billy James</h4>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5" style="text-align:center;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-3">
                        <h3 class="mb-4">Lovely Facts:</h3>
                        <p>"There is no love sincerer than the love of food." </p>
                        <p>"Humor keeps us alive. Humor and food. Don't forget food. You can go a week
                            without
                            laughing."</p>
                        <ul class="footer-widget">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:white"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram fa-lg" style="color:white"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter fa-lg" style="color:white"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h3 class="mb-4">Opening Hours</h3>
                        <span>Everyday</span>
                        <span>8:00 - 23:30</span>
                        <ul>
                            <li>
                                <h4>Lunch</h4>
                                <span>11:00 - 1:30</span>
                            </li>
                            <li>
                                <h4>Dinner</h4>
                                <span>7:30 - 10:00</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h3 class="mb-4">Instagram</h3>
                        <div class="footer-insta">
                            <a href="#">
                                <img src="img/instagram/insta-1.jpg" alt="instagram-pic" class="instagram-pic">
                            </a>
                            <a href="#">
                                <img src="img/instagram/insta-2.jpg" alt="instagram-pic" class="instagram-pic">
                            </a>
                            <a href="#">
                                <img src="img/instagram/insta-3.jpg" alt="instagram-pic" class="instagram-pic">
                            </a>
                        </div>
                        <div class="footer-insta">
                            <a href="#">
                                <img src="img/instagram/insta-4.jpg" alt="instagram-pic" class="instagram-pic">
                            </a>
                            <a href="#">
                                <img src="img/instagram/insta-5.jpg" alt="instagram-pic" class="instagram-pic">
                            </a>
                            <a href="#">
                                <img src="img/instagram/insta-6.jpg" alt="instagram-pic" class="instagram-pic">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h3 class="mb-4">Newsletter</h3>
                        <p>Stay in touch with us</p>
                        <form action="" method="POST" class="subscribe-form">
                            <div class="form-group">
                                <input name="email" type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address" required>
                                <input name="subscribe" type="submit" value="Subscribe"
                                    class="btn btn-outline-white px-5 py-2">
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['subscribe']))
                            {
                                $email=$_POST['email'];
                               

                                $query= "select * from subscribe WHERE email='$email'";
                                $query_run= mysqli_query($connect, $query);

                                if(mysqli_num_rows($query_run)>0)
                                {
                                    echo '<script type="text/javascript"> alert("This email has already Subscribed.</script>';

                                }else
                                {
                                    $query="insert into subscribe values('$email')";
                                    $query_run= mysqli_query($connect, $query);
                                    
                                    if($query_run)
                                    {
                                        echo '<script type="text/javascript"> alert("Thank you for subscribing.")</script>';
                                    }
                                    else{
                                        echo '<script type="text/javascript"> alert("error")</script>';

                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/aos.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>