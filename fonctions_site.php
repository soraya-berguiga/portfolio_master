<?php




function changeDePage($url) {
        // permet de faire une redirection vers $url

        header("location:" . $url);
        exit;
    }

    function erreurFonction($texteMessageErreur) {
    // Ajouter un texte dans notre tableau des erreurs.
    $_SESSION["erreur"][] = $texteMessageErreur;
}


function show_success() {
    // affiche toutes les cases de mon tableau $_SESSION["success"]
    if(!empty($_SESSION["success"])) {
        echo "<div class='success'><ul>";
        foreach ($_SESSION["success"] as $success) {
            echo "<li>$success</li>";
        }
        echo "</ul></div>";
    }

    unset($_SESSION["success"]); // une fois les erreurs affichées, je supprime le tableau pour être sur de ne plus les afficher plus tard.
}


function show_error() {
    // affiche toutes les cases de mon tableau $_SESSION["erreur"]
    if(!empty($_SESSION["erreur"])) {
        echo "<div class='erreur'><ul>";
        foreach ($_SESSION["erreur"] as $erreur) {
            echo "<li>$erreur</li>";
        }
        echo "</ul></div>";
    }

    unset($_SESSION["erreur"]); // une fois les erreurs affichées, je supprime le tableau pour être sur de ne plus les afficher plus tard.
}





 ?>
