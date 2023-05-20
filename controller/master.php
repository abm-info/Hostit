<?php 

    function logIn(){
        require_once ('views/login.php');
    }
    function signUp(){
        require_once ('views/signup.php');
    }
    function profile(){
        require_once ('views/profile.php');
    }
    function logOut(){
    }

    function map(){
        require_once ('controller/map.php');
    }

    function product(){
        require_once('controller/product.php');
    }

    function userProduct(){
        require_once('controller/userProduct.php');
    }

    function addProduct(){
        require_once('controller/addProduct.php');

    }



    function users(){
        require_once('controller/userController.php');

    }

    function deleteUser(){
        require_once('model/userController.php');
        delete($id);
        header("location:index.php?action=users");

    }
