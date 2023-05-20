<?php $title = "Add Product"; ?>

<?php
if (isset($_SESSION['user'])) {
  require_once('navbarUser.php');
} else {
  require_once('navbar.php');
}
?>

<?php ob_start(); ?>

<!-- header section start -->
<div class="contact_section layout_padding">
  <div class="container-fluid">
    <h1 class="contact_taital">Add Product</h1>
    <form method="post" enctype="multipart/form-data">
      
      <select name="id_categorie" class="mail_text">
        <option value="1">Category 1</option>
        <option value="2">Category 2</option>
      </select>
      <input type="text" class="mail_text" name="nom_produit" placeholder="Product Name" required />
      <input type="text" class="mail_text" name="description_produit" placeholder="Description" required />
      <input type="number" class="mail_text" name="prix_produit" placeholder="Price" min="0" required />
      <input type="file" class="mail_text" name="image_produit" required />
      <button type="submit" class="send_bt" name="submit">Add</button>
    </form>
  </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form was submitted
    if (isset($_POST['id_categorie']) && isset($_POST['nom_produit']) && isset($_POST['description_produit']) && isset($_POST['prix_produit']) && isset($_FILES['image_produit'])) {
        // All required fields are present
        $category_id = $_POST['id_categorie'];
        $name = $_POST['nom_produit'];
        $description = $_POST['description_produit'];
        $price = $_POST['prix_produit'];
        $image = $_FILES['image_produit'];

        // Check that the image file was uploaded successfully
        if ($image['error'] === UPLOAD_ERR_OK) {
            // Call the add_product() function to add the new product to the database
            if (add_product($category_id, $name, $description, $price, $image['tmp_name'])) {
                // Product was added successfully
                echo '<div class="container"><div class="alert alert-primary alert-sm" role="alert">Votre produit a été ajouté avec succès!</div></div>';
            } else {
                // Error adding product
                echo '<div class="container"><div class="alert alert-danger alert-sm" role="alert">Une erreur est survenue lors de l\'ajout du produit.</div></div>';
            }
        } else {
            // Error with uploaded image file
            echo '<div class="container"><div class="alert alert-danger alert-sm" role="alert">Une erreur est survenue lors du téléchargement de l\'image.</div></div>';
        }
    } else {
        // Required fields are missing
        echo '<div class="container"><div class="alert alert-danger alert-sm" role="alert">Veuillez remplir tous les champs obligatoires.</div></div>';
    }
}
?>

<?php $content = ob_get_clean(); ?>

<?php require_once('layout.php'); ?>