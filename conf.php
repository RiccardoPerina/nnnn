<?php
$server = "localhost";
$user = "root";
$psw = "root";
$database = "videogames";

$conn = new mysqli($server, $user, $psw, $database);

if ($conn->connect_error) {
  echo $conn->connect_error;
}
?>