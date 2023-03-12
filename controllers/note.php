<?php
$config = require('config.php');
$db = new Database($config['database'], 'root', 'Darkking24_');

$note = $db -> query('SELECT * FROM notes where id = :id', [
    'id' => $_GET['id']
]) -> findOrFail();

$currentUserId  = 1;
$heading = htmlspecialchars($note['title']);


authorize($note['user_id'] == $currentUserId);

include("views/note.view.php");

?>