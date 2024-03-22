<?php
if (isset($_POST["username"]) && isset($_POST["messaggio"])) {
    $username = $_POST["username"];
    $messaggio = $_POST["messaggio"];
    // Codifica il messaggio in base64
    $messaggio_base64 = base64_encode($messaggio);
    // Apri il file in modalità append
    $file = fopen("messaggi.txt", "a");
    // Scrivi l'username e il messaggio codificato nel file
    fwrite($file, $username . ": " . $messaggio_base64 . "\n");
    // Chiudi il file
    fclose($file);
    // Mostra il messaggio di conferma
    echo "Inviato con successo! Grazie per il messaggio!!";
}
?>
