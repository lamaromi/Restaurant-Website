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

    <div class="section-gap-top">
        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row no-gutters slider-text align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate text-center mb-4">
                        <h1 class="mb-2 bread">Contact</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                    <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Your Name" id="name"
                                required />
                        </div>
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Your Email" id="email"
                                required />
                        </div>
                        <div class="form-group">
                            <input name="phone" type="text" class="form-control" placeholder="Your Number" id="phone"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject"
                                required />
                        </div>
                        <div class="form-group">
                            <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"
                                id="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input name="contact" type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['contact']))
                        {
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $phone=$_POST['phone'];
                            $subject=$_POST['subject'];
                            $message=$_POST['message'];

                            $query= "select * from contact WHERE email='$email' && phone='$phone'";
                            $query_run= mysqli_query($connect, $query);

                            if(mysqli_num_rows($query_run)>0)
                            {
                                echo '<script type="text/javascript"> alert("not availabile..try another")</script>';

                            }else
                            {
                                $query="insert into contact values('$name','$email','$phone','$subject','$message')";
                                $query_run= mysqli_query($connect, $query);
                                
                                if($query_run)
                                {
                                    echo '<script type="text/javascript"> alert("Message Sent.")</script>';
                                }
                                else{
                                    echo '<script type="text/javascript"> alert("error")</script>';

                                }
                            }
                        }
                    ?>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                </div>
            </div>
        </div>
    </section>

    <section class="section-gap-top">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4 font-weight-bold">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Address:</span> Chuanda Road, Shuangliu, Chengdu</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Phone:</span> + 82 1360 8098 047</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Email:</span> restaurant_flyhigh@hotmail.com</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Website:</span> flyhigh.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
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
                        <form action="contact.php" method="POST" class="subscribe-form">
                            <div class="form-group">
                                <input name="email" type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address" required>
                                <input name="subscribe" type="submit" value="Subscribe" class="btn btn-outline-white px-5 py-2">
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