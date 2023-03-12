<?php

$currentUserId  = 1;
$heading = 'Create Note';

$config = require('config.php');
$db = new Database($config['database'], 'root', 'Darkking24_'); 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_POST);
    $db  -> query('INSERT INTO `notes` (`title`, `note`, `user_id`) VALUES(:title, :note, :user_id)',[
        'title'=> $_POST['title'],
        'note' => $_POST['note'],
        'user_id' => $currentUserId,
    ]);
}


//var_dump($db);

include("views/note-create.view.php");

?>