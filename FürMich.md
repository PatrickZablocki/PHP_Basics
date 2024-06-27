# PHP_Basics Projekt: Mein Weg zum PHP Lernen

## Grundlegende Schritte zum Lernen von PHP

### Entwicklungsumgebung einrichten:

1. **Webserver:**
   - Ich installiere XAMPP, MAMP oder WAMP, um einen lokalen Webserver (Apache) und eine Datenbank (MySQL) zu haben.

2. **IDE/Texteditor:**
   - Ich verwende einen Editor wie Visual Studio Code.

### Grundlagen verstehen:

1. Ich lerne die grundlegende Syntax von PHP.
2. Ich verstehe Variablen, Datentypen, Operatoren und Kontrollstrukturen (if-else, switch, loops).

### Erste Skripte schreiben:

1. Ich erstelle einfache PHP-Skripte, um grundlegende Operationen auszuführen.
2. Ich experimentiere mit Formulareingaben und der Verarbeitung von Benutzereingaben.

### Fortgeschrittene Konzepte:

1. Ich lerne Funktionen, Arrays, und Superglobale Arrays (wie `$_POST`, `$_GET`) kennen.
2. Ich arbeite mit Dateien und Verzeichnissen.
3. Ich setze mich mit Sessions und Cookies auseinander.

### Datenbankinteraktionen:

1. Ich verbinde PHP mit MySQL.
2. Ich führe CRUD-Operationen (Create, Read, Update, Delete) aus.
3. Ich verwende PDO oder MySQLi für sicherere Datenbankinteraktionen.

### Frameworks und CMS:

1. Ich mache mich mit populären PHP-Frameworks wie Laravel, Symfony oder CodeIgniter vertraut.
2. Ich probiere ein Content-Management-System (CMS) wie WordPress, Joomla oder Drupal aus.


### Fragen & Antworten
### 1. Was bedeuten `<?php` und `?>`?

**Antwort:**
PHP-Code beginnt und endet mit `<?php` und `?>`.

### 2. Was bedeutet : if ($_SERVER["REQUEST_METHOD"] == "POST") { in meinem Code?

**Antwort:** 
Überprüft, ob die Anfrage mit der HTTP-POST-Methode gesendet wurde.
$_SERVER ist ein Superglobales Array, das Server- und Ausführungsumgebungsinformationen enthält.
$_SERVER["REQUEST_METHOD"] gibt die Methode zurück, mit der die Seite angefordert wurde (z. B. "POST" oder "GET").

### 3. Was bedeutet in meinem Code? $name = htmlspecialchars($_POST['name']); $email = htmlspecialchars $message = htmlspecialchars($_POST['message']);($_POST['email']);

**Antwort:** 

$_POST ist ein Superglobales Array, das die Daten enthält, die per HTTP-POST-Methode gesendet wurden.
htmlspecialchars() konvertiert spezielle Zeichen in HTML-Entities, um XSS-Angriffe zu verhindern.
Beispiel: < wird zu &lt;, > wird zu &gt;, etc.

### 4. Was bedeutet in meinem Code: echo "Name: $name<br>"; echo "E-Mail: $email<br>"; echo "Nachricht: $message<br>";

**Antwort:**

echo gibt eine Zeichenkette aus.
<br> ist ein HTML-Zeilenumbruch, der dafür sorgt, dass die nächste Ausgabe in einer neuen Zeile erscheint.

### 5.Was bedeutet in meinem Code: } else { echo "Formular wurde nicht korrekt abgeschickt."; }

**Antwort:**

Wenn die Anfrage nicht per POST erfolgt ist, wird eine Fehlermeldung ausgegeben.

Es gibt noch mehr zu lernen, aber aller anfang ist schwer, egal was ist ich schaffe das wenn ich dranbleibe und auch Jeden Tag was mache ist egal ob es den Code lesen ist und die Dokumentation dazu oder selbst Coden.



