<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/global.css">
    <?php include "../../../linkStyle.php"; ?>
    <script src="../../../Js/main-index.js"> </script>
    <script src="../../../Js/script_navfixe.js"></script>
    <script src="../../../Js/script_menuBurger.js"> </script>
    <title>Architecture</title>
</head>

<body>

    <?php include "../../../navbar.php"; ?>


    <div class="navfixeg">

        <div class="navfixe" id="navfixe">
            <ul>
                <li>Architecture</li>
            </ul>
        </div>
    </div>

    <?php include "../../../langue.php"; ?>

    </div>
    <script>
        var nav = document.getElementById('navfixe');
    </script>


    <a href="../patrimoine.php" class="retour-btn"><button>&#x2B05;</button></a>


    <nav class="flex-nav">
        <div class="container">
            <div class="grid">
                <div class="column-xs-9 column-md-8">
                    <p id="logo">Architecture<span id="highlight">.</span></p>
                </div>
            </div>
        </div>
    </nav>
    <main class="intro-section">
        <div class="container">
            <div class="grid">
                <div class="column-xs-12">
                    <ul class="slider">



                        <?php
                        $langue = $_SESSION['langue'];
                        $query = $cnx->prepare("SELECT * FROM seville.Patrimoine WHERE langue = '$langue' and page='architecture';");
                        $com = 0;
                        if ($query->execute()) {
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                $titre = $row['titre'];
                                $image = $row['chemin_image'];
                                $texte = $row['texte'];

                                if ($com == 0) {
                                    echo '<li class="slider-item active">';
                                } else {
                                    echo '<li class="slider-item">';
                                } ?>
                                <div class="grid vertical">
                                    <div class="column-xs-12 column-md-2 hide-mobile">
                                        <div class="intro">
                                            <h1 class="title"><span class="underline"><?php echo $titre; ?></span></h1>
                                        </div>
                                    </div>
                                    <div class="column-xs-12 column-md-10">
                                        <div class="image-holder">
                                            <img src=<?php echo $image; ?>>
                                        </div>
                                        <div class="grid">
                                            <div class="column-xs-12 column-md-9">
                                                <div class="intro show-mobile">
                                                </div>
                                                <p class="description">
                                                    <?php echo $texte; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </li>

                        <?php
                                $com++;
                            }
                        } else {
                            $errorInfo = $query->errorInfo();
                            echo "Erreur lors de l'exécution de la requête : " . $errorInfo[2];
                        }
                        ?>


                    </ul>
                    <div class="grid">
                        <div class="column-xs-12">
                            <div class="controls">
                                <button class="previous">
                                    <span class="visually-hidden">Previous</span>
                                    <span class="icon arrow-left" aria-hidden="true"></span>
                                    </a>
                                    <button class="next">
                                        <span class="visually-hidden">Next</span>
                                        <span class="icon arrow-right" aria-hidden="true"></span>
                                        </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <script src="../Js/global.js"></script>

</body>

</html>