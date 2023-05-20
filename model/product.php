<?php
// Database connection constants
define('DB_HOST', 'localhost');
define('DB_NAME', 'commerce');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

function fetch_products() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=commerce', 'root', '');       
        $prod = $pdo->query('SELECT code_produit,id_categorie,nom_produit,description_produit,prix_produit,image_produit FROM produit');
        
        return $prod;
    } catch (PDOException $e) {
        die('Database connection failed: '.$e->getMessage());
    }
}

function add_product( $category_id, $name, $description, $price,$image){
        try {
            $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $stmt = $pdo->prepare('INSERT INTO produit (id_categorie, nom_produit, description_produit, prix_produit, image_produit) VALUES (:category_id, :name, :description, :price, :image)');
            $stmt->execute(array(
                ':category_id' => $category_id,
                ':name' => $name,
                ':description' => $description,
                ':price' => $price,
                ':image' => $image
            ));
    
            return true;
        } catch (PDOException $e) {
            die('Database connection failed: '.$e->getMessage());
        }
    }

