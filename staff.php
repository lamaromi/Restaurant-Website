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

    <section class="chef-quote section-gap-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="offset-lg-1 col-lg-6 col-md-6">
                    <div>
                        <img src="img/employees/c0.jpg" alt="head chef" class="headchef-img">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="relative">
                        <h1>Chef's Quote</h1>
                        <p>I tell a student that the most important class you can take is technique. A great chef is
                            first a great technician. 'If you are a jeweler, or a surgeon or a cook, you have to know
                            the trade in your hand. You have to learn the process. You learn it through endless
                            repetition until it belongs to you. And when it finally belongs to you, finding the
                            happiness and finding the satisfication and finding fullfillment in watching people eat your
                            food with happiness in their face, is what makes you a true chef.</p>
                        <span class="mb-2">Head Chef</span>
                        <h3>Ziz</h3>
                        <img src="img/employees/signature.png" alt="sign" class="sign-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-gap-top aos-init aos-animate">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center">
                    <h2 class="">Our Chef</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="staff">
                        <img src="img/employees/chef-4.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>David Beckham</h3>
                        <span class=" mb-2">Chef</span>
                        <ul class="employee-social d-flex">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3">
                    <div class="staff">
                        <img src="img/employees/chef-1.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Tom</h3>
                        <span class=" mb-2">Chef</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3">
                    <div class="staff">
                        <img src="img/employees/chef-2.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Jerry</h3>
                        <span class=" mb-2">Chef</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3">
                    <div class="staff">
                        <img src="img/employees/chef-3.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Poppey</h3>
                        <span class=" mb-2">Chef</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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

    <section class="section-gap-top aos-init aos-animate">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center">
                    <h2 class="">Others</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="staff">
                        <img src="img/employees/w1.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Ally</h3>
                        <span class=" mb-2">Waiter</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="staff">
                        <img src="img/employees/w2.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Sean</h3>
                        <span class=" mb-2">Waiter</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="staff">
                        <img src="img/employees/w3.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Jake</h3>
                        <span class=" mb-2">Waiter</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="staff">
                        <img src="img/employees/w4.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Paul</h3>
                        <span class=" mb-2">Waiter</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="staff">
                        <img src="img/employees/w6.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Jeff</h3>
                        <span class=" mb-2">Waiter</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="staff">
                        <img src="img/employees/w7.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Sally</h3>
                        <span class=" mb-2">Waiter</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="staff">
                        <img src="img/employees/w8.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Mark</h3>
                        <span class=" mb-2">Waiter</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="staff">
                        <img src="img/employees/w9.jpg" class="chef-img" alt="staff picture">
                    </div>
                    <div class="pt-4">
                        <h3>Harry</h3>
                        <span class=" mb-2">Receptionist</span>
                        <ul class="employee-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-lg" style="color:#000"></i>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>