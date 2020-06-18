<!-- FICHIER URL DE BASE DANS CONFIG -->
<?php
include "../config.php";
include "../include/head.php";
include "../fonctions_site.php";
?>
<!-- HEAD CONTIENT TOUS LES LIENS FONT,BOOSTRAP ect -->

<?php
    show_error(); // fonction que j'ai préalablement écrite
    show_success(); // fonction que j'ai préalablement écrite
?>



<?php
// if(isset($_POST['connexion']))
// {
//   if(!empty($_POST['identifiant']) AND !empty($_POST['password']))
//   {
//     $identifiant = htmlspecialchars($_POST['identifiant']);
//     $password = sha1($_POST['password']);
//
//       $insertmbr = ("INSERT INTO membres(identifiant, password) VALUES(?, ?)");
//       $insertmbr->execute($identifiant, $password);
//   }
//   else
//   {
//     $erreur = "Tous les champs doivent être complétés";
//   }
// }
?>


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
      <p>accès au dossier administration </p>
    </div>
  </div>
</div>





<!-- ----FORMULAIRE DE CONNEXION---  -->


<form method="post" class="column-forms center bold" action="connexion_reponse.php">
  <label for="">Identifiant</label>
  <input type="text" name="identifiant">

  <label for="">Mot de passe</label>
  <input type="password" name="password">

  <div class="">
    <button type="submit" name="connexion"class="btn-connexion">Connexion</button>
  </div>


</form>

<?php
// if(isset($erreur))
// {
//   echo '<font color="red">'.$erreur."</font>" ;
// }


 ?>






  </body>
</html>
