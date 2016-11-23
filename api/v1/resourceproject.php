<?php

include_once '../config.php';

// Connecting to mysql database
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check for database connection error
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$postdata = file_get_contents("php://input");
$request = json_decode($postdata, false);

$name = $request->name;
$email = $request->email;
$phone = $request->phone;
$address = $request->address;
$comment = $request->comment;


$rawSQL = "INSERT INTO project (pname, pemail, pphone, paddress, pcomment, pdatecreate)
VALUES ( '$name', '$email', '$phone', '$address', '$comment', now())";

var_dump($rawSQL);

$result = $conn->query($rawSQL);
if (!empty($conn->error)) {
    die($conn->error);
}

?>