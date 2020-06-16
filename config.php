<?php

$nom_portfolio = "Soraya Berguiga";

$url_base = "http://localhost/portfolio/";

?>

<!-- // PAGE CONFIGURATION URL + NOM DU SITE -->

<?php

session_start();

$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = '';
$nomBaseDeDonnees = "site_portfolio";


//On établit la connexion
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

 ?>
