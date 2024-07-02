<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = htmlspecialchars($_POST['username']);
    $name = htmlspecialchars($_POST['name']);
    $passwort = htmlspecialchars($_POST['passwort']);

    echo "Name: $name";
    echo "Passwort: $passwort";
    echo "Username: $username";
} 
?>

<!-- Das war Meine Lösung so dachte ich kann es ich es machen -->
<!-- Das hier unten ist jedoch die Korrekte Lösung -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verbindung zur Datenbank herstellen (Beispiel)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Überprüfen, ob die Verbindung erfolgreich war
    if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
    }

    // Variablen aus dem POST-Array extrahieren
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL-Statement vorbereiten
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    // Überprüfen, ob ein Benutzer mit dem angegebenen Benutzernamen gefunden wurde
    if ($stmt->num_rows == 1) {
        // Ergebnisvariablen binden
        $stmt->bind_result($id, $db_username, $db_password);
        $stmt->fetch();

        // Passwort überprüfen
        if (password_verify($password, $db_password)) {
            // Passwort ist korrekt, Benutzer ist authentifiziert
            $_SESSION['username'] = $db_username;
            $_SESSION['user_id'] = $id;
            echo "Login erfolgreich! Willkommen, $db_username!";
            // Hier kannst du den Benutzer zur Hauptseite weiterleiten
        } else {
            echo "Falsches Passwort. <a href='login.html'>Zurück zum Login</a>";
        }
    } else {
        echo "Benutzer nicht gefunden. <a href='register.html'>Registrieren</a>";
    }

    // Statements schließen
    $stmt->close();

    // Verbindung schließen
    $conn->close();
}
?>