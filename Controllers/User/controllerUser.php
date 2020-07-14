<?php
$router = new bootstraps_router();

$db = new Models_DBConnection();
function registerUser($register)
{
    global $router;
    if (
        empty($register->email) || empty($register->password)
        || empty($register->Ho) || empty($register->Ten)
    ) {
        $_SESSION['error'] = "EmptyField";

        $router->registerPage();
    } else if (!filter_var($register->email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "invalidEmail";
        $router->registerPage();
    } else {
        if ($register->CheckExistEmail($register->email) == false) {
            $result = $register->InsertKH();
            if ($result) {
                $_SESSION['regissucced'] = true;
                $_SESSION['error'] = "";
                linkToLogin();
            }
        } else {
            $_SESSION['error'] = "existUsernameOrEmail";
            $router->registerPage();
        }
    }
}

function linkToLogin()
{
    global $router;
    $router->redirect('Views/login');
}


if (isset($_GET['action'])) {

    if ($_GET['action'] == "dangki") {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['matkhau'];
            $Fname = $_POST['firstName'];
            $Lname = $_POST['lastName'];

            $register = new Models_User_taikhoan($email, $password, $Fname, $Lname);
            registerUser($register);
        }
    } else if ($_GET['action'] == "dangnhap") {

        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        if (empty($email) || empty($matkhau)) {
            $_SESSION['error'] = "EmptyField";
            $router->loginPage();
        } else {
            $user = new Models_User_taikhoan($email, $matkhau);
            $result = $user->loginStatus($email, $matkhau);

            if ($result) {
                $_SESSION['loginstatus'] = true;
                $_SESSION['idUserLogedin'] = $user->getIdUser($email);
                if (isset($_SESSION['attention'])) {

                    if ($_SESSION['attention'] == true) {

                        $_SESSION['attention'] == false;
                        $_SESSION['errorLogedin'] = false;
                        $router->redirect('Views/info_pay');
                    }
                } else {
                    $_SESSION['errorLogedin'] = false;
                    $router->homePage();
                }
            } else {
                $_SESSION['error'] = "errorData";
                $router->loginPage();
            }
        }
    } else if ($_GET['action'] == "logout") {
        session_destroy();
        $_SESSION['loginstatus'] = false;
        $_SESSION['attention'] == false;
        $_SESSION['idUserLogedin'] = "";
        $_SESSION['error'] = "";

        $router->homePage();
    }
}
