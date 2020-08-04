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

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
  
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: #000;
            color: #fff;
            padding: 12px 8px;
        }

        .header_cs {
            font-size: 20px;
        }


        .header_cs {
            font-size: 20px;
            color: black;
            text-align: center;
            padding: 1em 2em;
            display: block;
            text-decoration: none;
        }

        .header_cs:hover {
            background-color: #000;
            color: white;
        }

        .customer_checking .container .row ul {
            display: flex;
        }

        .customer_checking .container .row ul li {
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
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

    <section class="customer_checking section-gap-top aos-init aos-animate">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center">
                    <ul header_cs>
                        <li><a href="customer.php" class="header_cs">Reservations</a></li>
                        <li><a href=" customer2.php" class="header_cs">Messages</a></li>
                        <li><a href=" subscription.php" class="header_cs">Subscriptions</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-12 text-center heading-section ftco-animate">
                        <h2>Messages sent by Customers</h2>
                    </div>
                </div>
                <table>
                    <tr class="table_header">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                    <?php
                    $sql= "select * from contact";
                    $result= $connect-> query($sql);


                    if($result -> num_rows > 0) {
                        while($row = $result -> fetch_assoc()){
                            echo "<tr><td>". $row["name"]."</td><td>". $row["email"]."</td><td>". $row["phone"]."</td><td>". $row["subject"]."</td><td>". $row["message"]."</td></tr>";
                        }
                        echo "</table>";
                    }
                        else{
                            echo "0 result";
                    }
                    $connect-> close();
                    ?>
                </table>
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