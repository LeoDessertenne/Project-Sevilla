<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style_patrimoine.css">
    <?php include '../../linkStyle.php'; ?>
    <script src="../../Js/script_navfixe.js"></script>
    <script src="../../Js/script_menuBurger.js"></script>
    <script src="Js/pageTest.js"></script>
</head>

<body>
    <?php include "../../navbar.php"; ?>

    <div class="navfixeg">
        <div class="navfixe" id="navfixe">
            <ul>
            <?php
        if ($_SESSION['langue'] === 'fr') {
            echo '<li> <a href="./Histoire/pageHistoire.php">Histoire</a></li>
            <li> <a href="./Architecture/pageArchitecture.php">Architecture</a></li>
            <li> <a href="./Patrimoine_naturel/patrimoine_naturel.php">Patrimoine naturel</a></li>
            <li> <a href="./Urbanisme/urbanisme.php">Urbanisme</a></li>';
        } elseif ($_SESSION['langue'] === 'en') {
            echo '
            <li> <a href="./Histoire/pageHistoire.php">History</a></li>
            <li> <a href="./Architecture/pageArchitecture.php">Architecture</a></li>
            <li> <a href="./Patrimoine_naturel/patrimoine_naturel.php">Natural heritage</a></li>
            <li> <a href="./Urbanisme/urbanisme.php">Urban planning</a></li>';
        } elseif ($_SESSION['langue'] === 'es') {
            echo '
            <li> <a href="./Histoire/pageHistoire.php">Historia</a></li>
            <li> <a href="./Architecture/pageArchitecture.php">Arquitectura</a></li>
            <li> <a href="./Patrimoine_naturel/patrimoine_naturel.php">Patrimonio natural</a></li>
            <li> <a href="./Urbanisme/urbanisme.php">Urbanismo</a></li>';
        }
        ?>
                
            </ul>
        </div>
    </div>

    <?php include "../../langue.php"; ?>
    <?php
        if ($_SESSION['langue'] === 'fr') {
            echo '<p id="logo2">Patrimoine-Culturel<span id="highlight">.</span></p>';
        } elseif ($_SESSION['langue'] === 'en') {
            echo '<p id="logo2">Cultural Heritage<span id="highlight">.</span></p>';
        } elseif ($_SESSION['langue'] === 'es') {
            echo '<p id="logo2">Patrimonio cultural<span id="highlight">.</span></p>';
        }
    ?>
    

    <?php
        if ($_SESSION['langue'] === 'fr') {
            echo '<h2><p class="pp">Ici, vous pouvez retrouver 4 types de patrimoine culture : Histoire, Architecture, Patrimoine naturel et Urbanisme.</p></h2>';
        } elseif ($_SESSION['langue'] === 'en') {
            echo '<h2><p class="pp">Here you can find 4 types of cultural heritage: History, Architecture, Natural heritage and Urban planning.</p></h2>';
        } elseif ($_SESSION['langue'] === 'es') {
            echo '<h2><p class="pp">Aquí encontrará 4 tipos de patrimonio cultural: Historia, Arquitectura, Patrimonio Natural y Urbanismo.</p></h2>';
        }
    ?>

    <nav class="nav-patrimoine">
        <div class="container">
            <div class="grid">
                <div class="column-xs-12 column-md-6">
                    <figure class="img-container">
                        <a href="./Histoire/pageHistoire.php">
                            <img src="https://a.cdn-hotels.com/gdcs/production85/d1474/95ef4e66-fd92-41dc-99af-c7f628857eb6.jpg" />
                            <div class="img-content-hover">
                            <?php
                            if ($_SESSION['langue'] === 'fr') {
                                echo '<h2>Histoire</h2>';
                            } elseif ($_SESSION['langue'] === 'en') {
                                echo '<h2>History</h2>';
                            } elseif ($_SESSION['langue'] === 'es') {
                                echo '<h2>Historia</h2>';
                            }
                            ?>
                            </div>
                        </a>
                    </figure>
                </div>
                <div class="column-xs-12 column-md-6">
                    <figure class="img-container">
                        <a href="./Architecture/pageArchitecture.php">
                            <img src="https://tiptoeingworld.com/wp-content/uploads/2017/11/Metropol-Parasol-Seville.jpg" />
                            <div class="img-content-hover">
                            <?php
                            if ($_SESSION['langue'] === 'fr') {
                                echo '<h2>Architecture</h2>';
                            } elseif ($_SESSION['langue'] === 'en') {
                                echo '<h2>Architecture</h2>';
                            } elseif ($_SESSION['langue'] === 'es') {
                                echo '<h2>Arquitectura</h2>';
                            }
                            ?>
                            </div>
                        </a>
                    </figure>
                </div>
                <div class="column-xs-12 column-md-6">
                    <figure class="img-container">
                        <a href="./Patrimoine_naturel/patrimoine_naturel.php">
                            <img src="https://www.mercerhoteles.com/photo/blog/45/1/seville-at-giraldas-feet.jpg?w=1440" />
                            <div class="img-content-hover">
                            <?php
                            if ($_SESSION['langue'] === 'fr') {
                                echo '<h2>Patrimoine naturel</h2>';
                            } elseif ($_SESSION['langue'] === 'en') {
                                echo '<h2>Natural heritage</h2>';
                            } elseif ($_SESSION['langue'] === 'es') {
                                echo '<h2>Patrimonio natural</h2>';
                            }
                            ?>
                            </div>
                        </a>
                    </figure>
                </div>
                <div class="column-xs-12 column-md-6">
                    <figure class="img-container">
                        <a href="./Urbanisme/urbanisme.php">
                            <img src="https://www.artchitectours.fr/wp-content/uploads/2017/03/visiter-seville-001.jpg" />
                            <div class="img-content-hover">
                            <?php
                            if ($_SESSION['langue'] === 'fr') {
                                echo '<h2>Urbanisme</h2>';
                            } elseif ($_SESSION['langue'] === 'en') {
                                echo '<h2>Urban planning</h2>';
                            } elseif ($_SESSION['langue'] === 'es') {
                                echo '<h2>Urbanismo</h2>';
                            }
                            ?>
                            </div>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </nav>
    <?php include "../../footer.php"; ?>
</body>
<script>
    var nav = document.getElementById('navfixe');
</script>

</html>