<?php
// Configurazione del database
$servername = "localhost"; // Indirizzo del server MySQL
$username = "root"; // Nome utente MySQL
$password = ""; // Password MySQL
$dbname = "clienti"; // Nome del database MySQL

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Recupero dei dati dal modulo
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$data_di_nascita = $_POST['data_di_nascita'];
$luogo_di_nascita = $_POST['luogo_di_nascita'];
$cap_residenza = $_POST['cap_residenza'];
$citta_residenza = $_POST['citta_residenza'];
$indirizzo_residenza = $_POST['indirizzo_residenza'];
$indirizzo_numero = $_POST['indirizzo_numero'];
$cellulare = $_POST['cellulare'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$professione = $_POST['professione'];
$codice_fiscale = $_POST['codice_fiscale'];

// Preparazione dell'inserimento dei dati nella query SQL
$sql = "INSERT INTO informazioni_clienti (nome, cognome, data_di_nascita, luogo_di_nascita, cap_residenza, citta_residenza, indirizzo_residenza, indirizzo_numero, cellulare, telefono, mail, professione, codice_fiscale) VALUES ('$nome', '$cognome', '$data_di_nascita', '$luogo_di_nascita', '$cap_residenza', '$citta_residenza', '$indirizzo_residenza', '$indirizzo_numero', '$cellulare', '$telefono', '$mail', '$professione', '$codice_fiscale')";

// Esecuzione della query e verifica
if ($conn->query($sql) === TRUE) {
    echo "Dati inseriti correttamente.";
} else {
    echo "Errore durante l'inserimento dei dati: " . $conn->error;
}

// Chiusura della connessione
$conn->close();
?>
