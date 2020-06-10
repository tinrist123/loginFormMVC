<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Views/User/Templates/Signup/style.css" />
    <title>Document</title>
</head>

<body>
    <div class="Signin-form">
        <div class="container">
            <div class="card">
                <div class="cardImg"></div>
                <div class="card-Form">
                    <h2 class="title">Registration Info</h2>
                    <form action="../proccess/signup.inc.php" method="post">
                        <input type="text" name="usrName" placeholder="Username" />
                        <input type="password" name="pwd" placeholder="***" />
                        <input type="password" name="confirmpwd" placeholder="****" />
                        <input type="text" name="mail" placeholder="Email" />
                        <input type="submit" name="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>