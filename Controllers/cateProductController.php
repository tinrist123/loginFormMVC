<?php

class Controllers_cateProductController extends Controllers_baseController
{
    public function CateProduct()
    {
        $router = new bootstraps_router();
        if (isset($_GET['method'])) {
            $nameView = ucfirst($_GET['method']) . "View";
        }
        if (isset($_GET['category_id'])) {
            $category_id = $_GET['category_id'];
            $this->redirectView("Category/${nameView}", ['cate_id' => $category_id]);
        } else {
            $router->homePage();
        }
    }
}
