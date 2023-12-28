<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'linkStyle.php'; ?>
    <link rel="stylesheet" href="Style/style.css" type="text/css" />
    <link rel="stylesheet" href="Style/style_footer.css">
    <link rel="stylesheet" href="Style/style_charte_graphique.css">
    <script src="https://kit.fontawesome.com/163cbdd365.js" crossorigin="anonymous"></script>
    <script src="Js/script_navfixe.js"></script>
    <script src="Js/script_menuBurger.js"></script>

</head>

<body>
    <?php 
        include 'navbar.php'; 
    ?>

    <div class="navfixeg">

        <div class="navfixe" id="navfixe">
            <ul>
                <li> <a href="#titre-seville"><?php
                    if ($_SESSION['langue'] === 'fr') {
                        echo "Séville";
                    } elseif ($_SESSION['langue'] === 'en') {
                        echo "Seville";
                    } elseif ($_SESSION['langue'] === 'es') {
                        echo "Sevilla";
                    }
                ?></a></li>
                <li> <a href="#map-seville"><?php
                    if ($_SESSION['langue'] === 'fr') {
                        echo "Map Séville";
                    } elseif ($_SESSION['langue'] === 'en') {
                        echo "Seville Map";
                    } elseif ($_SESSION['langue'] === 'es') {
                        echo "Mapa de Sevilla";
                    }
                ?></a></li>
            </ul>
        </div>
    </div>

    <?php 
        include 'langue.php'; 
    ?>

    <a href="#">
        <div class="btnRemonter" id="remonter">
            &uarr;
        </div>
    </a>

    <header>
        <h1><?php
            if ($_SESSION['langue'] === 'fr') {
                echo "Séville";
            } elseif ($_SESSION['langue'] === 'en') {
                echo "Seville";
            } elseif ($_SESSION['langue'] === 'es') {
                echo "Sevilla";
            }
        ?></h1>
    </header>
    <section class="introduction">
        <h2><?php
            if ($_SESSION['langue'] === 'fr') {
                echo "Notre Site";
            } elseif ($_SESSION['langue'] === 'en') {
                echo "Our Website";
            } elseif ($_SESSION['langue'] === 'es') {
                echo "Nuestro Sitio";
            }
        ?></h2>
        <p><?php
            if ($_SESSION['langue'] === 'fr') {
                echo "Dans le cadre de nos études en BUT Informatique nous avons conçu ce site web dans le but de promouvoir la culture de Séville. Vous pouvez y retrouver une carte interactive sur les différents quartiers de Séville avec leurs différentes activités. Vous pouvez aussi retrouver les principales informations sur l'histoire, la culture, le patrimoine naturel et l'architecture de Séville. Différents parcours de 2h, 1/2 journée et une journée entière sont également proposés sur notre site. Enfin, vous pouvez retrouver des informations pratiques sur la ville de Séville.";
            } elseif ($_SESSION['langue'] === 'en') {
                echo "As part of our studies in Computer Science, we have designed this website to promote the culture of Seville. You can find an interactive map of different neighborhoods in Seville with their various activities. You can also find key information about the history, culture, natural heritage, and architecture of Seville. Various itineraries for 2 hours, half a day, and a full day are also available on our site. Finally, you can find practical information about the city of Seville.";
            } elseif ($_SESSION['langue'] === 'es') {
                echo "Como parte de nuestros estudios en Informática, hemos diseñado este sitio web para promover la cultura de Sevilla. Puede encontrar un mapa interactivo de los diferentes barrios de Sevilla con sus diversas actividades. También puede encontrar información clave sobre la historia, cultura, patrimonio natural y arquitectura de Sevilla. En nuestro sitio, también se ofrecen varios recorridos de 2 horas, medio día y día completo. Por último, puede encontrar información práctica sobre la ciudad de Sevilla.";
            }
        ?></p>
    </section>


    <section>
        <h2 id="titre-seville"><?php
            if ($_SESSION['langue'] === 'fr') {
                echo "Séville";
            } elseif ($_SESSION['langue'] === 'en') {
                echo "Seville";
            } elseif ($_SESSION['langue'] === 'es') {
                echo "Sevilla";
            }
        ?></h2>
        <p><?php
            if ($_SESSION['langue'] === 'fr') {
                echo "Séville est la capitale de la province de Séville en Andalousie, en Espagne. C'est la quatrième ville la plus peuplée d'Espagne et la 30ème en Europe. La ville est célèbre pour son architecture, sa culture et son histoire riche. Séville est également connue pour ses bâtiments historiques tels que la Giralda, la cathédrale de Séville, l'Alcazar et l'ancien quartier juif de Santa Cruz. La ville est également réputée pour ses fêtes traditionnelles comme la Semaine sainte et la Feria de Abril. Le flamenco est également une attraction populaire à Séville. La ville est également un important centre économique et universitaire.";
            } elseif ($_SESSION['langue'] === 'en') {
                echo "Seville is the capital of the province of Seville in Andalusia, Spain. It is the fourth most populous city in Spain and the 30th in Europe. The city is famous for its architecture, culture, and rich history. Seville is also known for its historical buildings such as the Giralda, Seville Cathedral, the Alcazar, and the former Jewish quarter of Santa Cruz. The city is also renowned for its traditional festivals like Holy Week and the April Fair. Flamenco is also a popular attraction in Seville. The city is also an important economic and educational center.";
            } elseif ($_SESSION['langue'] === 'es') {
                echo "Sevilla es la capital de la provincia de Sevilla en Andalucía, España. Es la cuarta ciudad más poblada de España y la 30ª de Europa. La ciudad es famosa por su arquitectura, cultura y rica historia. Sevilla también es conocida por sus edificios históricos como la Giralda, la Catedral de Sevilla, el Alcázar y el antiguo barrio judío de Santa Cruz. La ciudad también es famosa por sus festividades tradicionales como la Semana Santa y la Feria de Abril. El flamenco también es una atracción popular en Sevilla. La ciudad también es un importante centro económico y educativo.";
            }
        ?></p>
    </section>
    <div class="iframe" id="map-seville">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94392.5215785617!2d-6.026141206542933!3d37.37504602202579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c1114be6291%3A0x34f018621cfe5648!2sS%C3%A9ville%2C%20Espagne!5e0!3m2!1sfr!2sfr!4v1674831179637!5m2!1sfr!2sfr"
            width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>


</html>
<script>
var nav = document.getElementById('navfixe');
</script>