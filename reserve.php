<!DOCTYPE html>
<html lang="en">
<?php
    require 'config.php';
?>
<html>
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

    <div class="section-gap-top bg-light aos-init aos-animate" id="reservation-container">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3">Reservation</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 p-5 form-wrap">
                    <form action="reserve.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="label">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="label">Email</label>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="label">Phone</label>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number" class="label">Number Of People</label>
                                    <input name="number" type="text" class="form-control" id="number" placeholder="Number of Guests" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date" class="label">Date</label>
                                    <input name="date" type="text" class="form-control" id="date" placeholder="Date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="time" class="label">Time</label>
                                    <input name="time" type="text" class="form-control" id="time" placeholder="Time" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <input name="reserve" type="submit" value="Make a Reservation" id="reserve" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                        <?php
                            if(isset($_POST['reserve']))
                            {
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $phone=$_POST['phone'];
                                $number=$_POST['number'];
                                $date=$_POST['date'];
                                $time=$_POST['time'];


                                $query= "select * from reserve WHERE date='$date'&& time='$time'";
                                $query_run= mysqli_query($connect, $query);

                                if(mysqli_num_rows($query_run)>0)
                                {
                                    echo '<script type="text/javascript"> alert("not availabile..try another")</script>';

                                }else
                                {
                                    $query="insert into reserve values('$name','$email','$phone','$number','$date','$time')";
                                    $query_run= mysqli_query($connect, $query);

                                    if($query_run)
                                    {
                                        echo '<script type="text/javascript"> alert("Reserved. we will call you to make sure.")</script>';
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