<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'commerce');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Use PDO to connect to the database
$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    
// Retrieve the form data
$userId = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];

// Prepare the SQL statement to update the user profile
$sql = "UPDATE client SET NOM_CLIENT = :nom, PRENOM_CLIENT = :prenom, MAIL_CLIENT = :mail, TEL_CLIENT = :tel WHERE ID_CLIENT = :id";
$stmt = $pdo ;
