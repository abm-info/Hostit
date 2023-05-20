<?php
require_once('model/product.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form was submitted
    if ( isset($_POST['id_categorie']) && isset($_POST['nom_produit']) && isset($_POST['description_produit']) && isset($_POST['prix_produit']) && isset($_POST['image_produit'])) {
        // All required fields are present
        $category_id = $_POST['id_categorie'];
        $name = $_POST['nom_produit'];
        $description = $_POST['description_produit'];
        $price = $_POST['prix_produit'];
        $image = $_POST['image_produit'];

        if (add_product( $category_id, $name, $description, $price,$image)) {
            // Product was added successfully
            header('Location: index.php');
            exit;
        } else {
            // Error adding product
            $error = 'Error adding product';
        }
    } else {
        // Required fields are missing
        $error = 'Please fill in all required fields';
    }
}

// Display the add product form
require_once('views/addProduct.php');