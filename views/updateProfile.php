<?php
if (!isset($_GET['id'])) {
  // Handle the case when the ID is not provided
  // For example, redirect the user to an error page
  exit("User ID not provided");
}

$userId = $_GET['id'];

// Use PDO to connect to the database
$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

// Prepare the SQL statement to fetch user data
$sql = "SELECT * FROM client WHERE ID_CLIENT = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $userId]);

$user = $stmt->fetch();

// Check if the user exists
if (!$user) {
  // Handle the case when the user does not exist
  // For example, redirect the user to an error page
  exit("User not found");
}

// Render the profile update form using the fetched user data
// You can use the $user variable to populate the form fields
?>

<!-- HTML code for the profile update form -->
<!-- Display the fetched user data in the form fields -->

<form action="controller/updateUserController.php" method="POST">
  <!-- Form fields for updating the user profile -->
  <!-- Populate the fields with the fetched user data -->
  <input type="text" name="nom" value="<?= $user['NOM_CLIENT'] ?>">
  <input type="text" name="prenom" value="<?= $user['PRENOM_CLIENT'] ?>">
  <input type="email" name="mail" value="<?= $user['MAIL_CLIENT'] ?>">
  <input type="tel" name="tel" value="<?= $user['TEL_CLIENT'] ?>">

  <input type="hidden" name="id" value="<?= $user['ID_CLIENT'] ?>">
  <input type="submit" value="Update Profile">
</form>
