<?php
session_start();
use Core\App;
use Core\Validator;

$db = App::resolve(Core\Database::class);

//authorization: will add if there is time
$currentUserId = 1;

//authorize if current user can edit the note
authorize(1 === $currentUserId);

//validate the form
$errors = [];

// if ( ! Validator::string($_POST['title'], 1, 50)) {
//     $errors['title'] = 'A title that is no more than 50 characters is required.';
// }

// if ( ! Validator::string($_POST['note'], 1, 1000)) {
//     $errors['note'] = 'A note that is no more than 1,000 characters is required.';
// }

if(!empty($errors)){
    view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note,
    ]);
}
//if no error, update the data   base

// Get the selected filter option
$filter = $_POST['type'];

// Define an array of all possible filter options
$filterOptions = [
    'attraction',
    'lodging',
    'monument',
    'museum',
    'park',
    'place-of-worship',
    'restaurant',
    'swimming',
    'waterfall'
];

// Set the default where clause to an empty string
$whereClause = '';

// If a filter option is selected, set the where clause based on the selected option
if (in_array($filter, $filterOptions)) {
    $whereClause = 'WHERE property_icon = "' . $filter. '"';
}

// Construct the SQL query with the appropriate WHERE clause
$sql = 'SELECT * FROM map_heritage ' . $whereClause;

// Execute the query and get the results
$landmarks = $db->query($sql)->fetchAll();

// Return to the home page with the filtered results
view("index.view.php", [
    'heading' => 'Local Landmarks ',
    'landmarks' => $landmarks
]);
