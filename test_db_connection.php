<?php
// Simple script to test database connection
include 'includes/db.php';

if (isset($conn) && $conn) {
    echo "Database connected successfully!\n";
    $stmt = $conn->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo "Tables in database: ".implode(", ", $tables)."\n";
} else {
    echo "Database connection failed!\n";
}
?>
