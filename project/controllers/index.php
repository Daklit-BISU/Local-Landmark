<?php

$config = require('config.php');
$db = new Database($config['ken_database'], 'root', 'Darkking24_');

$array_maps = $db->query('SELECT * FROM map_heritage')->findAll();

include("./views/index.view.php");
?>