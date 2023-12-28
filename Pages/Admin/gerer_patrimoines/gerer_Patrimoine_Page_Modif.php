<?php
if (!isset($_POST['titre']) && !isset($_POST['texte']) && !isset($_POST['image'])) {
    header('location: gerer_Patrimoine_Page.php');
    exit;
} else {
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $chemin_image = $_POST['chemin_image'];
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Parcours/Style/style_parcours.css">
    <link rel="stylesheet" href="./style_gerer_patrimoine.css">
    <?php include "../../../linkStyle.php"; ?>
    <title>Gérer les Patrimoines</title>
    <style>
    </style>
</head>

<body>
    <a href="gerer_Patrimoine_Page.php" class="retour">Retour</a>
    <p id="logo">Modifier un Patrimoine<span id="highlight">.</span></p>
    

    <?php
    include("../../../connexion.inc.php");

    $query = $cnx->prepare("SELECT * FROM seville.patrimoine WHERE titre = '$titre'");
    if ($query->execute()) {
        while ($ligne = $query->fetch(PDO::FETCH_OBJ)) {
            echo "
    <form method='post'>
        <div>
            <label for='titre' maxlenght='255'></label>
            <input type='text' id='titre' name='titre' value=\"" . $ligne->titre . "\"><br>
        </div>
        <div>
            <label for='chemin_image' maxlenght='255'></label>
            <input type='text' id='chemin_image' name='chemin_image' value=\"" . $ligne->chemin_image . "\"><br>
        </div>
        <div>
            <label for='texte'></label>
            <textarea type='text' id='texte' name='texte'>" . $ligne->texte . "</textarea><br>
        </div>

        <input type='hidden' name='id' value='$ligne->id;'>

        <input type='submit' value='Modifier' name='submit'>

        
    </form>";
        }
    }
    ?>

    <?php

    if (isset($_POST["submit"])) {
        $titre = $_POST['titre'];
        $image = $_POST['chemin_image'];
        $texte = $_POST['texte'];
        $id = $_POST['id'];
        try {
            $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $cnx->beginTransaction();
            $cnx->exec('SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;');

            $query = "UPDATE seville.patrimoine SET titre = '" . pg_escape_string($titre) . "', chemin_image = '" . pg_escape_string($image) . "', texte = '" . pg_escape_string($texte) . "' WHERE id = $id";
            $cnx->exec($query);
            $cnx->commit();
            header("location: gerer_Patrimoine_Page.php");
            exit;
        } catch (PDOException $e) {
            $cnx->rollback();
            echo "Erreur : " . $e->getMessage();
        }


    }
    ?>


</body>