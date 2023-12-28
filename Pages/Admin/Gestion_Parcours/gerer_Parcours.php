<link rel="stylesheet" href="../../Parcours/Style/style_parcours.css">
<link rel="stylesheet" href="../../../Style/style_charte_graphique.css">
<link rel="stylesheet" href="Style/gestion_parcours.css">

<p id="logo">Gestion des Parcours<span id="highlight">.</span></p>
<a href="../admin.php" class="retour">Retour</a>
<?php
include("../../../connexion.inc.php");
$query = $cnx->prepare("SELECT * FROM seville.parcours ORDER BY quartier DESC");

if ($query->execute()) {
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $titre = $row['titre'];
        $duree = $row['duree'];
        $description = $row['description'];
        $lienAutrePage = $row['lienautrepage'];
        $image = $row['image'];
        $quartier = $row['quartier'];
        $langue = $row['langue'];

        echo '<article class="ParcoursCont">';
        echo '<article class="Parcours_container">';
        echo "<section id='$quartier' class='Parcours'>";
        echo "<span class='titre_parcours'>$titre</span>";
        echo "<div class='container_contenu'>";
        echo "<img id='img_triana' src='$image' alt='image du quartier'>";

        echo "<div class='duree_description'>";
        switch ($row['langue']) {
            case 'fr': {
                    if ($duree > 1) {
                        echo "<span class='duree'>Durée : $duree heures </span><br>";
                    } else {
                        echo "<span class='duree'>Durée : $duree heure </span><br>";
                    }
                    break;
                }
            case 'en': {
                    if ($duree > 1) {
                        echo "<span class='duree'>Length : $duree hours </span><br>";
                    } else {
                        echo "<span class='duree'>Length : $duree hour </span><br>";
                    }
                    break;
                }
            case 'es': {
                    if ($duree > 1) {
                        echo "<span class='duree'>Duración : $duree horas </span><br>";
                    } else {
                        echo "<span class='duree'>Duración : $duree hora </span><br>";
                    }
                    break;
                }
        }

        echo "<span class='description'>$description</span>";
        echo "</div>";
        if ($row['langue'] === 'fr') {
            $btn = 'Plus d\'informations';
        } else if ($row['langue'] === 'en') {
            $btn = 'More information';
        } else if ($row['langue'] === 'es') {
            $btn = 'Mas informaciones';
        }

        echo '</div>';
        echo "<div class='btn-infop'>";
        echo "<input class='infos-plus' type='submit' value=\"$btn\">";
        echo "</div>";
        echo "</section>";

        echo "</article>";
        echo '</div>';
        echo "<form action='modifier_Parcours.php' method='post'>";
        echo "<input type='hidden' name='titre' value='$titre'>";
        echo "<input type='hidden' name='duree' value='$duree'>";
        echo "<input type='hidden' name='description' value='$description'>";
        echo "<input type='hidden' name='lien' value='$lienAutrePage'>";
        echo "<input type='hidden' name='image' value='$image'>";
        echo "<input type='hidden' name='quartier' value='$quartier'>";
        echo "<input type='hidden' name='langue' value='$langue'>";
        echo "<input type='submit' class='btn-modifier' value='Modifier'>";
        echo "</form>";

        echo "<form  action='supprimer_Parcours.php' method='post' onsubmit='return confirm(\"Êtes-vous sûr de vouloir supprimer ce parcours ?\")'>";
        echo "<input type='hidden' name='quartier' value='$quartier'>";
        echo "<input type='hidden' name='langue' value='$langue'>";
        echo "<input type='submit' class='btn-supprimer' value='Supprimer'>";
        echo "</form>";
        echo '</article>';
    }
} else {
    $errorInfo = $query->errorInfo();
    echo "Erreur lors de l'exécution de la requête : " . $errorInfo[2];
}
?>