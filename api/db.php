<?php
$dbFile = sys_get_temp_dir() . '/database.sqlite';

try {
    $conn = new PDO("sqlite:$dbFile");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>