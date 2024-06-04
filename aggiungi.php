<?php
$server = "localhost";
$user = "root";
$psw = "root";
$database = "videogames";

$conn = new mysqli($server, $user, $psw, $database);

if ($conn->connect_error) {
  echo $conn->connect_error;
}

$titolo = $_POST["titolo"];
$genere = $_POST["genere"];
$piattaforma = $_POST["piattaforma"];
$annoRilascio = $_POST["annoRilascio"];
$numGiocatori = $_POST["numGiocatori"];
$valutazione = $_POST["valutazione"];

$sql = "insert into video_game_information (titolo, genere, piattaforma, annoRilascio, numGiocatori, valutazione) values ('$titolo', '$genere', '$piattaforma', '$annoRilascio', '$numGiocatori', '$valutazione')";

if ($conn->query($sql) === TRUE) {
  header("location: index.php");
}
?>