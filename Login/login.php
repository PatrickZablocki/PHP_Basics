<?php
// session_start();: Diese Funktion startet eine neue Session oder setzt eine vorhandene Session fort. Sessions ermöglichen es, Daten über verschiedene Seitenaufrufe hinweg zu speichern.
session_start();
// Diese Bedingung prüft, ob das Formular per POST-Methode gesendet wurde. Das ist richtig, da das Formular mit method="post" gesendet wird.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $email = "email";
    $password2 = "password";
}
?>
<!-- //  Das habe ich bis jetzt verstanden das ist der Grundpfeiler
// Im Register Code ist jedoch SQL noch mit dabei für die Datenbank
// Dadurch darf ich mich nicht verwirren lassen -->


<!-- // ABER ich kann es auch so machen -->

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vordefinierte Anmeldeinformationen
    $expectedEmail = "email@example.com";
    $expectedPassword = "password123";

    // Benutzereingaben
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Überprüfung der Anmeldeinformationen
    if ($email === $expectedEmail && $password === $expectedPassword) {
        // Anmeldedaten korrekt
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: welcome.php");
        exit;
    } else {
        // Anmeldedaten falsch
        $error = "Ungültige E-Mail oder Passwort.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>LoginPage</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email">
        <label for="password">Passwort</label>
        <input type="password" id="password" name="password">
        <button type="submit">LogIn</button>
    </form>
</body>
</html>