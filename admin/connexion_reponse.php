<?php
 include "../config.php";
include "../include/head.php";
include "../fonctions_site.php";
 ?>


<link rel="stylesheet" href="css/my_style.css">
  <?php

  if (
      isset($_POST['identifiant']) &&
      isset($_POST['password']) &&
      $_POST['identifiant'] == 'admin' &&
      $_POST['password'] == 'admin'
    ){
    ajouterErreur("Merci de vous connecter");
} else {

    // on va voir si l'utilisateur est en base de données
    $queryUtilisateur = "SELECT * FROM user where identifiant='$_POST[identifiant]' AND password = '$_POST[password]'";

    // $resultatUtilisateur = $bdd -> query($queryUtilisateur) -> fetchAll(PDO::FETCH_ASSOC);

    // au lieu de le mettre sur plusieurs ligne, on peut l'écrire sur une seule ligne.
    // J'utilise PDO::FETCH_ASSOC pour que le résultat soit retourné dans un tableau avec uniquement les noms des attributs comme clé.
    // sans, on aurait le résultat dédoublé : une fois avec le nom de l'attribut et une fois avec un numéro.


    if(!empty($resultatUtilisateur)) { // Si notre requête retourne des résultats (donc que mon tableau n'est pas vide), c'est qu'il y a un utilisateur avec cet identifiant et ce mot de passe.
        $_SESSION["connected_user"] = $resultatUtilisateur[0];
        changeDePage("accueil.php"); // fonction que j'ai préalablement écrite.
        exit;
    } else {
        // si je passe ici, c'est que je n'ai pas trouvé d'utilisateur.
        // je ne peux pas me connecter.
        ajouterErreur("L'utilisateur n'a pas été trouvé.");
        changeDePage("connexion.php"); // fonction que j'ai préalablement écrite.
        exit;
    }




}




?>
