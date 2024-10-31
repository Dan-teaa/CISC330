<?php

require 'userModel.php';

class UserController {
    
    public function getUserData() {

        // This creates an instance of the UserModel class
        $userModel = new UserModel();

        // To ensure data is sent in JSON format
        header('Content-Type: application/json');
        echo json_encode($userModel->getAllUsers());
    }

    public function getUserView() {
        include './views/webpage.html';
    }
    
    
}




?>