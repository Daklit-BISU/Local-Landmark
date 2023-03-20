<?php
use Core\App;
use Core\Database;

$db = App::resolve(Core\Database::class);

$landmarks = $db->query('SELECT * FROM map_heritage')->get();

view("index.view.php", [
    'heading' => 'Local Landmarks',
    'landmarks' => $landmarks
]);
?>