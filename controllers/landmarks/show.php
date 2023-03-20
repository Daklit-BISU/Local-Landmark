<?php

use Core\App;
use Core\Database;

$db = App::resolve(Core\Database::class);

//authorization: will add if there is time
$currentUserId = 1;

$landmark = $db->query('SELECT * FROM map_heritage WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

// dd($landmark);

authorize( 1 === $currentUserId);

view("landmarks/show.view.php", [
    'heading' => 'Landmark',
    'landmark' => $landmark
]);
