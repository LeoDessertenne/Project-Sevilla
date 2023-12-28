<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style_quartier.css">
    <link rel="stylesheet" href="../../../Style/style_footer.css">
    <?php include "../../../linkStyle.php"; ?>
    <script src="../../../Js/script_navfixe.js"></script>
    <script src="../../../Js/script_menuBurger.js"></script>
    <title>El Arenal</title>

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

    <p id="logo">El Arenal<span id="highlight">.</span></p>

    <?php
    $langue = $_SESSION['langue'];

    $query = $cnx->prepare("SELECT * FROM seville.el_arenal WHERE language = :langue or type = 'image'");
    $query->bindParam(':langue', $langue);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        $avantages = '';
        $inconvenients = '';
        $image = '';
        $description = '';

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
        echo '<h2>Avantages :</h2>';
        echo '<ul class="texte-quartier">' . $avantages . '</ul>';
        echo '<h2>Inconvénients :</h2>';
        echo '<ul class="texte-quartier">' . $inconvenients . '</ul>';
        echo '</div>';
        echo '</div>';
        echo '<div class="cont-description">';
        echo '<h2>Description :</h2>';
        echo '<p class="texte-quartier">' . $description . '</p>';
        echo '</div>';
    }
        ?>

    <table>
        <tr>
            <th>Monuments</th>
            <th>Bars & Restaurants</th>
            <th>Alimentation</th>
        </tr>
        <?php
    $query = $cnx->prepare("SELECT * FROM seville.el_arenal");
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
</body>

</html>