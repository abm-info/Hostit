<?php $title = "Users list"; ?>
<?php
if (isset($_SESSION['user'])) {
  require_once('navbarUser.php');
} else {
  require_once('navbar.php');
} ?>

<?php ob_start();

?>

<link rel="userStylesheet" href="style.css">
<div class="product_bt_1"><a href="index.php?action=addProduct">Add Admin</a></div>
<div class="users">
  <div class="col-md-12">
    <h1 class="product_taital">Users' List</h1>
    <p class="product_text">You DashBoard Made to make administration easy made by SIAT</p>
  </div>

  <table class="table_user">
    <thead>
      <tr class="tr_user" id="usersList">
        <th class="th_user">Nom</th>
        <th class="th_user">Prénom</th>
        <th class="th_user">Email</th>
        <th class="th_user">Téléphone</th>
        <th class="th_user">Supprimer</th>
      </tr>
    </thead>
    <tbody class="tbody_user">
      <?php foreach ($users as $user) : ?>
        <tr class="tr_user">
          <td class="td_user"><?= $user['NOM_CLIENT'] ?></td>
          <td class="td_user"><?= $user['PRENOM_CLIENT'] ?></td>
          <td class="td_user"><?= $user['MAIL_CLIENT'] ?></td>
          <td class="td_user"><?= $user['TEL_CLIENT'] ?></td>
          <!--Nous alons mettre l'id de chaque employé dans ce lien -->
          
          <td class="td_user"><a href="controller/deleteUserController.php?id=<?= $user['ID_CLIENT'] ?>" onclick="return confirm('Are you sure you want to delete this user?')"><img class="img_user" src="images/trash.png"></a></td>


        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>




<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>