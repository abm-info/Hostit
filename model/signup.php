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

// Function to add a new user to the database
function add_user($firstName, $lastName, $email, $password, $gsm) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO client (NOM_CLIENT, PRENOM_CLIENT, MAIL_CLIENT, MDP_CLIENT, TEL_CLIENT) VALUES (:first_name, :last_name, :email, :password, :gsm)");
    $stmt->bindParam(':first_name', $firstName);
    $stmt->bindParam(':last_name', $lastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':gsm', $gsm);
    return $stmt->execute();
}
