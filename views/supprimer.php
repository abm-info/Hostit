<?php
// Get the user ID from the URL
$id = $_GET['id'];

try {
  // Connect to the database
  $db = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");

  // Prepare the delete statement
  $stmt = $db->prepare("DELETE FROM users WHERE id = :id");

  // Bind the parameters
  $stmt->bindParam(":id", $id);

  // Execute the statement
  $stmt->execute();

  // Redirect the user to the users list view
  header("Location: usersList.php");
  exit();
} catch (PDOException $e) {
  // Return an error message
  echo "Error deleting user: " . $e->getMessage();
}
?>