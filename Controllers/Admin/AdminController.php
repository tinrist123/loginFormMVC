<?php
$router = new bootstraps_router();

if (isset($_GET['action'])) {

    if ($_GET['action'] = "login") {
        if (isset($_POST['submit'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username) or empty($password)) {
                $_SESSION['error'] = 'emptyfield';
                $router->redirect('Views/AdminView/loginAdmin');
            } else if (filter_var(
                $username,
                FILTER_VALIDATE_REGEXP,
                array("options" => array("regexp" => "/[\"\']/"))
            )) {

                $_SESSION['error'] = 'wrongInput';
                $router->redirect('Views/AdminView/loginAdmin');
            }
            else {
                $db = new Models_DBConnection();
                $admin = new Models_User_taikhoan();
                if ($admin->checkLoginAdmin($username, $password)) {
                    $_SESSION['idAdmin'] = $admin->getIdUser($username);
                    $router->redirect('Views/AdminView/admin');
                } else {
                    $_SESSION['error'] = 'wrongInput';
                    $router->redirect('Views/AdminView/loginAdmin');
                }
            }
        }
    }
} else {
    $router->redirect('Views/AdminView/loginAdmin');
}
