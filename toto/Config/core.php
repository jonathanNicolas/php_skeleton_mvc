<?php 
require_once '/Config/db.php';
require_once 'dispatcher.php';
require_once '/Src/router.php';
require_once '/Controllers/UsersController.php';
require_once '/Controllers/ArticlesController.php';

class Core{

public function iniDatabase(){
	$dabatase= Database::getInstance();
}

public function iniController(){
	$user= new UsersController();
	$article=new ArticlesController();
}


public function iniDispatcher(){
	$dispatcher=new Dispatcher();
}

public function iniRouter(){
	$router=new Router();
}


	
}
?>