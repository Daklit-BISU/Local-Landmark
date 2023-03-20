<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');

$router->get('/landmarks', 'controllers/landmarks/index.php');
$router->get('/landmarks/create', 'controllers/landmarks/create.php');
$router->post('/landmarks/create', 'controllers/landmarks/store.php');

$router->get('/landmark', 'controllers/landmarks/show.php');
$router->delete('/landmark', 'controllers/landmarks/destroy.php');

$router->get('/landmark/edit', 'controllers/landmarks/edit.php');
$router->patch('/landmark', 'controllers/landmarks/update.php');

