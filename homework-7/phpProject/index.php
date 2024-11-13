<?php

require 'userController.php';

//Instantiate 
$userController = new UserController();

//Superglobal for the request method
$requestURI = $_SERVER['REQUEST_URI'];

if ($requestURI == '/users') {
    //Indicates to controller to request json data
    $userController->getUserData();
} else {
    $userController->getUserView();
}



?>