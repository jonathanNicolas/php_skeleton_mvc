<?php
/**
 * Created by PhpStorm.
 * User: benoit-xavierhouvet
 * Date: 06/04/2017
 * Time: 21:01
 */

error_reporting(-1);
ini_set('display_errors', 'On');

include_once '../Config/core.php';

$tmp = new Core();
$tmp->iniRouter();

$router->addRoute("/(profile)/([0-9]{1,6})", array("profile", "id"));
$router->addRoute("/(.*)", array("catchall"));
print_r($router->parse($_SERVER['REQUEST_URI']));
