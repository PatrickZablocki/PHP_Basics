<?php
// Überprüft, ob das Formular mit der POST-Methode abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Holt die übermittelten Daten aus dem POST-Array und schützt sie mit htmlspecialchars vor XSS-Angriffen
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Gibt die übermittelten Daten in HTML-Format aus
    echo "Name: $name<br>";
    echo "E-Mail: $email<br>";
    echo "Nachricht: $message<br>";
} else {
    // Wenn das Formular nicht korrekt abgeschickt wurde, gibt eine Fehlermeldung aus
    echo "Formular wurde nicht korrekt abgeschickt.";
}