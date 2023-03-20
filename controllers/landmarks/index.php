<?php
use Core\App;

$db = App::resolve(Core\Database::class);

$landmarks = $db->query('SELECT * FROM map_heritage')->get();

// dd($landmarks);

view("landmarks/index.view.php", [
    'heading' => 'Landmarks',
    'landmarks' => $landmarks
]);
