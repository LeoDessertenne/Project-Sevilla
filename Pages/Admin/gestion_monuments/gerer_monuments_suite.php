<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monuments</title>
    <link rel="stylesheet" href="../Gestion_Parcours/Style/gestion_parcours.css">
    <link rel="stylesheet" href="style_gestion_monuments.css">
    <?php include "../../../linkStyle.php"; ?>

</head>
<body>
    <p id="logo">Gérer les monuments<span id="highlight">.</span></p>
    <?php
    $quartier = $_POST['choices'];
        include('../../../connexion.inc.php');
        $path = "set search_path to seville;";
        $results = $cnx->exec($path);
        $query = $cnx->prepare("SELECT * FROM seville.monuments WHERE LOWER(quartier) = LOWER('$quartier') ORDER BY id DESC");
        if ($query->execute()) {
            $rows = $query->fetchAll(PDO::FETCH_ASSOC);
            $reversedRows = array_reverse($rows);
    
            foreach ($reversedRows as $row) {
                // Récupérer les valeurs des colonnes pour chaque enregistrement
                $titre = $row['titre'];
                $image = $row['image'];
                $duree = $row['duree'];
                $description = $row['description'];
                $distance_marche = $row['distance_marche'];
                $distance_voiture = $row['distance_voiture'];
                $langue = $row['langue'];
                $monument = $row['monument'];
                $quartier = $row['quartier'];
    
                // Afficher les informations de chaque enregistrement
                echo '<article class="ParcoursCont">';
                echo '<section class="Parcours infos">';
                echo '<span class="titre_parcours">' . $titre . '</span>';
                echo '<div class="container_contenu">';
                echo '<img id="img_triana" src="' . $image . '" alt="image de la maison de Pilatos à Séville">';
                echo '<div class="duree_description">';
                if ($langue == 'fr') {
                    echo '<span class="duree">Durée : ~' . $duree . ' min</span><br>';
                } elseif ($langue == 'en') {
                    echo '<span class="duree">Duration: ~' . $duree . ' min</span><br>';
                } elseif ($langue == 'es') {
                    echo '<span class="duree">Duración: ~' . $duree . ' min</span><br>';
                }
                echo '<span class="description">' . $description . '</span>';
                echo '</div>';
                echo '</div>';
                echo '</section>';
                if ($distance_marche != null) {
                    echo '<section class="trajet"><i class="fa-solid fa-person-walking"></i>' . " " . $distance_marche . " min" . '</section>';
                } elseif ($distance_voiture != null) {
                    echo '<section class="trajet"><i class="fa-solid fa-car"></i>' . " " . $distance_voiture . " min" . '</section>';
                }
                echo "<form action='modifier_monuments.php' method='post'>";
                echo "<input type='hidden' name='titre' value=\"".$titre."\">";
                echo "<input type='hidden' name='duree' value=\"".$duree."\">";
                echo "<input type='hidden' name='description' value=\"".$description."\">";
                echo "<input type='hidden' name='image' value=\"".$image."\">";
                echo "<input type='hidden' name='quartier' value=\"".$quartier."\">";
                echo "<input type='hidden' name='monument' value=\"".$monument."\">";
                echo "<input type='hidden' name='langue' value=\"".$langue."\">";
                echo "<input type='hidden' name='distance_marche' value=\"".$distance_marche."\">";
                echo "<input type='hidden' name='distance_voiture' value=\"".$distance_voiture."\">";
                echo "<input type='submit' class='btn-modifier' value='Modifier'>";
                echo "</form>";

                echo "<form  action='supprimer_monuments.php' method='post' onsubmit='return confirm(\"Êtes-vous sûr de vouloir supprimer ce monuments ?\")'>";
                echo "<input type='hidden' name='monument' value=\"".$monument."\">";
                echo "<input type='hidden' name='langue' value=\"".$langue."\">";
                echo "<input type='submit' class='btn-supprimer' value='Supprimer'>";
                echo "</form>";
                echo '</article>';
            }
        } else {
            $errorInfo = $query->errorInfo();
            echo "erreur, veuillez revenir en arrière ou actualiser la page";
        }
        ?>
</body>
</html>
