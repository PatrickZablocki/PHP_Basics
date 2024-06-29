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

    $echo = "userName: Patrick3103";
    $echo = "Age: 27";
// Lokale Variabeln die in der Funktion Geschrieben werden
    function ausgabe() {
        $userName= "Patrick3103";
        echo $name;
    }
// Variabeln die AUSERHALB der Fucntion geschrieben werden sind Globale Variabeln
    $second_Username= "Patrick_31";

    function ausgabe(){
        // Mit global siehe unten kann ich auch INNERHALB einer Funktion auf globale variabeln zugreifen
        global $name;
        echo $name;
    }
    // Sinnvoll ist es jedoch diese an Parameter weiterzugeben
    $triple_name= "Patrick_Z31";

    function ausgabe ($name) {
        echo $name;
    }
?>

