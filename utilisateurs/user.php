<?php
  include "../config.php";
  include "../fonctions_site.php";
  include "../include/head.php";
 ?>
<link rel="stylesheet" href="../admin/css/my_style.css">
<?php
proteger_page();

 ?>

    <h2 class="title-user">Liste des utilisateurs</h2>


    <div class="block-users">
      <?php
      $requeteUsers = $bdd->query("SELECT * FROM membres");
      $resultUsers = $requeteUsers->fetchAll();
      echo "<div class=\"users_list\">";
      echo "<table><tr>";
      echo "<th>nom</th>";
      echo "<th>identifiant</th>";
      echo "</tr>";
      foreach ($resultUsers as $key => $user_a_afficher)  {
        echo "<tr>";
        echo "<td>" . $user_a_afficher["identifiant"] . "</td>";
        echo "<td>" . $user_a_afficher["password"] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
      echo "</div>";
      ?>
    </div>
