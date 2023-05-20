<?php 
require_once("master.php");
if (isset($_SESSION['user'])) {
    profile();
} else {
    logIn();
}