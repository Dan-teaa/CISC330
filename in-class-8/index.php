<?php

use controllers\UserController; //note to self, must be '\'

require 'models/User.php';
require 'controllers/UserController.php';

$controller = new UserController(); //constructor?
$controller -> index(); //method call 
