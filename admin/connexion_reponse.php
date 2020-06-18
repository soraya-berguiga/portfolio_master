<?php
 include "../config.php";
include "../include/head.php"; ?>


<link rel="stylesheet" href="css/my_style.css">
  <?php

  if (
      isset($_POST['identifiant_admin']) &&
      isset($_POST['password_admin']) &&
      $_POST['identifiant_admin'] == 'admin' &&
      $_POST['password_admin'] == 'admin'
    ){
?>
  <h1 class="title-reponse">Administration portfolio</h1>


  <?php
}
else // Sinon, on affiche un message d'erreur
{
  echo '<p class="error-connexion"> ❌ Mot de passe incorrect</p>';
}
?>
