<?php

namespace controllers;
use models\User;

class UserController {
    public function index() {
        $userModel = new User();            //instantiate a User class?
        var_dump($userModel->getAllUsers());
    }
}
