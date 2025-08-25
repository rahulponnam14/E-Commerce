<?php
// Run this script once to insert multiple sample products into the products table
include 'includes/db.php';

$sample_products = [
    ['Product 1', 19.99, 'Description for product 1.', 'product1.jpg'],
    ['Product 2', 29.99, 'Description for product 2.', 'product2.jpg'],
    ['Product 3', 39.99, 'Description for product 3.', 'product3.jpg'],
    ['Product 4', 49.99, 'Description for product 4.', 'product4.jpg'],
    ['Product 5', 59.99, 'Description for product 5.', 'product5.jpg'],
];

try {
    $stmt = $conn->prepare("INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)");
    foreach ($sample_products as $prod) {
        $stmt->execute($prod);
    }
    echo "Sample products inserted successfully!\n";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
