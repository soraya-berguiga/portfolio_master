<?php
 include "../config.php";
include "../include/head.php";
include "../fonctions_site.php";
 ?>


<link rel="stylesheet" href="css/my_style.css">


<?php
    note_erreur();
    note_reussite();  ;
?>


<?php


if(empty($_POST["username"]) || empty($_POST["password"])) {
    ajouterErreur("Merci de vous connecter");
} else {

    $queryUtilisateur = "SELECT * FROM membres where identifiant='$_POST[username]' AND password = '$_POST[password]'";

    $resultatUtilisateur = $bdd -> query($queryUtilisateur) -> fetchAll(PDO::FETCH_ASSOC);



    if(!empty($resultatUtilisateur)) {
        $_SESSION["connected_membres"] = $resultatUtilisateur[0];
        changeDePage("accueil.php");
        exit;
    } else {
        erreurFonction("L'utilisateur n'est pas enregistré");
        changeDePage("connexion.php");
        exit;
    }

}










 ?>
