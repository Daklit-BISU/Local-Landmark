<?php

$config = require('config.php');
$db = new Database($config['//database'], 'root', '//password');

$array_maps = $db->query('SELECT * FROM map_heritage')->findAll();

include("./views/index.view.php");
?>