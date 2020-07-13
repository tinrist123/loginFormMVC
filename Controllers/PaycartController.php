<?php

class Controllers_PaycartController extends Controllers_baseController
{
    public function ViewPayCart()
    {

        if (!isset($_SESSION['cart'])) {
            $_SESSION['errorCart'] = "EmptyItem";
            $this->redirectView('ViewCart');
        } else {

            if (count($_SESSION['cart']) < 1) {
                $router = new bootstraps_router();
                $_SESSION['errorCart'] = "EmptyItem";
                $router->redirect('Views/ViewCart');
            } else {
                $_SESSION['errorCart'] = "";
                $nameView = $_GET['action'];
                $this->redirectView("${nameView}");
            }
        }
    }
}
