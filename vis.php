<?php 
// Connessione al database 
include 'conf.php'; 
// Prendiamo l'id del record da visualizzare 
$id = $_GET['id']; 
// Query per selezionare il record 
$query = "SELECT * FROM table_name WHERE id = '$id'"; 
$result = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($result); 
// Stampiamo i campi del record echo 
"<h2>Record ID: " . $row['id'] . "</h2>"; 
echo "<p>Column 1: " . $row['column1'] . "</p>"; 
echo "<p>Column 2: " . $row['column2'] . "</p>"; 
mysqli_free_result($result); mysqli_close($conn); ?>