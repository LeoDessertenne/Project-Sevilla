<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style_quartier.css">
    <link rel="stylesheet" href="../../../Style/style_footer.css">
    <?php include "../../../linkStyle.php"; ?>
    <script src="../../../Js/script_navfixe.js"></script>
    <script src="../../../Js/script_menuBurger.js"></script>
    <title>El Porvenir</title>

</head>

<body>
    <?php include "../../../navbar.php"; ?>

    <div class="navfixeg">

        <div class="navfixe" id="navfixe">
            <ul>
                <li> <a href="LaCartuja.php">La Cartuja</a></li>
                <li> <a href="Macarena.php">Macarena</a></li>
                <li> <a href="ElCentro.php">El Centro</a></li>
                <li> <a href="SantaCruz.php">Santa Cruz</a></li>
                <li> <a href="ElPorvenir.php">El Porvenir</a></li>
                <li> <a href="ElArenal.php">El Arenal</a></li>
                <li> <a href="Triana.php">Triana</a></li>
                <li> <a href="Nervion.php">Nervión</a></li>
            </ul>
        </div>
    </div>

    <?php include "../../../langue.php"; ?>

    <a href="../Map.php" class="retour-btn"><button>&#x2B05;</button></a>

    <p id="logo">El Porvenir<span id="highlight">.</span></p>


    <?php
    $langue = $_SESSION['langue'];

    // Récupérer les données du quartier El Porvenir depuis la base de données
    $query = $cnx->prepare("SELECT * FROM seville.el_porvenir WHERE language = :langue or type = 'image'");
    $query->bindParam(':langue', $langue);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    // Vérifier s'il y a des résultats
    if ($result) {
        $avantages = '';
        $inconvenients = '';
        $image = '';
        $description = '';

        // Parcourir les résultats et extraire les avantages, les inconvénients, l'image et la description
        foreach ($result as $row) {
            if ($row['type'] === 'avantages') {
                $avantages .= '<li>' . $row['texte'] . '</li>';
            } elseif ($row['type'] === 'inconvénients') {
                $inconvenients .= '<li>' . $row['texte'] . '</li>';
            } elseif ($row['type'] === 'image') {
                $image = $row['texte'];
            } elseif ($row['type'] === 'texte') {
                $description = $row['texte'];
            }
        }

        echo '<div class="cont-quartier">';
        echo '<img src="' . $image . '" alt="Image El Arenal" class="img-quartier">';
        echo '<div class="cont-texte">';
        if ($_SESSION['langue'] == 'fr') {
            echo '<h2>Avantages :</h2>';
        }
        if ($_SESSION['langue'] == 'en') {
            echo '<h2>Advantages :</h2>';
        }
        if ($_SESSION['langue'] == 'es') {
            echo '<h2>Ventajas :</h2>';
        }
        echo '<ul class="texte-quartier">' . $avantages . '</ul>';
        if ($_SESSION['langue'] == 'fr') {
            echo '<h2>Inconvénients :</h2>';
        }

        if ($_SESSION['langue'] == 'en') {
            echo '<h2>Disadvantages :</h2>';
        }

        if ($_SESSION['langue'] == 'es') {
            echo '<h2>Desventajas :</h2>';
        }
        echo '<ul class="texte-quartier">' . $inconvenients . '</ul>';
        echo '</div>';
        echo '</div>';
        echo '<div class="cont-description">';
        if ($_SESSION['langue'] == 'fr') {
            echo '<h2>Description :</h2>';
        }

        if ($_SESSION['langue'] == 'en') {
            echo '<h2>Description :</h2>';
        }

        if ($_SESSION['langue'] == 'es') {
            echo '<h2>Descripción :</h2>';
        }
        echo '<p class="texte-quartier">' . $description . '</p>';
        echo '</div>';
    }
    ?>

    <table>
        <tr>
            <?php if ($_SESSION['langue'] == 'fr'): ?>
                <th>Monuments</th>
                <th>Bars & Restaurants</th>
                <th>Alimentation</th>
            <?php endif; ?>
            <?php if ($_SESSION['langue'] == 'en'): ?>
                <th>Monuments</th>
                <th>Bars & Restaurants</th>
                <th>Supply</th>
            <?php endif; ?>
            <?php if ($_SESSION['langue'] == 'es'): ?>
                <th>Monumentos</th>
                <th>Bares y restaurantes</th>
                <th>Alimentación</th>
            <?php endif; ?>
        </tr>
        <?php
        $query = $cnx->prepare("SELECT * FROM seville.el_porvenir");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $monuments = [];
        $barsRestaurants = [];
        $alimentation = [];

        // Parcours des résultats et construction des tableaux pour chaque type
        foreach ($result as $row) {
            if ($row['type'] === 'monuments') {
                $monuments[] = $row['texte'];
            } elseif ($row['type'] === 'bars_restaurants') {
                $barsRestaurants[] = $row['texte'];
            } elseif ($row['type'] === 'alimentation') {
                $alimentation[] = $row['texte'];
            }
        }

        // Détermination du nombre maximum d'éléments parmi les colonnes
        $maxCount = max(count($monuments), count($barsRestaurants), count($alimentation));

        // Génération des lignes du tableau avec les cellules pour chaque type
        for ($i = 0; $i < $maxCount; $i++) {
            echo "<tr>";
            echo "<td>" . ($i < count($monuments) ? $monuments[$i] : "") . "</td>";
            echo "<td>" . ($i < count($barsRestaurants) ? $barsRestaurants[$i] : "") . "</td>";
            echo "<td>" . ($i < count($alimentation) ? $alimentation[$i] : "") . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php include "../../../footer.php"; ?>
    </div>
</body>

</html>

<script>
    var nav = document.getElementById('navfixe');
</script>