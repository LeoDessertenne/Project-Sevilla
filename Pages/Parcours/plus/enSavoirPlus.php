<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../../../linkStyle.php"; ?>
    <link rel="stylesheet" href="../../../Style/style_retour.css">
    <link rel="stylesheet" href="../Style/style_infos.css">
    <link rel="stylesheet" href="../Style/style_parcours.css">
    <script src="../../Js/script_navfixe.js"></script>
    <script src="../../../Js/script_menuBurger.js"></script>
    <script src="https://kit.fontawesome.com/163cbdd365.js" crossorigin="anonymous"></script>
    <title>Parcours Triana</title>
</head>

<body>
    <?php include "../../../navbar.php"; ?>

    <a href="../parcours.php" class="retour-btn"><button>&#x2B05;</button></a>

    <?php
    include "../../../langue.php";
    $langue = $_SESSION['langue'];

    // Vérifier si la page a été accédée via un formulaire de soumission (submit)
    if (isset($_POST['quartier'])) {
        // Récupérer le quartier sélectionné à partir du formulaire
        $quartier = $_POST['quartier'];
        // Mettre à jour la variable de session "quartier"
        $_SESSION['quartier'] = $quartier;
    } else {
        // Vérifier si la variable de session "quartier" est déjà définie
        if (isset($_SESSION['quartier'])) {
            // Récupérer le quartier à partir de la variable de session
            $quartier = $_SESSION['quartier'];
        } else {
            // Initialiser la variable de session "quartier" avec la première valeur du quartier
            $query = $cnx->prepare("SELECT DISTINCT quartier FROM seville.parcours WHERE langue = '$langue' ORDER BY quartier ASC LIMIT 1");
            if ($query->execute()) {
                $row = $query->fetch(PDO::FETCH_ASSOC);
                $quartier = $row['quartier'];
                $_SESSION['quartier'] = $quartier;
            } else {
                $errorInfo = $query->errorInfo();
                echo "Erreur lors de l'exécution de la requête : " . $errorInfo[2];
            }
        }
    }

    echo "<p id=\"logo\">Parcours - $quartier<span id=\"highlight\">.</span></p>";

    echo '<div class="container">
        <div class="planning">';

    $query = $cnx->prepare("SELECT * FROM seville.monuments WHERE LOWER(quartier) = LOWER('$quartier') AND langue = '$langue' ORDER BY id DESC");

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

            // Afficher les informations de chaque enregistrement
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
        }
    } else {
        $errorInfo = $query->errorInfo();
        echo "erreur, veuillez revenir en arrière ou actualiser la page";
    }
    ?>

    </div>
    </div>

    <?php include "../../../footer.php"; ?>
</body>

</html>