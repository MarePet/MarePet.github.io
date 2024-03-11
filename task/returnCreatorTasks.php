<?php
header('Access-Control-Allow-Origin: *');
include '../connection.php'; 

$creatorId = $_POST['creator_id'];

$sqlQuery = "SELECT * FROM task WHERE creator_id = $creatorId";

$result = $connectNow->query($sqlQuery);

$tasks = [];
    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }
    
    // Output tasks as JSON
    echo json_encode($tasks);

