<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Views/User/Templates/homePagestyle.css">
    <title>Home Page</title>
</head>
<?php
$router = new bootstraps_router();
$linkLogin = $router->createUrl('Views/User/Templates/Login/login');
?>

<body>


    <header>
        <nav class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="./Views/User/Templates/images/logoWeb.png" alt="" class="logoWeb">
                    </div>
                    <div class="col">
                        <p class="bannerHello">
                            Hello,How Are You Today !!
                        </p>
                    </div>
                    <div class="col">
                        <ul class="top-bar__menu">
                            <li><a href="<?php echo $router->createUrl('Views/User/Templates/HomePage/homePage'); ?>">Home</a></li>
                            <li><a href="">More</a></li>
                            <li><a href="">About me</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">Hmm</a></li>
                            <li><a href="<?php echo $router->createUrl('Views/User/Templates/Signup/signup'); ?>">Sign up</a> / <a href="<?php echo $linkLogin; ?>">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>