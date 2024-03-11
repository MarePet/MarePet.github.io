<?php
header('Access-Control-Allow-Origin: *');
include '../connection.php';

$userId = $_POST['user_id'];

$sqlQuery = "DELETE FROM users WHERE user_id = $userId";

$result = $connectNow->query($sqlQuery);

if ($result === TRUE) {
    echo json_encode(
        array(
            "success" => true,
        )
    );
} else {
    echo json_encode(
        array(
            "success" => true,
        )
    );
}