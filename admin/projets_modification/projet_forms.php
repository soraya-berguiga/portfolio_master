<?php
  require "../../config.php";
  include "../../fonctions_site.php";

  proteger_page();

?>

<?php

  if(!empty($_POST["montexte"])) {
    $file = fopen("inscription.txt", "w+");

    fwrite($file, $_POST["montexte"] . PHP_EOL);

    fclose($file);
  }

?>

<!doctype html>
<html lang="fr">
