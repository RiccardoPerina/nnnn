<?php include "conf.php" ?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>

  <style>
    body {font-family: sans-serif;}

    table, th, td {
      border: 1px solid black;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Visualizza tutti i dati</h1>
  <a href="aggiungi.html">Aggiungi un videogioco</a>

  <table>
    <tr> <!-- table row = tr -->
      <th>Titolo</th> <!-- table head = th -->
      <th>Genere</th>
      <th>piattaforma</th>
      <th>anno di rilascio</th>
      <th>numero di giocatori</th>
      <th>valutazione</th>
      <th colspan="2">Azioni</th>
    </tr>
    <?php
    $sql = "select * from video_game_information";
    $res = $conn->query($sql);

    while ($row = $res->fetch_assoc()) {
    ?>
    <tr>
      <td><?= $row["titolo"] ?></td>
      <td><?= $row["genere"] ?></td>
      <td><?= $row["piattaforma"] ?></td>
      <td><?= $row["annoRilascio"] ?></td>
      <td><?= $row["numGiocatori"] ?></td>
      <td><?= $row["valutazione"] ?></td>
      <td><a href="modifica.php?id=<?= $row["id"] ?>">Modifica</a></td>
      <td><a href="elimina.php?id=<?= $row["id"] ?>">Elimina</a></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>