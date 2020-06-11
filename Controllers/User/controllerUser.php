<?php
$router = new bootstraps_router();


function registerUser($username, $email, $password, $confirmPassword, $name, $address, $birthday)
{
    global $router;
    if (
        empty($username) || empty($email) || empty($password) || empty($confirmPassword)
        || empty($name) || empty($address) || empty($birthday)
    ) {
        $_SESSION['errorRegis'] = "emptyField";
        $router->registerPage();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errorRegis'] = "invalidEmail";
        $router->registerPage();
    } else if (!filter_var($username, FILTER_VALIDATE_REGEXP, array(
        "options" => array("regexp" => "/[a-zA-Z0-9_\.\-]{8,}/")
    ))) {
        $_SESSION['errorRegis'] = "invaliUsername";
        $router->registerPage();
    } else if ($password !== $confirmPassword) {
        $_SESSION['errorRegis'] = "notMatchPass";
        $router->registerPage();
    } else {
        $register = new Models_user_User();

        if ($register->checkExistUser($username) == false || $register->checkExistUser($email) == false) {
            echo $username;
            echo $email;
            die();
            $_SESSION['errorRegis'] = "existUsernameOrEmail";
            $router->registerPage();
        } else {
            $register->getValue($username, $email, $password, $name, $birthday, $address)->insertUser();
            $_SESSION['loginStatus'] = "true";
            $_SESSION['nameOfUser'] = $name;
            unset($_SESSION['errorRegis']);
            $router->HomePage();
        }
    }
}

function linkToLogin()
{
    global $router;
    $router->redirect('Views/User/Templates/Login/login');
}


if (isset($_GET['action'])) {

    if ($_GET['action'] == "register") {
        if (isset($_POST['submit'])) {
            $username = $_POST['usrName'];
            $email = $_POST['mail'];
            $password = $_POST['pwd'];
            $confirmPassword = $_POST['confirmpwd'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $birthday = $_POST['birthdaytime'];

            registerUser($username, $email, $password, $confirmPassword, $name, $address, $birthday);
        } else {
            unset($_SESSION['errorRegis']);
            $router->registerPage();
        }
    } else if ($_GET['action'] == "logout") {
        $_SESSION['loginStatus'] = false;
        $router->homePage();
    } else if ($_GET['action'] == "login") {
        if (isset($_POST['submit'])) {
            $usernameLogin = $_POST['username'];
            $passwordLogin = $_POST['pwd'];

            if (empty($usernameLogin) || empty($passwordLogin)) {
                $_SESSION['errorLogin'] = true;
                linkToLogin();
            } else {
                $userIdentify = new Models_user_userIdentify($usernameLogin, $passwordLogin);
                $dataUser = $userIdentify->login();

                if ($dataUser) {
                    $_SESSION['errorLogin'] = false;
                    $_SESSION['loginStatus'] = true;
                    $_SESSION['nameOfUser'] = $userIdentify->getNameUser();

                    // echo '<pre>';
                    // var_dump($_SESSION);
                    // die();

                    $router->homePage();
                } else {

                    $_SESSION['errorLogin'] = true;
                    linkToLogin();
                }
            }
        } else {
            linkToLogin();
        }
    }
}
