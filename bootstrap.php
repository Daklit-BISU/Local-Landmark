<?php 

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container;

$container->bind('Core\Database', function(){
    $config = include base_path('config.php');
    return new Database($config['ken_database'],'root', 'passwd');
});

App::setContainer($container);