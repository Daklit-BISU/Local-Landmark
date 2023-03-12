<?php

$config = require('config.php');
$db = new Database($config['rico_database'], 'root', 'Darkking24_');

$landmark = $db -> query('SELECT *  FROM map_heritage') -> findAllOrFail();
//dd($landmark);
include("views/project.view.php");
?>