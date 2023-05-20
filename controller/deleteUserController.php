<?php
if (isset($_GET['id'])) {
    require_once('../model/userModel.php');
    delete($_GET['id']);
    // Redirect to the users list page after deleting the user
    header('Location: ../index.php?action=users');
    exit();
}
