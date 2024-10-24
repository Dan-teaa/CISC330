<?php

$myDog = [
    'name' => 'Olive',
    'age' => 3,
    'gender' => 'female',
    'breed' => 'Mini Poodle',
    'color' => 'red',
    'vaccinated' => true
];

//Loop through the array and echo out a string that contains each key and value.
echo "Overview<br>";
echo "--------------------------<br>";
foreach ($myDog as $key => $value) {
    echo "$key: $value<br>";
}

function pronouns(string $gender) {
    if ($gender === 'female') {
        return '- She is';
    } elseif ($gender === 'male') {
        return '- He is';
    } else {
        return '- They are';
    }
};

echo "<br>";
echo "<br>";
function vetReport(string $name, int $age, string $breed, string $color, bool $vaccinated = true, string $gender = 'unknown') {
    echo "Detailed Vet Report:<br>";
    echo "--------------------------<br>";
    echo "$name is $age years old.<br>";
    echo pronouns($gender), " a $color $breed.<br>";
    echo "- Vaccination status: $vaccinated.<br>";



}
echo "<br>";
vetReport($myDog['name'], $myDog['age'], $myDog['breed'], $myDog['color'], $myDog['vaccinated'], $myDog['gender']);


?> 
