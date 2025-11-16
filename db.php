<?php
// SQLite database connection
$dbFile = __DIR__ . '/database.sqlite';

try {
    $conn = new PDO("sqlite:$dbFile");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>