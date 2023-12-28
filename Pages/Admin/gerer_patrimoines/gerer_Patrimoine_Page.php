<?php
if (!isset($_POST['choices'])) {
    header('location: gerer_Patrimoine.php');
    exit;
} else {
    $page = $_POST['choices'];
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Parcours/Style/style_parcours.css">
    <?php include "../../../linkStyle.php"; ?>
    <title>Gérer les Patrimoines</title>
    <style>
        .ParcoursCont {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: grey;
            width: 80%;
            border-radius: 10px;
            margin-top: 30px;
            margin-left: 10%;
            margin-right: auto;
        }

        .Parcours_container {
            margin: 0;
        }

        .btn-infop {
            display: flex;
            justify-content: end;
            align-items: end;
        }

        .btn-modifier {
            background-color: #58B368;
            padding: 10px;
            color: white;
            border: solid 0;
            border-radius: 10px;
        }

        .btn-supprimer {
            background-color: #F85353;
            padding: 10px;
            color: white;
            border: solid 0;
            border-radius: 10px;
        }

        .btn-modifier:hover {
            background-color: #4CA157;
        }


        .btn-supprimer:hover {
            background-color: #d04949;
        }

        .retour {
            display: inline-block;
            margin: 20px;
            text-decoration: none;
            background-color: #bb4e11;
            color: black;
            padding: 10px 30px;
            border-radius: 10px;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <a href="gerer_Patrimoine.php" class="retour">Retour</a>
    <p id="logo">Gérer les Patrimoines<span id="highlight">.</span></p>

    <?php
    include("../../../connexion.inc.php");
    $query = $cnx->prepare("SELECT * FROM seville.patrimoine WHERE page = '$page' ORDER BY id");

    if ($query->execute()) {
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $titre = $row['titre'];
            $chemin_image = $row['chemin_image'];
            $texte = $row['texte'];
            $langue = $row['langue'];

            echo '<article class="ParcoursCont">';
            echo '<article class="Parcours_container">';
            echo "<section class='Parcours'>";
            echo "<span class='titre_parcours'>$titre</span>";
            echo "<div class='container_contenu'>";
            echo "<img id='img_triana' src='$chemin_image' alt='image du quartier'>";

            echo "<span class='description'>$texte</span>";

            echo "</div>";
            echo '</div>';
            echo "</section>";

            echo "</article>";
            echo '</div>';
            echo "<form action='gerer_Patrimoine_Page_Modif.php' method='post'>";
            echo "<input type='hidden' name='titre' value=\"" . $titre . "\">";
            echo "<input type='hidden' name='texte' value=\"" . $texte . "\">";
            echo "<input type='hidden' name='chemin_image' value=\"" . $chemin_image . "\">";
            echo "<input type='submit' class='btn-modifier' value='Modifier'>";
            echo "</form>";

            echo "<form  action='supprimer_Patrimoine.php' method='post' onsubmit='return confirm(\"Êtes-vous sûr de vouloir supprimer cet article ?\")'>";
            echo "<input type='hidden' name='id' value='$id;'>";
            echo "<input type='submit' class='btn-supprimer' value='Supprimer'>";
            echo "</form>";
            echo '</article>';


        }
    }
    ?>


</body>

</html>