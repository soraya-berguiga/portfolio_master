
<?php
include "../config.php";
include "../fonctions_site.php";
?>
<?php
include "../include/head.php";

 ?>

  <link rel="stylesheet" href="../assets/styles.css">
  <link rel="stylesheet" href="css/my_style.css">

<?php
proteger_page();
?>

<body class="body-accueil-modif">


  <h1 class="title-accueil-modif">Vous pouvez modifier le contenu de votre site internet ici</h1>

<div class="">

    <div class="menu_accueil">
        <a href="<?php echo PORTFOLIO_URL_SITE  ?>" target="_blank">Voir le site</a>
        <a href="<?php echo PORTFOLIO_URL_SITE ?>admin/accueil/forms-accueil.php">Modifier ma page d'accueil</a>
        <a href="<?php echo PORTFOLIO_URL_SITE  ?>admin/deconnexion.php">Se déconnecter</a>
    </div>

</div>

<?php include "../include/footer.php"; ?>


  </body>
<html>
