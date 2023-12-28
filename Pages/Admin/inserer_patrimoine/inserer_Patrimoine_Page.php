<?php
    session_start();

    if (isset($_POST['choices'])) {
        $_SESSION['page'] = $_POST['choices']; // Stocker la valeur dans une variable de session
    }
    if (!isset($_SESSION['connecte'])) {
        header("location: ../../../index.php");
        exit;
    }
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Parcours/Style/style_parcours.css">
    <link rel="stylesheet" href="style_ajouter_patrimoine.css">

    <?php include "../../../linkStyle.php"; ?>
    <title>Insérer un patrimoine</title>
    <style>
    </style>
</head>

<body>

    <p id="logo">Insérer un patrimoine<span id="highlight">.</span></p>
    <a href="inserer_Patrimoine.php" class="retour">Retour</a>
    <form id="form" method="post">

    <div>
        <label for="titre" maxlength="255">Titre</label>
        <input type="text" id="titre" name="titre"><br>
    </div>

    <div>
        <label for="chemin_image">Chemin image</label>
        <input type="text" id="chemin_image" name="chemin_image"><br>
    </div>

    <div>
        <label for="texte">Description</label>
        <input type="text" id="texte" name="texte"><br>
    </div>

    <div>
        <label for="langue" maxlength="255">Langue</label>
        <input type="text" id="langue" name="langue"><br>
    </div>

      <input type="submit" name="submit" value="Inserer">
    </form>';

    <?php
        include('../../../connexion.inc.php');
        $path = "set search_path to seville;";
        $results = $cnx->exec($path);
    if (isset($_POST['submit'])) {
        $titre = $_POST["titre"];
        $chemin_image = $_POST["chemin_image"];
        $texte = $_POST["texte"];
        $langue = $_POST["langue"];
        $page = $_SESSION['page'];
        $all_fields = true;
    
        // Vérifier chaque variable et afficher un message d'erreur si la variable n'est pas remplie
        if (empty($titre)) {
            $all_fields = false;
        }
        if (empty($chemin_image)) {
            $all_fields = false;
        }
        if (empty($texte)) {
            $all_fields = false;
        }
        if (empty($langue)) {
            $all_fields = false;
        }
        if ($all_fields) {
            $query = $cnx->prepare("SELECT * FROM patrimoine WHERE titre = ? and page = '$page'");
            $query->execute([$titre]);
            $result = $query->fetch();
    
            if ($result) {
                echo "<p class='erreur-add-conf'>Le titre du parcours existe déjà.</p>";
            } else {
                $query = "INSERT INTO patrimoine (page, titre, chemin_image, texte, langue) VALUES ('$page', '$titre', '$chemin_image', '$texte', '$langue')";
                $cnx->exec($query);
                echo "<p style='padding-left: 50px; color: white; font-size: 25px'>Insertion réussie</p>";
            }
        }
    }
    ?>


</body>

</html>