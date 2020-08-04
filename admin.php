<!DOCTYPE html>
<html lang="en">
<?php
    require 'config.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/availability-calendar.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="font/css/brands.css">
    <link rel="stylesheet" href="font/css/fontawesome.css">
    <link rel="stylesheet" href="font/css/solid.css">
    <link rel="stylesheet" href="font/css/v4-shims.css">
</head>

<body>
    <div class="section-gap-top bg-white aos-init aos-animate">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h1 class="mb-3">Admin Login</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 p-5 form-wrap">
                    <form action="admin.php" method="POST">

                        <div class="form-group">
                            <label for="name" class="label">Username</label>
                            <input name="username" type="text" class="form-control" id="name" placeholder="Userame"
                                required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="pwd" class="label">Password</label>
                            <input name="password" type="password" class="form-control" id="pwd" placeholder="Password"
                                required>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="form-group">
                                <input name="validate" type="submit" value="Login" id="login"
                                    class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/aos.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>


<?php
if(isset($_POST['validate'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query= "select * from admin WHERE username='$username' && password='$password'";
    $query_run= mysqli_query($connect, $query);

    if(mysqli_num_rows($query_run)>0)
    {
        header('location:customer.php');
    }
    else
    {
        echo "invalid user";
    }
}
?>

</html>