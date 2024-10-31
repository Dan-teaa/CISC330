<?php

require 'userController.php';

// Instantiate UserController
$userController = new UserController();

// Use the `url` query parameter from .htaccess for routing
$requestURI = isset($_GET['url']) ? $_GET['url'] : '';

// Route based on the `url` parameter
if ($requestURI == '/users') {
    // Call the method to return JSON data
    $userController->getUserData();
} else {
    // Call the method to return the HTML view
    $userController->getUserView();
}

?>
