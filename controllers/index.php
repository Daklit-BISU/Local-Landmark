<?php
use Core\App;
use Core\Database;

$db = App::resolve(Core\Database::class);

$landmarks = $db->query('SELECT * FROM map_heritage')->fetchAll();

view("index.view.php", [
    'heading' => 'Local Landmarks',
    'landmarks' => $landmarks
]);
?>