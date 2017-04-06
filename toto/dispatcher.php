<?php
include_once 'Src/router.php';


$router = new Router();
$router->addRoute("/(profile)/([0-9]{1,6})", array("profile", "id"));
$router->addRoute("/(.*)", array("catchall"));
print_r($router->parse($_SERVER['REQUEST_URI']));

?>