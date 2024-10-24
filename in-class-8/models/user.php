<?php

namespace models;

class User {
    public function getAllUsers() {
        return [
            ['id' => 1, 'name' => 'Dante'], ['id' => 2, 'name' => 'Jasmine'], ['id' => 3, 'name' => 'Nathan']  //These are associative arrays (array in an array). Each array is indexed [1] [2] [3]
        ];
    }
}
