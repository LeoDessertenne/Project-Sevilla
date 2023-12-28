<?php
session_start();

if (!isset($_SESSION['connecte'])) {
    header("location: ../../../index.php");
    exit;
}

if (!isset($_POST['reponse'])) {
    header('location: ../../../index.php');
    exit;
}

include("../../../connexion.inc.php");
$table = $_SESSION['table'];

if (isset($_POST['supprimer_avantage'])) {
    $avantage = $_POST['avantages'];

    $query = $cnx->prepare("DELETE from seville.$table where texte='" . pg_escape_string($avantage) . "' AND type = 'avantages'");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers.php");
        exit;
    }
}

if (isset($_POST['supprimer_inconvénient'])) {
    $inconvenient = $_POST['desavantages'];

    $query = $cnx->prepare("DELETE from seville.$table where texte='" . pg_escape_string($inconvenient) . "' AND type = 'inconvénients'");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers.php");
        exit;
    }
}

if (isset($_POST['ajouter_avantage'])) {
    $avantage = $_POST['avantage'];
    $langue = $_POST['langue'];

    $query = $cnx->prepare("INSERT INTO seville.$table (type, texte, language) values ('avantages', '" . pg_escape_string($avantage) . "', '$langue')");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers.php");
        exit;
    }
}

if (isset($_POST['ajouter_inconvénient'])) {
    $avantage = $_POST['desavantage'];
    $langue = $_POST['langue'];

    $query = $cnx->prepare("INSERT INTO seville.$table (type, texte, language) values ('inconvénients', '" . pg_escape_string($avantage) . "', '$langue')");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers.php");
        exit;
    }

}

if (isset($_POST['modifier_description'])) {
    $description_en = $_POST['description_1'];
    $description_es = $_POST['description_2'];
    $description_fr = $_POST['description_3'];

    $query = $cnx->prepare("UPDATE seville.$table SET texte = '" . pg_escape_string($description_en) . "' WHERE language = 'en' AND type = 'texte'");

    if ($query->execute()) {

        $query = $cnx->prepare("UPDATE seville.$table SET texte = '" . pg_escape_string($description_es) . "' WHERE language = 'es' AND type = 'texte'");

        if ($query->execute()) {

            $query = $cnx->prepare("UPDATE seville.$table SET texte = '" . pg_escape_string($description_fr) . "' WHERE language = 'fr' AND type = 'texte'");

            if ($query->execute()) {
                $_SESSION['message'] = 'Requête bien executé !';
                header("location: gerer_Quartiers_Page.php");
                exit;
            } else {
                $_SESSION['message'] = "Votre requête n'a pas exécuté (français) !";
                header("location: gerer_Quartiers_Page.php");
                exit;
            }

        } else {
            $_SESSION['message'] = "Votre requête n'a pas exécuté (espagnol) !" ;
            header("location: gerer_Quartiers_Page.php");
            exit;
        }
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté (anglais) !";
        header("location: gerer_Quartiers_Page.php");
        exit;
    }

}

if (isset($_POST['supprimer_monument'])) {
    $monument = $_POST['monuments'];

    $query = $cnx->prepare("DELETE FROM seville.$table WHERE type = 'monuments' AND texte = '" . pg_escape_string($monument) . "'");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers_Page.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers_Page.php");
        exit;
    }
}

if (isset($_POST['ajouter_monument'])) {
    $monument = $_POST['monument'];

    $query = $cnx->prepare("INSERT INTO seville.$table (type, texte) values ('monuments', '" . pg_escape_string($monument) . "')");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers_Page.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers_Page.php");
        exit;
    }
}

if (isset($_POST['supprimer_bar-restau'])) {
    $nom = $_POST['bar-restaus'];

    $query = $cnx->prepare("DELETE FROM seville.$table WHERE type='bars_restaurants' AND texte= '". pg_escape_string($nom) . "'");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers_Page.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers_Page.php");
        exit;
    }
}

if (isset($_POST['ajouter_bar-restau'])) {
    $nom = $_POST['bar-restau'];

    $query = $cnx->prepare("INSERT INTO seville.$table (type, texte) values ('bars_restaurants', '". pg_escape_string($nom) . "')");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers_Page.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers_Page.php");
        exit;
    }
}

if (isset($_POST['supprimer_alimentation'])) {
    $alimentation = $_POST['alimentations'];

    $query = $cnx->prepare("DELETE FROM seville.$table WHERE type='alimentation' AND texte='" . pg_escape_string($alimentation) . "'");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers_Page.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers_Page.php");
        exit;
    }
}

if (isset($_POST['ajouter_alimentation'])) {
    $alimentation = $_POST['alimentation'];

    $query = $cnx->prepare("INSERT INTO seville.$table (type, texte) values ('alimentation', '" . pg_escape_string($alimentation) . "')");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers_Page.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers_Page.php");
        exit;
    }
}

if (isset($_POST['modifier_image'])) {
    $chemin_image = $_POST['image'];

    $query = $cnx->prepare("UPDATE seville.$table SET texte='" . pg_escape_string($chemin_image) . "'WHERE type='image'");

    if ($query->execute()) {
        $_SESSION['message'] = 'Requête bien executé !';
        header("location: gerer_Quartiers_Page.php");
        exit;
    } else {
        $_SESSION['message'] = "Votre requête n'a pas exécuté !";
        header("location: gerer_Quartiers_Page.php");
        exit;
    }
}

?>


