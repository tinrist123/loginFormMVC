<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Views/User/Templates/Login/style.css" />
    <title>Document</title>
</head>
<?php

if (isset($_SESSION['errorLogin'])) {
    if ($_SESSION['errorLogin'] == true) {
        $errorLogin =  "Your Username or Password is incorect";
    }
}


$router = new bootstraps_router();

$linkToController =
    $router->controllerUserLink(["action" => "login"]);

?>

<body>
    <div class="content">
        <div class="wrap">
            <div class="login-form">
                <div class="header-title">
                    <h1>Login</h1>
                </div>
                <div class="header-title" style="color : red; padding:0;">
                    <h1><?php
                        if (isset($errorLogin)) {
                            echo $errorLogin;
                        }
                        ?></h1>
                </div>
                <form action="<?php echo $linkToController ?>" method="post">
                    <div class="username common">
                        <input type="text" name="username" class="input-js" />
                        <span id="slipTopUsr" class="ani get-js">Username</span>
                    </div>
                    <div class="password common">
                        <input type="password" name="pwd" class="input-js" />
                        <span id="slipTopPwd" class="ani get-js">Password</span>
                    </div>
                    <button type="submit" value="submit" name="submit">Sign in</button>
                    <div class="forgot" style="text-align: center; width: 100%; margin-top: 1em;">
                        <a href="">Forgot Password</a>
                        <span style="color:#fff;"> / </span><a href=" <?php echo $router->controllerUserLink(['action' => 'register']); ?> ">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="Views/User/Templates/Login/animationAdd.js"></script>

</html>