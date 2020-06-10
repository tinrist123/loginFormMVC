<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Views/User/Templates/style.css" />
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="wrap">
            <div class="login-form">
                <div class="header-title">
                    <h1>Login</h1>
                </div>
                <form action="../proccess/login.inc.php" method="post">
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
                        <span style="color:#fff;"> / </span><a href="../signupForm/Signup.php">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="animationAdd.js"></script>

</html>