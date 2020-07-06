<?php

class bootstraps_router
{
    const PARAM_NAME = "r";

    const HOME_PAGE = "Views/homePage";
    const INDEX_PAGE = "index";

    public static $sourcePath;

    public function __construct($sourcePath = "")
    {
        if ($sourcePath) {
            self::$sourcePath = $sourcePath;
        }
    }

    public function getGET($name = null)
    {
        if ($name !== null) {
            return isset($_GET[$name]) ? $_GET[$name] : NULL;
        }
        return $_GET;
    }

    public function getPOST($name = null)
    {
        if ($name !== null) {
            return isset($_POST[$name]) ? $_POST[$name] : NULL;
        }
        return $_POST;
    }

    public function Router()
    {
        $url = $this->getGet(self::PARAM_NAME);

        if (!is_string($url) || !$url || $url == self::INDEX_PAGE) {
            $url = self::HOME_PAGE;
        }

        $path = self::$sourcePath . "/" . $url . ".php";
        if (file_exists($path)) {
            return require_once $path;
        } else {
            $this->pageNotFound();
        }
    }

    public function pageNotFound()
    {
        echo "404 Page Not Found";
        die();
    }

    public function createUrl($url, $params = [])
    {
        if ($url) {
            $params[self::PARAM_NAME] = $url;
            // echo $params[self::PARAM_NAME];
            // die();
        }
        // echo "<pre>";
        // var_dump($_SERVER);
        // die();

        return $_SERVER['PHP_SELF'] . '?' . http_build_query($params);
    }

    public function redirect($url, $params = [])
    {

        $u = $this->createUrl($url);

        header('location: ' . $u);
    }

    public function homePage()
    {
        $this->redirect(self::HOME_PAGE);
    }

    public function loginPage()
    {
        $this->redirect('Views/login');
    }

    public function registerPage()
    {
        $this->redirect('Views/register');
    }

    public function pageError($des)
    {
        echo $des;
        die();
    }

    public function controllerUserLink($params = [])
    {

        return $this->createUrl('Controllers/User/controllerUser', $params);
    }

    public function searchBtnLink($url, $params = [])
    {
        if ($url) {
            $params[self::PARAM_NAME] = $url;
            // echo $params[self::PARAM_NAME];
            // die();
        }
        return $_SERVER['HTTP_REFERER']  . '?' . http_build_query($params);
    }
}
