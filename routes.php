<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');

$router->get('/landmarks', 'controllers/landmarks/index.php');

$router->get('/create', 'controllers/landmarks/create.php');
$router->post('/create', 'controllers/landmarks/store.php');

$router->get('/landmark', 'controllers/landmarks/show.php');
$router->delete('/landmark', 'controllers/landmarks/destroy.php');

$router->get('/edit', 'controllers/landmarks/edit.php');
$router->patch('/', 'controllers/update.php');

