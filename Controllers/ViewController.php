<?php

class Controllers_ViewController extends Controllers_baseController
{

    public function ViewProduct()
    {
        $router = new bootstraps_router();

        if (isset($_GET['action'])) {
            $nameView = ucfirst($_GET['action']);
            if (isset($_GET['id'])) {
                $idClicked = $_GET['id'];
                $classView =  "Models_" . str_replace("View", "", $nameView);
                $this->redirectView("ViewProduct/${nameView}", ['classView' => $classView, "idClicked" => $idClicked]);
            }
        } else {
            $router->homePage();
        }
    }
}
