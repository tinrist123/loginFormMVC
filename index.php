<?php

require_once './bootstraps/bootstraps.php';
session_start();


// $a = new Models_user_User("a", "a", "a", "a", "a", "a");

$test = new Models_user_userIdentify("tinngo", "", "123");
$router = new bootstraps_router(__DIR__);

$router->Router();
// $link  = $router->createUrl('Views/User/Templates/login');


?>

<a href="<?php echo $link; ?>">click</a>