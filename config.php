<?php
// Database configuration
$db_host = '34.154.7.57';
$db_name = 'image_catalog';
$db_user = 'asd-asd-asd';
$db_pass = 'asd-asd-asd';


try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>
