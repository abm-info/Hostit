<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'commerce');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

function getAllUsers() 
{
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    $sql = "SELECT * FROM client";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function addUser($nom, $prenom, $mail, $mdp, $tel) 
{
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    $sql = "INSERT INTO client (NOM_CLIENT, PRENOM_CLIENT, MAIL_CLIENT, MDP_CLIENT, TEL_CLIENT) 
            VALUES (:nom, :prenom, :mail, :mdp, :tel)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'mail' => $mail, 'mdp' => $mdp, 'tel' => $tel]);
}

function delete($id) 
{
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD); 
    $sql = "DELETE FROM client WHERE ID_CLIENT = :id";
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(['id' => $id]);
}


/* function updateUserProfile($id, $updatedName, $updatedEmail, $updatedPhone)
{
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    $sql = "UPDATE client SET NOM_CLIENT = :name, MAIL_CLIENT = :email, TEL_CLIENT = :phone WHERE ID_CLIENT = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $updatedName);
    $stmt->bindParam(':email', $updatedEmail);
    $stmt->bindParam(':phone', $updatedPhone);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
 */