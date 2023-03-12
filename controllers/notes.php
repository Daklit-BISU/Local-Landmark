<?php

$config = require('config.php');
$db = new Database($config['database'], 'root', 'Darkking24_');

$heading = 'My Notes';

$notes = $db -> query('SELECT * FROM notes WHERE user_id = 1') -> findAll();

include("views/notes.view.php");
?>