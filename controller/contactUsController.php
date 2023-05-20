<?php
session_start();
require_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Get the form data
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   // Insert the comment into the database
   $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
   $query = "INSERT INTO commentaire (DATE_COMMENTAIRE, DESCRIPTION_COMMENTAIRE, EMAIL_COMMENTAIRE) VALUES (NOW(), :message, :email)";
   $stmt = $conn->prepare($query);
   $stmt->bindParam(':message', $message);
   $stmt->bindParam(':email', $email);
   $stmt->execute();

   // Show success message to the user
   echo "Comment added successfully.";

   // Redirect back to the homepage
   header('Location: ../index.php');
   exit();
}
?>
