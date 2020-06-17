<!-- FICHIER URL DE BASE DANS CONFIG -->
<?php
include "../config.php";
include "../include/head.php";?>
<!-- HEAD CONTIENT TOUS LES LIENS FONT,BOOSTRAP ect -->

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/my_style.css">

  </head>
  <body>

<!-- --TITLE CONNEXION-- -->

<div class="container">
  <div class="row">
    <div class="col-10 title-connexion">
      <h1>Connexion</h1>
      <p>accès au dossier administration</p>
    </div>
  </div>
</div>





<!-- ----FORMULAIRE DE CONNEXION---  -->


<form method="post" class="column-forms center bold" action="connexion_reponse.php">
  <label for="">Identifiant</label>
  <input type="text" name="identifiant" required>

  <label for="">Mot de passe</label>
  <input type="password" name="password" required>

  <div class="">
    <button type="submit" name="button"class="btn-connexion">Connexion</button>
  </div>


</form>









  </body>
</html>
