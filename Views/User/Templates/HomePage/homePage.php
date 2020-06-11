<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Views/User/Templates/HomePage/homePagestyle.css">
    <title>Home Page</title>
</head>
<?php

// echo '<pre>';
// var_dump($_SESSION);
// die();

if (isset($_SESSION['loginStatus'])) {
    if ($_SESSION['loginStatus'] == true) {
        $nameOfUser = $_SESSION['nameOfUser'];
    }
}

$router = new bootstraps_router();
$linkLogin = $router->createUrl('Views/User/Templates/Login/login');
?>

<body>


    <header>
        <nav class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col">


                        <img src="./Views/User/Templates/HomePage/images/logoWeb.png" alt="" class="logoWeb">
                    </div>
                    <div class="col">
                        <p class="bannerHello">
                            Hello <span style="color:red;"><?php
                                                            if ($_SESSION['loginStatus'] == true)
                                                                echo $nameOfUser;
                                                            else {
                                                                echo "Guest";
                                                            } ?>
                            </span> , How Are You Today !!
                        </p>
                    </div>
                    <div class="col">
                        <ul class="top-bar__menu">
                            <li><a href="<?php echo $router->createUrl('Views/User/Templates/HomePage/homePage'); ?>">Home</a></li>
                            <li><a href="">More</a></li>
                            <li><a href="">About me</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">Hmm</a></li>
                            <li>
                                <?php
                                if (isset($_SESSION['loginStatus'])) {
                                    if ($_SESSION['loginStatus'] == true) {
                                        // $router->redirect('Controllers/User/controllerUser');
                                        $aHref = "<a href=" . $router->controllerUserLink(["action" => "logout"]) . ">Log Out</a>";
                                        echo $aHref;
                                    } else {
                                        $aHref = "<a href=" . $router->createUrl('Controllers/User/controllerUser', ["action" => "register"])
                                            . ">Sign up</a>";
                                        $aHref .= " / <a href=" . $router->createUrl('Controllers/User/controllerUser', ["action" => "login"])
                                            . ">Login</a>";
                                        echo $aHref;
                                    }
                                }
                                ?>


                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>