<?php

$book = [
    'title:' => 'Lizzie & Dante',
    'author' => 'Mary Bly',
    'genre' => 'Fiction',
    'published' => 2021,
    'pages' => 368,
    'ISBN' => '978-1-250-76309-0'

];

header('Content-Type: application/json');
echo json_encode($book);
