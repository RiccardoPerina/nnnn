<?php
include "conf.php";

$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titolo = $_POST["titolo"];
  $genere = $_POST["genere"];
  $piattaforma = $_POST["piattaforma"];
  $annoRilascio = $_POST["annoRilascio"];
  $numGiocatori = $_POST["numGiocatori"];
  $valutazione = $_POST["valutazione"];

  $sql = "update video_game_information set titolo='$titolo', genere='$genere', piattaforma='$piattaforma', annoRilascio='$annoRilascio', numGiocatori='$numGiocatori', valutazione='$valutazione' where id=$id";
  
  if ($conn->query($sql) === TRUE) {
    header("location: index.php");
  }
}

$sql = "SELECT * FROM video_game_information WHERE id=$id";
$res = $conn->query($sql);

while ($row = $res->fetch_assoc()) {
?><!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifica <?= $row["titolo"] ?></title>

  <style>
    body {font-family: sans-serif;}
  </style>
</head>
<body>
  <h1>Modifica <?= $row["titolo"] ?></h1>

  <form action="" method="post">
    <label for="">Titolo</label><br>
    <input type="text" name="titolo" value="<?= $row["titolo"] ?>"><br>

    <label for="">Genere</label><br>
    <input type="text" name="genere" value="<?= $row["genere"] ?>"><br>

    <label for="">Piattaforma</label><br>
    <input type="text" name="piattaforma" value="<?= $row["piattaforma"] ?>"><br>

    <label for="">Anno di rilascio</label><br>
    <input type="number" name="annoRilascio" value="<?= $row["annoRilascio"] ?>"><br>

    <label for="">Numero di giocatori</label><br>
    <input type="number" name="numGiocatori" value="<?= $row["numGiocatori"] ?>"><br>

    <label for="">Valutazione</label><br>
    <input type="text" name="valutazione" value="<?= $row["valutazione"] ?>"><br>

    <input type="submit" value="Modifica">
  </form>
</body>
</html>
<?php } ?>