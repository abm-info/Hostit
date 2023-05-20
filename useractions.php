<?php
session_start();
require_once('controller/userController.php');
// Création d'un routeur.
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {

        case 'add':
            add();
            break;

        case 'delete':
            delete();
            break;

        case 'update':
            update();
            break;
    }
} else
    require_once('controller/acceuil.php');
