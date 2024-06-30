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

// Lokale Variablen, die in der Funktion geschrieben werden
function ausgabeLokaleVariable() {
    $userName = "Patrick3103";
    echo $userName;
}

// Globale Variablen
$second_Username = "Patrick_31";

function ausgabeGlobaleVariable() {
    // Mit global kann man innerhalb einer Funktion auf globale Variablen zugreifen
    global $second_Username;
    echo $second_Username;
}

// Sinnvoller ist es jedoch, diese als Parameter zu übergeben
$triple_name = "Patrick_Z31";

function ausgabeMitParameter($name) {
    echo $name;
}

// If-else-Abfrage
$alter = 27;

if ($alter == 20) {
    echo "Die Person ist 20 Jahre alt.";
} else {
    echo "Die Person ist nicht 20 Jahre alt";
}
?>