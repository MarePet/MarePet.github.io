<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
$serverHost = "fdb1032.awardspace.net";
$user = "4455490_tskmstr";
$password = "parcepapira1";
$databse = "4455490_tskmstr";

$connectNow = new mysqli($serverHost, $user, $password, $databse);

