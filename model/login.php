<?php
// Database connection constants
define('DB_HOST', 'localhost');
define('DB_NAME', 'commerce');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Connect to the database
try {
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    die('Database connection failed: '.$e->getMessage());
}

// Function to retrieve user from database by email
function get_user_by_email($email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM client WHERE MAIL_CLIENT=:email LIMIT 1");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt->fetch();
}
