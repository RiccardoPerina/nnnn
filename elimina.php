<?php
include "conf.php";

$id = $_GET["id"];

$sql = "delete from video_game_information where id=$id";

if ($conn->query($sql) === TRUE) {
  header("location: index.php");
}
?>