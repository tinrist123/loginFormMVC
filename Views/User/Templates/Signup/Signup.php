<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Views/User/Templates/Signup/style.css" />
    <title>Document</title>
</head>
<?php


if (isset($_SESSION['errorRegis'])) {
    if ($_SESSION['errorRegis'] == "emptyField") {
        $errorWar = "Fill Blank Fields!!";
    } else if ($_SESSION['errorRegis'] == "invalidEmail") {
        $errorWar = "Check Your Email!!! Maybe Invalid Email";
    } else if ($_SESSION['errorRegis'] == "invaliUsername") {
        $errorWar = "Your username invalid";
    } else if ($_SESSION['errorRegis'] == "notMatchPass") {
        $errorWar = "Your confirmPassword not match with Password";
    } else if ($_SESSION['errorRegis'] == "existUsernameOrEmail") {
        $errorWar = "Your Username or Email was existed!!!";
    }
}

$router = new bootstraps_router();
$link = $router->createUrl('Controllers/User/controllerUser', ["action" => "register"]);

?>

<body>
    <div class="Signin-form">
        <div class="container">
            <div class="ErrorWarning" style="text-align: center; margin-bottom: 1em;">
                <h2 style="color:red;"><?php
                                        if (isset($errorWar)) {
                                            echo $errorWar;
                                        } ?></h2>
            </div>
            <div class="card">
                <div class="cardImg"></div>
                <div class="card-Form">
                    <h2 class="title">Registration Info</h2>
                    <form action="<?php echo $link; ?>" method="post">
                        <input type="text" name="usrName" placeholder="Username" />
                        <input type="password" name="pwd" placeholder="***" />
                        <input type="password" name="confirmpwd" placeholder="****" />
                        <input type="text" name="mail" placeholder="Email" />
                        <input type="text" name="name" placeholder="Your Name" />
                        <input type="text" name="address" placeholder="Address" />
                        <input style="color:#fff;" type="datetime-local" id="birthdaytime" name="birthdaytime">
                        <input type="submit" name="submit" value="Submit" />
                        <a style="color:white;" href="<?php echo $router->createUrl('Views/User/Templates/HomePage/homePage'); ?>">Back to HomePage</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>