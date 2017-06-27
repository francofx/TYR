<?php
//database settings
$connect = mysqli_connect("127.0.0.1", "root", "CMRmoronbrothers", "expedientes");

$result = mysqli_query($connect, "SELECT * FROM `expedientes` ORDER BY `numero` DESC LIMIT 7");
//SELECT `anio`, `caratula`, `causante` FROM `expedientes` INNER JOIN `causantes` ORDER BY `anio` ASC LIMIT 50 ;
//select * from students
//SELECT * FROM `expedientes` ORDER BY `numero` DESC LIMIT 10

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);
?>