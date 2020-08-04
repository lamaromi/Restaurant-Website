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

    <section class="section-gap-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="offset-lg-1 col-lg-6 col-md-6">
                    <div class>
                        <img src="img/food1.jpg" alt="food-image" class="aboutFood-img">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class>
                        <h1 class="mb-4">About</h1>
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span><img src="img/logo.svg" alt="logo" class="about-logo" width="100"></span>
                        </div>
                        <p>Our kitchen is not a list of ingredients or demonstration of technical abilities. It is a
                            narration of the landscape and our passions. Cooking is a collision of ideas, techniques,
                            and cultures. It is not mathematical. It is emotional.</p>
                        <p>
                            <span>Mon - Sun <strong><br>8 AM - 11:30 PM</strong></span>
                            <span><br>+82 1360 8098 047</span>
                        </p>
                        <ul class="employee-social d-flex">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg " style="color:#000"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram fa-lg" style="color:#000"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter fa-lg" style="color:#000"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="section-gap-top">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-12 text-center heading-section ftco-animate">
                        <h2 class="mb-4">Special Services</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                        <div class="media block-6 services d-block">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span><img src="img/birthday.svg" alt="service-icon" class="service-icon"></span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Birthday Party</h3>
                                <p>We turn not older with years but newer every day. And in the end, it’s not the years
                                    in
                                    your life that count. It’s the life in your years.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                        <div class="media block-6 services d-block">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span><img src="img/alcohol.svg" alt="service-icon" class="service-icon"></span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Business Party</h3>
                                <p>I believe that if life gives you lemons, you should make lemonade... And try to find
                                    somebody whose life has given them vodka, and have a party.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                        <div class="media block-6 services d-block">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span><img src="img/wedding-arch.svg" alt="service-icon" class="service-icon"></span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Wedding Party</h3>
                                <p>You know you're in love when you can't fall asleep because reality is finally better
                                    than
                                    your dreams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section-gap-top bg-white services-section">
        <div class="container">
            <div class="row section-heading justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="heading mb-4">Other Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-m mb-5d-6 col-lg-4">
                    <div class="media feature-icon d-block text-center">
                        <div class>
                            <span><img src="img/cusine.svg" alt="service-icon" class="service-icon"></span>
                        </div>
                        <div class="media-body">
                            <h3>Cuisine</h3>
                            <p>We must have a pie. Stress cannot exist in the presence of a pie.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="media feature-icon d-block text-center">
                        <div class>
                            <span><img src="img/fresh.svg" alt="service-icon" class="service-icon"></span>
                        </div>
                        <div class="media-body">
                            <h3>Fresh</h3>
                            <p>After a good dinner one can forgive anybody, even one's own relations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="media feature-icon d-block text-center">
                        <div class>
                            <span><img src="img/breakfast.svg" alt="service-icon" class="service-icon"></span>
                        </div>
                        <div class="media-body">
                            <h3>Bread</h3>
                            <p>One cannot think well, love well, sleep well, if one has not dined well.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="media feature-icon d-block text-center">
                        <div class>
                            <span><img src="img/quality.svg" alt="service-icon" class="service-icon"></span>
                        </div>
                        <div class="media-body">
                            <h3>Quality</h3>
                            <p>If more of us valued food and cheer and song above hoarded gold, it would be a
                                merrier
                                world.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="media feature-icon d-block text-center">
                        <div class>
                            <span><img src="img/desert.svg" alt="service-icon" class="service-icon"></span>
                        </div>
                        <div class="media-body">
                            <h3>Variety Deserts</h3>
                            <p>All you need is love. But a little chocolate now and then doesn't hurt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="media feature-icon d-block text-center">
                        <div class>
                            <span><img src="img/chicken.svg" alt="service-icon" class="service-icon"></span>
                        </div>
                        <div class="media-body">
                            <h3>Chicken</h3>
                            <p>Part of the secret of success in life is to eat what you like and let the food fight
                                it
                                out inside.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <footer class="section-gap-top">
        <div class="footer-container">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-3">
                        <h3 class="mb-4">Lovely Facts:</h3>
                        <p>"There is no love sincerer than the love of food." </p>
                        <p>"Humor keeps us alive. Humor and food. Don't forget food. You can go a week without
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