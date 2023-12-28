<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style_parcours.css">
    <link rel="stylesheet" href="../../Style/style_footer.css">
    <?php include "../../linkStyle.php"; ?>
    <script src="../../Js/script_navfixe.js"></script>
    <script src="../../Js/script_menuBurger.js"> </script>
    <script src="https://kit.fontawesome.com/163cbdd365.js" crossorigin="anonymous"></script>
    <title>Parcours</title>
</head>

<body>
    <?php include "../../navbar.php"; ?>

    <div class="navfixeg">
        <div class="navfixe" id="navfixe">
            <ul>
                <?php
                $query = $cnx->prepare("SELECT DISTINCT quartier FROM seville.parcours WHERE langue = 'fr' ORDER BY quartier DESC");
                if ($query->execute()) {
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $quartier = $row['quartier'];
                        echo "<li><a href='#$quartier'>$quartier</a></li>";
                    }
                } else {
                    $errorInfo = $query->errorInfo();
                    echo "Erreur lors de l'exécution de la requête : " . $errorInfo[2];
                }
                ?>
            </ul>
        </div>
    </div>

    


    <?php if ($_SESSION['langue'] == 'fr') { ?>
        <p id="logo">Explorez Séville<span id="highlight">.</span></p>
    <?php } elseif ($_SESSION['langue'] == 'en') { ?>
        <p id="logo">Explore Sevilla<span id="highlight">.</span></p>
    <?php } elseif ($_SESSION['langue'] == 'es') { ?>
        <p id="logo">Explorar Sevilla<span id="highlight">.</span></p>
    <?php } ?>

    <?php include "../../langue.php"; ?>

    <article class="Parcours_container">

        <?php
        $langue = $_SESSION['langue'];
        $query = $cnx->prepare("SELECT * FROM seville.parcours WHERE langue = '$langue' ORDER BY quartier DESC");

        if ($query->execute()) {
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $titre = $row['titre'];
                $duree = $row['duree'];
                $description = $row['description'];
                $lienAutrePage = $row['lienautrepage'];
                $image = $row['image'];
                $quartier = $row['quartier'];

                echo "<section id='$quartier' class='Parcours'>";
                echo "<span class='titre_parcours'>$titre</span>";
                echo "<div class='container_contenu'>";
                echo "<img id='img_triana' src='$image' alt='image du quartier'>";

                echo "<div class='duree_description'>";
                switch ($langue) {
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
                if ($langue === 'fr') {
                    $btn = 'Plus d\'informations';
                } else if ($langue === 'en') {
                    $btn = 'More information';
                } else if ($langue === 'es') {
                    $btn = 'Mas informaciones';
                }
                
                echo '</div>';
                echo "<form class='cont-btnPlus' action='plus/enSavoirPlus.php' method='POST'>";
                echo "<input type='hidden' name='quartier' value='$quartier'>";
                echo "<input class='infos-plus' type='submit' value=\"$btn\">";
                echo '</form>';
                


                echo "</section>";
            }
        } else {
            $errorInfo = $query->errorInfo();
            echo "Erreur lors de l'exécution de la requête : " . $errorInfo[2];
        }
        ?>
    </article>

    <?php include "../../footer.php"; ?>

    <script src="app.js"></script>
    <!-- Main JS -->
    <script src="../../Js/main.js"></script>
</body>

</html>

<script>
    var nav = document.getElementById('navfixe');
</script>