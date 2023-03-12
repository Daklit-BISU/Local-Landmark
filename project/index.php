<?php
include './functions.php';
include './Database.php';
include './router.php';

routeToController($uri, $routes);


// $id = $_GET['id']; 
// $query = "SELECT * From posts where id = ?;";

//dd($query);

//$posts = $db -> query($query,[$id]) -> fetchAll();

//echo "<li>".$posts['Title']."</li>";

//dd($posts);

// foreach ($posts as $post){
//     echo "<li>".$post['Title']."</li>";
// }
?>