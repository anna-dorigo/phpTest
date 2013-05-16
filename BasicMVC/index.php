<?php
/*
 * Created on May 16, 2013
 *
 * This index file is the enter point to our MVC model
 */
 

// Default Controller

$defaultController = "Main";

// Default action

$defaultAction = "homePage";

// get the corresponding controller from URL if not specified then go to default
if(! empty($_GET['controller']))
{
      $controller = $_GET['controller'];
}
else
{
      $controller = $defaultController;
}

// get the corresponding action if not use the default 

if(! empty($_GET['action']))
{
      $action = $_GET['action'];
}
else
{
      $action = $defaultAction;
}

// load the correspoding php file 

$controllerFile = "Controllers/" . $controller . 'Controller.php';

if(is_file($controllerFile))
{
      require_once $controllerFile;
}      
else
{
      die("Controler not found");
}      

// looks for the corresponding action/method in the controller
// Dinamically creates an instance of the controller 

$NewController = $controller."Controller";
$ControllerInstance = new $NewController();

// dinamycally calls the corresponding method
$ControllerInstance->$action();
?>
 
 
