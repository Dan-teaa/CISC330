<?php

class UserModel {

    public function getAllUsers() {
        return [
            ["name" => "Dante Piedalue", "age" => 22, "school" => "Fordham University", "major" => "Economics"],
            ["name" => "Jasmine McClure", "age" => 22, "school" => "New York University", "major" => "Political Science"],
            ["name" => "Jack Frost", "age" => 20, "school" => "Columbia University", "major" => "Computer Science"],
            ["name" => "David Wallace", "age" => 21, "school" => "City University of New York", "major" => "Mathematics"],
        ];
    }

}

?>