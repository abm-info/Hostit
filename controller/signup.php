<?php
// Include the database connection and user modal
require_once('../model/signup.php');

// Check if the form has been submitted
if (isset($_POST['register'])) {
    // Get the form data
    $firstName = $_POST['signUpFirstName'];
    $lastName = $_POST['signUpLastName'];
    $email = $_POST['signUpemail'];
    $password = $_POST['signUpPassword'];
    $password2 = $_POST['signUpPassword2'];
    $gsm = $_POST['signUpGsm'];

    // Validate the form data
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($password2) || empty($gsm)) {
        die('Please fill in all fields.');
    } elseif ($password !== $password2) {
        die('Passwords do not match.');
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email address.');
    }

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Add the user to the database
    if (add_user($firstName, $lastName, $email, $password, $gsm)) {
        echo 'User added successfully.';
        header('location:../signupSuccess.php');
    } else {
        echo 'Error adding user.';
    }
}
