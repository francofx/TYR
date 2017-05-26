<?php

include_once '../config.php';
include_once 'post.php';
// Connecting to mysql database
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check for database connection error
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$postdata = file_get_contents("php://input");
$request = json_decode($postdata, false);

$uid = $request->uid;
$name = $request->name;
$email = $request->email;
$phone = $request->phone;
$address = $request->address;
$comment = $request->comment;


$rawSQL = "INSERT INTO project (uid, pname, pemail, pphone, paddress, pcomment, pdatecreate)
VALUES ( '$uid', '$name', '$email', '$phone', '$address', '$comment', now())";

var_dump($rawSQL);

$result = $conn->query($rawSQL);
if (!empty($conn->error)) {
    die($conn->error);
}

//POST para los chabones de mesa de entrada
/**
    "descripcion": "",
    "apellido": "",
    "nombre": "",
    "dni": null,
    "telefono": "",
    "email": "",
    "domicilio": "",
    "causante": "",
    "fecha_rechazo": null,
    "fecha_aceptacion": null
    */
httpPost('http://200.80.240.114:8000/asunto/', [
    "descripcion" => $request->comment,
    "nombre" => $_SESSION['nombre']
]);
//aca tendrias q devolver un json con un mensaje si todo va bien fran. pero ahora esta llegando toda la info bien



?>