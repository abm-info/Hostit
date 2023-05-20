<?php
session_start();
require_once('controller/master.php');
// Création d'un routeur.
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {

        case 'list':
            require_once('views/userLayout.php');
            break;

        case 'signup':
            SignUp();
            break;
        case 'login':
            logIn();
            break;
        case 'logout':
            session_destroy();
            logIn();
            break;


        case 'product':
            if (isset($_SESSION['user'])) {
                userProduct();
            } else {
                product();
            }
            break;

        case 'profile':
            profile();
            break;

        case 'addProduct':
            if (isset($_SESSION['user'])) {
                addProduct();
            } else {
                logIn();
            }
            break;


        case 'users':
            if (isset($_SESSION['user'])) {
                users();
            } else {
                header('location:controller.php');
            }
            break;

        case 'map':
            map();
            break;

        case 'deleteUser':
            if (isset($_SESSION['user'])) {
                deleteUser();
            } else {
                header('location:index.php');
            }
            break;
    }
} else
    require_once('controller/acceuil.php');
