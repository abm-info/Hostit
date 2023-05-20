<?php
// Include the database connection and user modal
require_once('../model/login.php');


// Check if the form has been submitted
if (isset($_POST['connexion'])) {
    // Get the form data
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Retrieve user from database by email
    $user = get_user_by_email($login);

    // Validate the form data
    if (!$user) {
        die('User not found.');
    } elseif (!password_verify($password, $user['MDP_CLIENT'])) {
        die('Incorrect password.');
    } else {
        session_start();
        $_SESSION['user'] = $user;
        header("location:/index.php?action=profile");
    }
}
