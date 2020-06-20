

<!-- -----------------PAGE FONCTION------------------------ -->

<?php

// fonction qui permet de changer de page
function changeDePage($url) {

        header("location:" . $url);
        exit;
    }

    function erreurFonction($texteMessageErreur) {
    $_SESSION["erreur"][] = $texteMessageErreur;
}


function note_reussite() {
    if(!empty($_SESSION["success"])) {
        echo "<div class='success'><ul>";
        foreach ($_SESSION["success"] as $success) {
            echo "<li>$success</li>";
        }
        echo "</ul></div>";
    }

    unset($_SESSION["success"]);
}


function note_erreur() {
    if(!empty($_SESSION["erreur"])) {
        echo "<div class='erreur'><ul>";
        foreach ($_SESSION["erreur"] as $erreur) {
            echo "<li>$erreur</li>";
        }
        echo "</ul></div>";
    }

    unset($_SESSION["erreur"]);
}



function proteger_page() {

        if(empty($_SESSION["connected_membres"])) {
            changeDePage( PORTFOLIO_URL_SITE . "admin/connexion.php");
        }
}



function ajouterErreur($texteMessageErreur) {
    // Ajouter un texte dans notre tableau des erreurs.
    $_SESSION["erreur"][] = $texteMessageErreur;
}


 ?>
